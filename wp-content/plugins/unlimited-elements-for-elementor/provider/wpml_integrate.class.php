<?php

/**
 * @package Unlimited Elements
 * @author UniteCMS http://unitecms.net
 * @copyright Copyright (c) 2016 UniteCMS
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

//no direct accees
defined ('UNLIMITED_ELEMENTS_INC') or die ('restricted aceess');

class UniteCreatorWpmlIntegrate{
	
	private $arrLanguages;
	private $arrShort;
	private $arrShortPrefix;
	private $isInited = false;
	public $activeLanguage;
	private static $objWpmlSingleton;
	public static $arrWidgetItemsData = array();
	
	
	/**
	 * check if wpml exists
	 */
	public static function isWpmlExists(){
		
		if(defined("WPML_PLUGIN_PATH"))
			return(true);
		
		return(false);
	}
	
	
	/**
	 * get default site langauge
	 */
	public function getDefaultSiteLanguage(){
		
		$wpml_settings = get_site_option('icl_sitepress_settings');
		$default_language = isset($wpml_settings['default_language']) ? $wpml_settings['default_language'] : '';
		
		return($default_language);
	}
	
	/**
	 * init the languages
	 */
	public function init(){
		
		if($this->isInited == true)
			return(false);
		
		$this->arrLanguages = apply_filters( 'wpml_active_languages',NULL);
		
		if(empty($this->arrLanguages))
			$this->arrLanguages = array();
		
		$this->arrShort = array();
		$this->arrShortPrefix = array();
		
		$this->arrShortPrefix["__none__"] = __("Not Selected","unlimited-elements-for-elementor");

		
		//set active and short
		foreach($this->arrLanguages as $language){
			
			$code = UniteFunctionsUC::getVal($language, "code");
			$isActive = UniteFunctionsUC::getVal($language, "active");
			if($isActive == true){
				$this->activeLanguage = $code;
			}
			
			$langName = UniteFunctionsUC::getVal($language, "native_name");
			if(empty($langName))
				$langName = UniteFunctionsUC::getVal($language, "translated_name");
			
			$this->arrShort[$code] = $langName;
			$this->arrShortPrefix[$code] = $langName;
			
		}
		
		if(empty($this->activeLanguage))
			$this->activeLanguage = UniteFunctionsUC::getArrFirstValue($this->arrShortPrefix);
		
		$this->isInited = true;
		
	}
	
	
	/**
	 * get active languages
	 */
	public function getLanguagesShort($addPrefix = false, $noActive = false){
		
		if(self::isWpmlExists() == false)
			return(array());
		
		$this->init();
		
		if($addPrefix == true)
			return($this->arrShortPrefix);
		
		$arrLang = $this->arrShort;
		
		//get without active langauge
		if($noActive == true){
			
			$defaultLanguage = $this->getDefaultSiteLanguage();
			if(empty($defaultLanguage))
				$defaultLanguage = UniteFunctionsUC::getArrFirstValue($arrLang);
			
			unset($arrLang[$defaultLanguage]);
		}
		
				
		return($arrLang);
	}
	
	/**
	 * get active language
	 */
	public function getActiveLanguage(){
		
		if(self::isWpmlExists() == false)
			return(array());
		
		$this->init();
		
		return($this->activeLanguage);
	}
	
	/**
	 * get translated attachment id for media translation
	 */
	public static function getTranslatedAttachmentID($thumbID){
		
		if(self::isWpmlExists() == false)
			return($thumbID);
		
		if(empty(self::$objWpmlSingleton)){
			self::$objWpmlSingleton = new UniteCreatorWpmlIntegrate();
			self::$objWpmlSingleton->init();
		}
		
		if(empty(self::$objWpmlSingleton->activeLanguage))
			return($thumbID);
			
		$alternateThumbID = apply_filters( 'wpml_object_id', $thumbID, 'attachment', FALSE, self::$objWpmlSingleton->activeLanguage); 		
		
		if(empty($alternateThumbID))
			return($thumbID);
		
		
		return($alternateThumbID);
	}
	
	
	/**
	 * get addon params translatable fields
	 */
	private function getTranslatableParamsFields($widgetTitle, $params, $isItems = false){
		
		$arrFields = array();
				
		foreach($params as $param){
			
			$type = UniteFunctionsUC::getVal($param, "type");
			
			$editorType = null;
						
			switch($type){
				case UniteCreatorDialogParam::PARAM_TEXTFIELD:
					$editorType = "LINE";
				break;
				case UniteCreatorDialogParam::PARAM_EDITOR:
					$editorType = "VISUAL";
				break;
				case UniteCreatorDialogParam::PARAM_TEXTAREA:
					$editorType = "AREA";
				break;
				case UniteCreatorDialogParam::PARAM_LINK:
					$editorType = "LINK";		//this code makes a fatal error
				break;
			}
			
			if(empty($editorType))
				continue;
			
			//add field 
			
			$paramTitle = UniteFunctionsUC::getVal($param, "title");
			
			$fieldType = $widgetTitle." - ".$paramTitle;
			
			if($isItems == true)
				$fieldType = $widgetTitle." - Items - ".$paramTitle;
			
			$fieldName = UniteFunctionsUC::getVal($param, "name");
			
			if($editorType == "LINK")
				$fieldName .= ">url";
			
			$arrField = array();
			$arrField["field"] = $fieldName;
			$arrField["type"] = $fieldType;
			$arrField["editor_type"] = $editorType;
			
			$arrFields[] = $arrField;
			
		}
		
		return($arrFields);
	}
	
	
	/**
	 * get translatable fields
	 */
	public function getTranslatableElementorWidgetsFields($arrAddonsRecords){
		
		$arrOutput = array();
		
		if(empty($arrAddonsRecords))
			return(false);
		
		
		foreach($arrAddonsRecords as $record){
			
			$addon = new UniteCreatorAddon();
			$addon->initByDBRecord($record);
						
			$params = $addon->getParams();
			
			if(empty($params))
				continue;
			
			$widgetName = "ucaddon_".$addon->getAlias();
			
			$widgetTitle = $addon->getTitle();
			
			$arrFields = $this->getTranslatableParamsFields($widgetTitle, $params);
			
			$hasItems = $addon->isHasSimpleItems();
			
			$arrItemsFields = null;
			
			if($hasItems == true){
				
				$paramsItems = $addon->getParamsItems();
				
				$arrItemsFields = $this->getTranslatableParamsFields($widgetTitle, $paramsItems, true);
			}
			
			if(empty($arrFields) && empty($arrItemsFields))
				continue;

			//prepare the output
			
			$output = array();
			
			if(!empty($arrFields))
				$output["fields"] = $arrFields;

			//translation module - for items
			
			$isWPMLExists = self::isWpmlExists();
			
			if(!empty($arrItemsFields)){
				
				if($isWPMLExists == true)
					require_once 'wpml_translation_module.class.php';
				
				$addonName = $addon->getName();
				
				self::$arrWidgetItemsData[$addonName] = $arrItemsFields;
				
				$className = "UE_WPML_INTEGRATION__".$addonName;
				 
				if($isWPMLExists == true && class_exists($className) == false){
					// class_alias('UNITE_CREATOR_WPML_Translation_Module', $className);
					$code = "class {$className} extends UNITE_CREATOR_WPML_Translation_Module{}";
					// phpcs:ignore Generic.PHP.ForbiddenFunctions.Found
					eval($code);
				}				
				$output["integration-class"] = $className;
				
			}
			
			if(empty($output))
				continue;
			
			$output["conditions"] = array("widgetType" => $widgetName);
							
			$arrOutput[$widgetName] = $output;
			
		}
		
		
		return($arrOutput);
	}
	
	/**
	 * get sticky posts based on default language
	 */
	public function getStickyPostsBasedOnDefaultLanguage($stickyPostDefaultLangOption) {
		
		$defaultLang    = $this->getDefaultSiteLanguage();
		$activeLang     = $this->getActiveLanguage();

		if ($stickyPostDefaultLangOption == true && $activeLang != $defaultLang){
			do_action('wpml_switch_language', $defaultLang);
			add_action("ue_after_custom_posts_query", array($this, "setActiveLanguageAfterGetStickyPostsBasedOnDefaultLanguage"));
		}

		$arrStickyPosts = get_option('sticky_posts', array());
		
		return $arrStickyPosts;
	}
	
	
	/**
	 * get sticky posts based on default language
	 */
	public function setActiveLanguageAfterGetStickyPostsBasedOnDefaultLanguage() {
		$activeLang     = $this->getActiveLanguage();
		do_action('wpml_switch_language', $activeLang);
	}

	
	
}