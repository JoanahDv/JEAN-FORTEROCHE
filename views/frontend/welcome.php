<?php ob_start(); ?>


<div class="parallax"></div>
<section id="homepage">
    <!-- <figure>
       
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

<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>