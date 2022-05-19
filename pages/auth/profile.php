<?php
    session_start();
        if(!isset($_SESSION['id'])){
            header('Location: login');
        }
        if(!isset($_SESSION['id']['avatar'])){
            $avatar = 'image/standart-avatar.png';
        } else {
            $avatar = $_SESSION['id']['avatar'];
        }
?>
<?php top('Профиль'); ?>
<div class="container">
    <div class="profile-block">
        <h3 class="text-info">Личная информация</h1>
        <form class="profile-form">
            <div class="left-block">
                <div class= avatar-block>
                    <img src="<?= $avatar ?>" alt="" name="avatar" class="avatar-profile">
                    <!-- <p id="change-avatar-msg-e" class="msg-avatar-e ">h</p>
                    <p id="change-avatar-msg-s" class="msg-avatar-s none"></p> -->
                </div>
                <label class="btn-change-avatar" for="btn-change-avatar"><input id="btn-change-avatar" name="avatar" type="file">Изменить фото</label>
                <button type="button" class="btn-change-password-window" onclick="$('.msg-e').addClass('none'); $('.modal').removeClass('none'); $('.change-password-window').removeClass('none');">Изменить пароль</button>
            </div>
            <div class="profile-info">
                <input type="text" name="lastName" class="profile-input" placeholder="Фамилия" value="<?= $_SESSION['id']['lastName'] ?>">
                <input type="text" name="firstName" class="profile-input" placeholder="Имя" value="<?= $_SESSION['id']['firstName'] ?>">
                <input type="text" name="middleName" class="profile-input" placeholder="Отчество" value="<?= $_SESSION['id']['middleName'] ?>">
                <input id="birthDate" type="text" name="birthDate" class="profile-input" onfocus="(this.type = 'date')" onblur="if(this.value==''){this.type='text'}" placeholder="дд.мм.гггг" value="<?= $_SESSION['id']['birthDate'] ?>"><br>
                <button type="submit" class="btn-change-info">Изменить</button>
                <button type="button" class="btn-cancel">Сбросить</button>
                <p id="change-info-msg-e" class="msg-e none"></p>
                <p id="change-info-msg-s" class="msg-s none"></p>
            </div>
            <div class="modal none">
                <div class="modal-window">
                    <div class="change-password-window none">
                        <h3 class="text-info">Изменение пароля</h3>
                        <p>После изменение произойдет выход из аккаунта</p>
                        <input type="password" name="password" class="profile-input" placeholder="Текущий пароль">
                        <input type="password" name="new_password" class="profile-input" placeholder="Новый пароль">
                        <input type="password" name="new_password_confirm" class="profile-input" placeholder="Новый пароль">
                        <button type="submit" class="btn-change-password">Изменить</button>
                        <button type="button" class="btn-cancel-change-password" onclick="$('.msg-e').addClass('none'); $('.modal').addClass('none');">Отмена</button>
                        <p id="change-password-msg-e" class="msg-e none"></p>
                        <p id="change-password-msg-s" class="msg-s none"></p>
                    </div>                            
                </div>
            </div>
        </form>
    </div>        
</div>
<script src="js/changeprofileinfo.js"></script>
<script src="js/changepassword.js"></script>
<script src="js/changeavatar.js"></script>
<?php bottom(); ?>
