<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Example</title>
</head>
<body>
    <?php
        echo $controllerDate[0];
    ?>
    <h1 id="message">
        Загрузка...
    </h1>

    <script>
        // Пример использования fetch для выполнения AJAX-запроса
        fetch('/ajax').then(response => {
            return response.json();
        }).then(data => {
            document.getElementById('message').innerText = data.message;
        }).catch(error => {
            document.getElementById('message').innerText = "Ошибка загрузки";
            console.error('There was a problem with the fetch operation:', error);
        });
    </script>
</body>
</html>
