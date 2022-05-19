<?php
    session_start();

    $id_book_box = mysqli_query($connect, "SELECT * FROM `book`");

while ($book = mysqli_fetch_array($id_book_box)) {
    echo
    '<div id="'.$book['id_book'].'" class="book-box">
        <p class="author-name">'.$book['author'].'</p>
        <h2 class="book-name">'.$book['nameBook'].'</h2>
        <h3 class="book-genus">'.$book['genusBook'].'</h3>
        <h4 class="book-kind">'.$book['typeBook'].'</h4>
        <h5 class="book-genre">'.$book['genreBook'].'</h5>
        <p class="date">'.$book['datePublish'].'</p>
        <p class="age-limit">'.$book['ageRestriction'].'</p>
    </div>';
}   
?>