<?php
    session_start();
        if(isset($_SESSION['id'])){
            header('Location: profile');
        }
?>
<?php top('Авторизация'); ?>
<div class="container">
    <div class="login-block">
        <h2>Авторизация</h2>
        <p>Если у Вас есть аккаунт, то можете авторизаваться</p>
        <form class="login-form">
            <input type="email" name="email" class="login-input" placeholder="Электронная почта">
            <input type="password" name="password" class="login-input" placeholder="Пароль">
            <button id="btnLogin" class="btn-login">Вход</button>
            <a href="/register"><button type="button" class="btn-register-content">Регистрация</button></a>
            <p class="password-recover-text">Забыли пароль? - <a href="/recovery_1">Восстановить</a></p>
            <p class="msg-e none"></p>
            <!-- <p class="msg-s none"></p> -->
        </form>
    </div>
</div>
<script src="js/login.js"></script>
<?php bottom(); ?>