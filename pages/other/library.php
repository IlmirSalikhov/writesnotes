<?php
    session_start();
        if(isset($_SESSION['id'])){
            header('Location: library-auth');
        }
?>
<?php top('Произведения');?>
<div class="container">
    <div class="library-block">
    <label for="profile-library-block" class="h-library-block">Лучшие произведения</label>
        <div id="profile-library-block" class="profile-library">
            <?php 
            include 'components/book-box.php';
            if (!mysqli_num_rows($id_book_box)) {
                echo '<h2 style="display:inline-block; height: 185px;">Список пуст</h2>';
            }
            ?>
        </div>
        <label for="new-library-block" class="h-library-block">Новинки</label>
        <div id="new-library-block" class="new-library">
            <?php
            include 'components/book-box-new.php';
            if (!mysqli_num_rows($id_book_box)) {
                    echo '<h2 style="display:inline-block; height: 185px;">Список пуст</h2>';
                }
            ?>
        </div>
    </div>
</div>
<script src="js/book_profile.js"></script>
<?php bottom(); ?>