<?php
    session_start();
?>
<?php top("Поиск произведений");?>
    <div class="container">
        <div class="search-block">
            <h3>Поиск приоизведений</h3>
            <form>
                <div class="form">
                    <input id="search-input" type="text" name="search-input" class="search-input" placeholder="Введите запрос" value=''>
                    <?php
                    include_once 'components/multicheckbox.php'
                    ?>
                    <button class="btn-search">Поиск</button>
                    <button class="btn-canсel">Сброс</button>
                </div>
                <div class="search-result">
                    <h3>Результат</h3>
                    <?php 
                    include 'components/search-result-box.php';
                    ?>
                </div>
            </form>
        </div>
    </div>
    <script src="/js/multicheckbox.js"></script>
    <script src="/js/search.js"></script>
    <script src="/js/book-profile.js"></script>
</body>
</html>
<?php
unset($_SESSION['result']['nameBook']);
?>