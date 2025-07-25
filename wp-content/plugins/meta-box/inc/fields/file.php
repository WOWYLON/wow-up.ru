<?php
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'RWMB_File_Field' ) )
{
	class RWMB_File_Field extends RWMB_Field
	{
		/**
		 * Enqueue scripts and styles
		 *
		 * @return void
		 */
		static function admin_enqueue_scripts()
		{
			wp_enqueue_style( 'rwmb-file', RWMB_CSS_URL . 'file.css', array(), RWMB_VER );
			wp_enqueue_script( 'rwmb-file', RWMB_JS_URL . 'file.js', array( 'jquery' ), RWMB_VER, true );
			wp_localize_script( 'rwmb-file', 'rwmbFile', array(
				'maxFileUploadsSingle' => esc_html__( 'You may only upload maximum %d file', 'aaka' ),
				'maxFileUploadsPlural' => esc_html__( 'You may only upload maximum %d files', 'aaka' ),
			) );
		}

		/**
		 * Add actions
		 *
		 * @return void
		 */
		static function add_actions()
		{
			// Add data encoding type for file uploading
			add_action( 'post_edit_form_tag', array( __CLASS__, 'post_edit_form_tag' ) );

			// Delete file via Ajax
			add_action( 'wp_ajax_rwmb_delete_file', array( __CLASS__, 'wp_ajax_delete_file' ) );

			// allow reordering
			add_action( 'wp_ajax_rwmb_reorder_files', array( __CLASS__, 'wp_ajax_reorder_files' ) );
		}

		/**
		 * Ajax callback for reordering images
		 *
		 * @return void
		 */
		static function wp_ajax_reorder_files()
		{
			$field_id = isset( $_POST['field_id'] ) ? $_POST['field_id'] : 0;
			$order    = isset( $_POST['order'] ) ? $_POST['order'] : '';
			$post_id  = isset( $_POST['post_id'] ) ? intval( $_POST['post_id'] ) : 0;

			check_ajax_referer( "rwmb-reorder-files_{$field_id}" );

			parse_str( $order, $items );

			delete_post_meta( $post_id, $field_id );

			foreach ( $items['item'] as $item )
			{
				add_post_meta( $post_id, $field_id, $item, false );
			}

			wp_send_json_success();
		}

		/**
		 * Add data encoding type for file uploading
		 *
		 * @return void
		 */
		static function post_edit_form_tag()
		{
			echo ' enctype="multipart/form-data"';
		}

		/**
		 * Ajax callback for deleting files.
		 * Modified from a function used by "Verve Meta Boxes" plugin
		 *
		 * @link http://goo.gl/LzYSq
		 * @return void
		 */
		static function wp_ajax_delete_file()
		{
			$post_id       = isset( $_POST['post_id'] ) ? intval( $_POST['post_id'] ) : 0;
			$field_id      = isset( $_POST['field_id'] ) ? $_POST['field_id'] : 0;
			$attachment_id = isset( $_POST['attachment_id'] ) ? intval( $_POST['attachment_id'] ) : 0;
			$force_delete  = isset( $_POST['force_delete'] ) ? intval( $_POST['force_delete'] ) : 0;

			check_ajax_referer( "rwmb-delete-file_{$field_id}" );

			delete_post_meta( $post_id, $field_id, $attachment_id );
			$ok = $force_delete ? wp_delete_attachment( $attachment_id ) : true;

			if ( $ok )
				wp_send_json_success();
			else
				wp_send_json_error( esc_html__( 'Error: Cannot delete file', 'aaka' ) );
		}

		/**
		 * Get field HTML
		 *
		 * @param mixed $meta
		 * @param array $field
		 *
		 * @return string
		 */
		static function html( $meta, $field )
		{
			$i18n_title = apply_filters( 'rwmb_file_upload_string', _x( 'Upload Files', 'file upload', 'aaka' ), $field );
			$i18n_more  = apply_filters( 'rwmb_file_add_string', _x( '+ Add new file', 'file upload', 'aaka' ), $field );

			// Uploaded files
			$html             = self::get_uploaded_files( $meta, $field );
			$new_file_classes = array( 'new-files' );
			if ( ! empty( $field['max_file_uploads'] ) && count( $meta ) >= (int) $field['max_file_uploads'] )
				$new_file_classes[] = 'hidden';

			// Show form upload
			$html .= sprintf(
				'<div class="%s">
					<h4>%s</h4>
					<div class="file-input"><input type="file" name="%s[]" /></div>
					<a class="rwmb-add-file" href="#"><strong>%s</strong></a>
				</div>',
				implode( ' ', $new_file_classes ),
				$i18n_title,
				$field['id'],
				$i18n_more
			);

			return $html;
		}

		static function get_uploaded_files( $files, $field )
		{
			$reorder_nonce = wp_create_nonce( "rwmb-reorder-files_{$field['id']}" );
			$delete_nonce  = wp_create_nonce( "rwmb-delete-file_{$field['id']}" );

			$classes = array( 'rwmb-file', 'rwmb-uploaded' );
			if ( count( $files ) <= 0 )
				$classes[] = 'hidden';
			$ol   = '<ul class="%s" data-field_id="%s" data-delete_nonce="%s" data-reorder_nonce="%s" data-force_delete="%s" data-max_file_uploads="%s" data-mime_type="%s">';
			$html = sprintf(
				$ol,
				implode( ' ', $classes ),
				$field['id'],
				$delete_nonce,
				$reorder_nonce,
				$field['force_delete'] ? 1 : 0,
				$field['max_file_uploads'],
				$field['mime_type']
			);

			foreach ( $files as $attachment_id )
			{
				$html .= self::file_html( $attachment_id );
			}

			$html .= '</ul>';

			return $html;
		}

		static function file_html( $attachment_id )
		{
			$i18n_delete = apply_filters( 'rwmb_file_delete_string', _x( 'Delete', 'file upload', 'aaka' ) );
			$i18n_edit   = apply_filters( 'rwmb_file_edit_string', _x( 'Edit', 'file upload', 'aaka' ) );
			$li          = '
			<li id="item_%s">
				<div class="rwmb-icon">%s</div>
				<div class="rwmb-info">
					<a href="%s" target="_blank">%s</a>
					<p>%s</p>
					<a title="%s" href="%s" target="_blank">%s</a> |
					<a title="%s" class="rwmb-delete-file" href="#" data-attachment_id="%s">%s</a>
				</div>
			</li>';

			$mime_type = get_post_mime_type( $attachment_id );

			return sprintf(
				$li,
				$attachment_id,
				wp_get_attachment_image( $attachment_id, array( 60, 60 ), true ),
				wp_get_attachment_url( $attachment_id ),
				get_the_title( $attachment_id ),
				$mime_type,
				$i18n_edit,
				get_edit_post_link( $attachment_id ),
				$i18n_edit,
				$i18n_delete,
				$attachment_id,
				$i18n_delete
			);
		}

		/**
		 * Get meta values to save
		 *
		 * @param mixed $new
		 * @param mixed $old
		 * @param int   $post_id
		 * @param array $field
		 *
		 * @return array|mixed
		 */
		static function value( $new, $old, $post_id, $field )
		{
			$name = $field['id'];
			if ( empty( $_FILES[$name] ) )
				return $new;

			$new   = array();
			$files = self::fix_file_array( $_FILES[$name] );

			foreach ( $files as $file_item )
			{
				$file = wp_handle_upload( $file_item, array( 'test_form' => false ) );

				if ( ! isset( $file['file'] ) )
					continue;

				$file_name = $file['file'];

				$attachment = array(
					'post_mime_type' => $file['type'],
					'guid'           => $file['url'],
					'post_parent'    => $post_id,
					'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $file_name ) ),
					'post_content'   => '',
				);
				$id         = wp_insert_attachment( $attachment, $file_name, $post_id );

				if ( ! is_wp_error( $id ) )
				{
					wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $file_name ) );

					// Save file ID in meta field
					$new[] = $id;
				}
			}

			return array_unique( array_merge( $old, $new ) );
		}

		/**
		 * Fixes the odd indexing of multiple file uploads from the format:
		 *     $_FILES['field']['key']['index']
		 * To the more standard and appropriate:
		 *     $_FILES['field']['index']['key']
		 *
		 * @param array $files
		 *
		 * @return array
		 */
		static function fix_file_array( $files )
		{
			$output = array();
			foreach ( $files as $key => $list )
			{
				foreach ( $list as $index => $value )
				{
					$output[$index][$key] = $value;
				}
			}

			return $output;
		}

		/**
		 * Normalize parameters for field
		 *
		 * @param array $field
		 *
		 * @return array
		 */
		static function normalize_field( $field )
		{
			$field             = wp_parse_args( $field, array(
				'std'              => array(),
				'force_delete'     => false,
				'max_file_uploads' => 0,
				'mime_type'        => '',
			) );
			$field['multiple'] = true;

			return $field;
		}

		/**
		 * Get the field value
		 * The difference between this function and 'meta' function is 'meta' function always returns the escaped value
		 * of the field saved in the database, while this function returns more meaningful value of the field
		 *
		 * @param  array    $field   Field parameters
		 * @param  array    $args    Not used for this field
		 * @param  int|null $post_id Post ID. null for current post. Optional.
		 *
		 * @return mixed Full info of uploaded files
		 */
		static function get_value( $field, $args = array(), $post_id = null )
		{
			if ( ! $post_id )
				$post_id = get_the_ID();

			/**
			 * Get raw meta value in the database, no escape
			 * Very similar to self::meta() function
			 */
			$file_ids = get_post_meta( $post_id, $field['id'], false );

			// For each file, get full file info
			$value = array();
			foreach ( $file_ids as $file_id )
			{
				if ( $file_info = call_user_func( array( RW_Meta_Box::get_class_name( $field ), 'file_info' ), $file_id, $args ) )
				{
					$value[$file_id] = $file_info;
				}
			}

			return $value;
		}

		/**
		 * Output the field value
		 * Display unordered list of files
		 *
		 * @param  array    $field   Field parameters
		 * @param  array    $args    Additional arguments. Not used for these fields.
		 * @param  int|null $post_id Post ID. null for current post. Optional.
		 *
		 * @return mixed Field value
		 */
		static function the_value( $field, $args = array(), $post_id = null )
		{
			$value = self::get_value( $field, $args, $post_id );
			if ( ! $value )
				return '';

			$output = '<ul>';
			foreach ( $value as $file_id => $file_info )
			{
				$output .= sprintf(
					'<li><a href="%s" target="_blank">%s</a></li>',
					wp_get_attachment_url( $file_id ),
					get_the_title( $file_id )
				);
			}
			$output .= '</ul>';

			return $output;
		}

		/**
		 * Get uploaded file information
		 *
		 * @param int   $file_id Attachment file ID (post ID). Required.
		 * @param array $args    Array of arguments (for size).
		 *
		 * @return array|bool False if file not found. Array of (id, name, path, url) on success
		 */
		static function file_info( $file_id, $args = array() )
		{
			$path = get_attached_file( $file_id );
			if ( ! $path )
			{
				return false;
			}

			return array(
				'ID'    => $file_id,
				'name'  => basename( $path ),
				'path'  => $path,
				'url'   => wp_get_attachment_url( $file_id ),
				'title' => get_the_title( $file_id ),
			);
		}
	}
}
