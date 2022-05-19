<?php
session_start();
    if(!isset($_SESSION['id'])){
        header('Location: login');
    }
    
?>
<?php top($_SESSION['id_book_arr']['nameBook']); ?>
<div class="container">
    <div class="book-profile-block">
        <h3><?= $_SESSION['id_book_arr']['nameBook']?></h3>
        <div class="book-profile-info">
            <h4>Род произведения: <a href="#"><?= $_SESSION['id_book_arr']['genusBook']?></a></h4>
            <h4>Тип произведения: <a href="#"><?= $_SESSION['id_book_arr']['typeBook']?></a></h4>
            <h4>Жанр произведения: <a href="#"><?= $_SESSION['id_book_arr']['genreBook']?></a></h4>
        </div>
        <div class="text-block">
            <?= $_SESSION['id_book_arr']['textPage'] ?>
        </div>
        <div class="book-profile-info">
            <h4>Дата публикации: <a href="#"><?= $_SESSION['id_book_arr']['datePublish']?></a></h4>
            <form class="score-block">
                <div class="like">
                    <label id="like" class="like-label">
                        <input type="checkbox" class="like-checkbox">
                    </label>
                    <p id="likeData" class="like-int"><?= $_SESSION['id_book_arr']['like']?></p>
                </div>
                <div class="dislike">
                    <label id="dislike" class="dislike-label">
                        <input type="checkbox" class="dislike-checkbox">
                    </label>
                    <p id="dislikeData" class="dislike-int"><?= $_SESSION['id_book_arr']['dislike']?></p>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/score.js"></script>
<?php bottom();?>