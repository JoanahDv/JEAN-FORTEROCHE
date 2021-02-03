<?php ob_start(); ?>

<section id="homepage">
    <figure>
        <img src="public/images/Alaskaimage.jpg" alt="Mountains of Alaska"> 
    </figure>
    <figcaption id="slogan">
        <h1>JEAN FORTEROCHE</h1>
        <br>
        <h2>A SIMPLE TICKET TO ALASKA </h2>
        <br>
        <button class="startbutton">Start Here</button>
    </figcaption>
</section>

<section id="booklist">
    <div class="container">
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
<?php require 'template.php'; ?>