<?php
    session_start();
        if(!isset($_SESSION['id'])){
            header('Location: library');
        }
?>
<?php top('Произведения');?>
<div class="container">
    <div class="library-block">
    <label for="profile-library-block" class="h-library-block">Ваши произведения</label>
        <div id="profile-library-block" class="profile-library">
            <?php 
            include 'components/new-book-box.php';
            include 'components/book-box.php';
            ?>
        </div>
        <label for="new-library-block" class="h-library-block">Новинки</label>
        <div id="new-library-block" class="new-library">
            <?php
            include 'components/book-box.php';
            ?>
        </div>
    </div>
</div>
<script src="js/book_profile.js"></script>
<?php bottom(); ?>