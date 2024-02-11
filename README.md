# phpAjaxMVC
Light realisation MVC on php with Ajax

## Настройка Apach сервера для работы:
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php [QSA,L]
</IfModule>

## Схема работы:
index.php (подключение всего необходимого + роутинг) -> Роутинг (опционально, можно вынести в index.php) -> Контроллер (согласно роутингу) -> Модель (опционально, если есть сложная бизнес логика) -> View

Таким образом во View можно использовать php ппеременные из контроллера.

Ajax запросы:
На страницах View указывается путь к контроллеру, который обрабатычвает ajax.