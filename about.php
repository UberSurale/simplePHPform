<?php
    $title = "Про меня";
    require "blocks/header.php";
?>
<div class="container mt-2"> 
    <h1>Обратная связь</h1>
    <form action="check_get.php" method="get">
        <input type="Имя" name="username" placeholder="Введите имя!" class="form-control"><br>
        <input type="email" name="e-mail" placeholder="Введите e-mail!" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль!" class="form-control"><br>
        <textarea name="messages" class="form-control" placeholder="Чтобы вы хотели написать?">
        </textarea>
        <input type="submit" value="Отправить" class="btn btn-success mt-2">
    </form>
</div>


<?php
    require "blocks/footer.php";
?>