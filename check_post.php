<?php
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pas = $_POST['password'];

    if(trim($name) == "") 
        echo "Вы не ввели имя пользовотеля! Ну как так!";
    else if (strlen(trim($name)) <= 1) 
        echo "Это разве имя!? Коротковато!";
    else if (trim($email) == " " || trim($pas) == " " || trim($_POST['message']) == " ") 
        echo "Но тут же пусто... Вернитесь и заполните поля!";
    else {
        header('Location: about.php');
        exit;
    }