<?php
    session_start();
        if(!isset($_SESSION['confirm'])){
            header('Location: login');
        }
?>
<?php top('Восстановление пароля – Новый пароль'); ?>
<div class="container">
    <div class="login-block">
        <h2 class="login-name">Восстановления пароля</h2>
        <p class="login-text">Введите новый пароль</p>
        <form class="login-form">
            <input type="password" name="password" class="login-input" placeholder="Новый пароль">
            <input type="password" name="password_confirm" class="login-input" placeholder="Повтарите новый пароль">
            <button type="submit" class="btn-recovery_3">Изменить пароль</button>
            <a href="incledes/btncancel.php"><button type="button" class="btn-recovery-cancel">Отмена</button></a>
            <p class="msg-e none"></p>
            <p class="msg-s none"></p>
        </form>
    </div>
</div>
<script src="js/newpassword.js"></script>
<?php bottom(); ?>
