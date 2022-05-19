<?php top('Восстановление пароля – Электронный адресс'); ?>
<div class="container">
    <div class="login-block">
        <h2>Восстановления пароля</h2>
        <p>Введите в строку электронную почту, которую Вы использовали при регистрации, для того чтобы Мы отправили код подверждения</p>
        <form class="login-form">
            <input type="email" name="email" class="login-input" placeholder="Электронная почта">
            <button type="submit" class="btn-recovery_1">Отправить</button>
            <button type="button" class="btn-recovery-back" onclick="window.history.back();">Назад</button>
            <p class="msg-e none"></p>
        </form>
    </div> 
</div>
<script src="js/recovery.js"></script>
<?php bottom(); ?>

