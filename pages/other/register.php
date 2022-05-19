<?php
    session_start();
        if(isset($_SESSION['id'])){
            header('Location: profile');
        }
?>
<?php top('Регистрация'); ?>
<div class="container">
    <div class="register-block">
        <h2 class="register-name">Регистрация</h2>
        <p class="register-text">Если у Вас нет аккаунта, то можете зарегестрироваться</p>
        <form class="form">
            <input type="text" name="lastName" class="login-input" placeholder="Фамилия">
            <input type="text" name="firstName" class="login-input" placeholder="Имя">
            <input type="text" name="middleName" class="login-input" placeholder="Отчество">
            <input type="email" name="email" class="login-input" placeholder="Электронная почта">
            <input id="birthDate" type="text" name="birthDate" class="login-input" onfocus="(this.type = 'date')" onblur="if(this.value==''){this.type='text'}" placeholder="дд.мм.гггг">
            <input type="password" name="password" class="login-input" placeholder="Пароль">
            <input type="password" name="password_confirm" class="login-input" placeholder="Повторите пароль">
            <label for="checkbox-agreement" class="agreement-text">
                <input type="checkbox" name="checkbox_agreement" class="checkbox-agreement" value="agree">Я прочитал и согласен с 
                <a href="../a.txt" target="_blank">Пользовательским соглашением</a>
            </label>
            <button type="submit" class="btn-register">Зарегистрироваться</button>
            <button type="button" class="btn-register-back" onclick="window.history.back();">Назад</button>
            <p class="msg-e none"></p>
            <p class="msg-s none"></p>
        </form>
    </div>
</div>
<script src="js/register.js"></script>
<?php bottom(); ?>