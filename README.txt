# WOWUP — статический сайт

## Структура
- index.html — основной файл
- /img — фоновые изображения категорий (заглушки)
- og-image.jpg, poster.jpg, favicon.ico — заглушки
- robots.txt, sitemap.xml — SEO-файлы
- .htaccess — настройки для Apache (кеш/сжатие/заголовки)
- nginx.conf.sample — пример конфига Nginx
- netlify.toml — для Netlify (заголовки/кеш)

## Что заменить перед публикацией
- В index.html замените `https://example.com` на ваш реальный домен в canonical/og/url.
- Вставьте коды в meta: google-site-verification и yandex-verification.
- Положите реальные изображения в `/img`, `og-image.jpg`, `poster.jpg`, `favicon.ico`.

## Деплой (общий)
Загрузите все файлы в корень домена (Document Root) вашего хостинга. Убедитесь, что `index.html` доступен по https://ваш.домен/ .
