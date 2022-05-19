<?php
    session_start();
        if(!isset($_SESSION['id'])){
            header('Location: /');
        }
?>
<?php top('Новое проезведение'); ?>
<div class="container">
    <div class="new-book-block">
        <h3>Новое произведение</h3>
        <form>
            <input id="nameBook" type="text" name="nameBook" class="name-book" placeholder="Название произведения">
            <?php
            include_once 'components/multicheckbox.php'
            ?>
            <textarea name="textBook" class="text-book" placeholder="Ваше произведение"></textarea>
            <button class="btn-publish">Опубликовать</button>
            <button class="btn-canсel">Сброс</button>
            <p class="msg-e none"></p>
            <p class="msg-s none"></p>
        </form>
    </div>
</div>
<script src="/js/multicheckbox.js"></script>
<script src="/js/newbook.js"></script>
<?php bottom(); ?>