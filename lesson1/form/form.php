<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
    <style>
        form div {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<form action="form_handler.php" method="post" name="myForm">
    <div>
        <label for="login">Введите логин</label>
        <input type="text" name="login" id="login">
    </div>
    <div>
        <label for="email">Введите email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="age">Укажите возраст</label>
        <input type="number" name="age" id="age">
    </div>
    <div>
        <label for="country">Укажите страну проживания</label>
        <select id="country" name="country">
            <option value="russia">Россия</option>
            <option value="belgium">Бельгия</option>
            <option value="england">Англия</option>
        </select>
    </div>
    <div>
        <p>Какие языки Вы хотели бы изучить</p>
        <label>PHP <input type="checkbox" name="lang[]" value="php"></label>
        <label>JavaScript <input type="checkbox" name="lang[]" value="javascript"></label>
        <label>Python <input type="checkbox" name="lang[]" value="python"></label>
        <label>Java <input type="checkbox" name="lang[]" value="java"></label>
    </div>
    <div>
        <input type="submit" value="Подобрать группу">
    </div>
</form>
<p id="answer"></p>
<script src="js/form.js"></script>
</body>
</html>