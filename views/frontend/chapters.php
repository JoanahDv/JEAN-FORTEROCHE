
<?php ob_start(); ?>

<div class="chapters_content">
        <h1>A SIMPLE TICKET TO ALASKA</h1>
            <br>
            <p>Every destination you’ll visit leaves its own unique memory.
                Thinking back of our travels through Alaska already gives me the goosebumps. </br>
                As this travel quote says:<i> Make memories all over the world!</i></p>
            <br>
        <div>
            <?php require('views/frontend/chapterList.php') ?>
        </div>
</div>
<!-- 
<section id="homepage">
    <figure>
        <img src="public/images/chapteralaska.jpg" alt="Mountains of Alaska"> 
    </figure>
    <figcaption id="slogan">
        <h1>A SIMPLE TICKET TO ALASKA</h1>
        <br>
        <p>Every destination you’ll visit leaves its own unique memory.
            Thinking back of our travels through Alaska already gives me the goosebumps. </br>
            As this travel quote says:<i> Make memories all over the world!</i></p>
        <br>
    </figcaption>
</section> -->

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>
