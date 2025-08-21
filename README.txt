# WOWUP — статический сайт

## Структура
- index.html — основной файл
- robots.txt, sitemap.xml — SEO‑файлы
- .htaccess — настройки для Apache (кеш/сжатие/заголовки)
- nginx.conf.sample — пример конфига Nginx
- netlify.toml — для Netlify (заголовки/кеш)
- manifest.webmanifest — описание PWA
- icons/ — иконки PWA и favicon
- img/ — фоновые изображения категорий

## Что заменить перед публикацией
- В index.html указан домен `https://wow-up.ru` в canonical/og/url.
- Добавлены коды в meta: google-site-verification и yandex-verification.
- Перед публикацией добавьте реальные файлы `favicon.ico`, `og-image.jpg`, `cover.jpg` и иконки PWA в папку `icons/`, а также изображения категорий и обложки в `img/`.

## Деплой (общий)
Скачайте архив или клонируйте репозиторий, затем загрузите все файлы (включая скрытый `.htaccess`) в корень домена вашего хостинга. Убедитесь, что `index.html` доступен по `https://ваш.домен/`.
