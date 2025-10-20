# WOWUP — статический сайт

## Структура
- index.html — основной файл
- robots.txt, sitemap.xml — SEO‑файлы
- .htaccess — настройки для Apache (кеш/сжатие/заголовки)
- nginx.conf.sample — пример конфига Nginx
- netlify.toml — для Netlify (заголовки/кеш)
- manifest.webmanifest — описание PWA
- img/ — фоновые изображения категорий

## Что заменить перед публикацией
- В index.html указан домен `https://wow-up.ru` в canonical/og/url.
- Добавлены коды в meta: google-site-verification и yandex-verification.
- Перед публикацией добавьте файл `favicon.ico` и `og-image.jpg` в корень сайта, а также `cover.jpg`, изображения категорий и слайды `about1.jpg`, `about2.jpg`, `about3.jpg` в папку `img/` и иконку плавающей кнопки `float-icon.svg` в эту же папку.
- Укажите в `index.html` токен и ID чата Telegram в константах `TG_TOKEN` и `TG_CHAT`, чтобы формы отправляли сообщения менеджеру.
- Задайте путь к иконке в константе `FLOAT_ICON` в `index.html`.

## Деплой (общий)
Скачайте архив или клонируйте репозиторий, затем загрузите все файлы (включая скрытый `.htaccess`) в корень домена вашего хостинга. Убедитесь, что `index.html` доступен по `https://ваш.домен/`.
