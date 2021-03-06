<?php $title = "Chapter"; ?>
<?php ob_start(); ?>
<div class="chapters_content">
    <h1>A SIMPLE TICKET TO ALASKA</h1>
    <br>
    <p>
            <i>Every destination you’ll visit leaves its own unique memory.
            </i>
        </p>
        <p>
            <i> Thinking back of our travels through Alaska already gives me the goosebumps.
                As this travel quote says:Make memories all over the world!
            </i>
        </p>
    <br>
</div>
<div class="content">
    <h1><?php echo $chapter['title'] ?></h1><br>
    <?php echo $chapter['body'] ?><br>

    <?php echo $chapter['published_date'] ?><br>
    <figure class="eachimage">
    <img src="/public/images/<?php echo $chapter['image'] ?>" /><br>
    </figure>
</div>
<section id="commentListContent">
    <h2> Comments </h2>
    <?php require 'views/frontend/commentList.php'; ?>
</section>

<div class="commentSection">
    <?php require 'views/frontend/comment.php'; ?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>