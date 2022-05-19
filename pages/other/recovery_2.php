<?php
    session_start();
        if(!isset($_SESSION['confirm'])){
            header('Location: login');
        }
?>
<?php top('Восстановление пароля – Код подтверждения'); ?>
<div class="container">
    <div class="login-block">
        <h2 class="login-name">Восстановления пароля</h2>
        <p class="login-text">Введите в строку код подтверждения, который был отправлен ваш электронный адресс</p>
        <form class="login-form">
            <input type="text" name="code" class="login-input" placeholder="Код подтверждения">
            <button type="submit" class="btn-recovery_2">Подтвердить</button>
            <a href="includes/btncancel.php"><button type="button" class="btn-recovery-cancel">Отмена</button></a>
            <p class="msg-e none"></p>
        </form>
    </div>
</div>
<script src="js/code.js"></script>
<?php bottom(); ?>
