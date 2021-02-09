
<?php ob_start(); ?>

<div class="content">
    <h1>Chapters</h1>
    <?php foreach ($chapters as $chapter) { ?>
        <h3>
            <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
            <?php echo $chapter['title'] ?>
            </a>
        </h3>
        <?php echo substr($chapter['body'], 0, 150) ?>...
        <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
            Lire la suite
        </a><br>
        <i>Published <?php echo $chapter['published_date'] ?></i>

    <?php } ?>
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
