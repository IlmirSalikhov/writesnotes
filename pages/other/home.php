<?php
    session_start();
        if(isset($_SESSION['id'])){
            header('Location: profile');
        }
?>
<?php top('Главная'); ?>
<div class="container">
    <div class="home-image">
        <img src="./image/fon-img.png" alt="" class="home-fon-image">
    </div>
    <div class="active-window">
        <h1 class="site-name">Write`s Notes</h1>
        <h2 class="slogan">Сайт для писателей</h2>
        <p class="site-info">Сайт Writer`s Note предоставляет возможность<br>публиковать авторам свои произведения</p>
        <a href="/register"><button class="btn-home-reg">Присоедениться</button></a>
        <div class="repost-block"><p class="repost">Поделитесь с друзьями</p>
        </div>
    </div>
</div>
<?php bottom(); ?>