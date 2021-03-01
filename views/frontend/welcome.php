<?php ob_start(); ?>


<div class="parallax"></div>
<section id="homepage">
    <!-- <figure>
        <img src="public/images/Alaskaimage.jpg" alt="Mountains of Alaska"> 
    </figure> -->
    <figcaption id="slogan">
        <h1>JEAN FORTEROCHE</h1>
        <br>
        <h2>A SIMPLE TICKET TO ALASKA </h2>
        <br>
        <a href="index.php?action=chapters&page=1"><button class="startbutton">Start Here</button></a>
    </figcaption>
</section>
<!-- RECENT POSTS-->
<section id="recent_posts">
    <div class="container_post">
        <h2 class="heading-sub-title accent-color">RECENT POSTS</h2>
        <div class="recentpost_list">
        <?php require('views/frontend/chapterList.php') ?>
        </div>
    </div>
</section>

<!--PREFOOTER BOOKLIST-->

<section id="booklist">
    <div class="container_books">
        <div class="books-headings text-center">
            <h2 class="heading-sub-title accent-color">OTHER BOOKS</h2>
            <h3 class="heading-title">Discover other books.</h3>
        </div>
        <div class="gallery_row">

            <figure class="top">
                <img src="public/images/bookone.png" alt="img1">
            </figure>
            <figure>
                <img src="public/images/booktwo.png" alt="img2">
            </figure>
            <figure>
                <img src="public/images/bookthree.png" alt="img4">
            </figure>

            <figure>
                <img src="public/images/bookfour.png" alt="img4">
            </figure>

            <figure>
                <img src="public/images/bookfive.png" alt="img5">
            </figure>
            <figure>
                <img src="public/images/booksix.png" alt="img6">
            </figure>
            <figure>
                <img src="public/images/bookseven.png" alt="img7">
            </figure>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>