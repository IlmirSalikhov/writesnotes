<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        echo '<header class="site-header">
        <div class="active-header">
            <a href="/">
                <img src="./image/logo.png" alt="" class="logo">
            </a>
            <label for="main_nav_checkbox" class="main-nav-label-checkbox"><img src="image/menu-icon.png" class="menu-icon"></label>
            <input id="main_nav_checkbox" type="checkbox" class="main-nav-checkbox">
            <nav class="main-nav">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/library">Произведения</a></li>
                    <li><a href="author">Авторы</a></li>
                    <li><a href="search">Поиск</a></li>
                    <li><a href="/login">Вход</a></li>
                </ul>
            </nav>
        </div>    
    </header>';
    } else if(isset($_SESSION['id'])){
        echo '<header class="site-header">
        <div class="active-header">
            <a href="/">
                <img src="./image/logo.png" alt="" class="logo">
            </a>
            <label for="main_nav_checkbox" class="main-nav-label-checkbox"><img src="image/menu-icon.png" class="menu-icon"></label>
            <input id="main_nav_checkbox" type="checkbox" class="main-nav-checkbox">
            <nav class="main-nav">
                <ul>
                    <li><a href="/">Профиль</a></li>
                    <li><a href="/library_auth">Произведения</a></li>
                    <li><a href="/author">Авторы</a></li>
                    <li><a href="search">Поиск</a></li>
                    <li><a href="includes/logout.php">Выход</a></li>
                </ul>
            </nav>
        </div>    
    </header>';
    }
?>
