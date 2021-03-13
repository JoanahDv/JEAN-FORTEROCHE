<?php ob_start(); ?>

<div class="chapters_content">
    <h1>A SIMPLE TICKET TO ALASKA</h1>
    <br>
    <p><i>Every destination you’ll visit leaves its own unique memory.
            Thinking back of our travels through Alaska already gives me the goosebumps. </br>
            As this travel quote says:Make memories all over the world!
        </i>
    </p>
</div>
<div class="content">
    <?php echo $chapter['number'] ?><br>
    <h1><?php echo $chapter['title'] ?></h1><br>
    <?php echo $chapter['body'] ?><br>
    <?php echo $chapter['published_date'] ?><br>
    <img src="<?php echo $chapter['image'] ?>" /><br>
</div>

<div class="commentListContent">
    <?php require 'views/frontend/commentList.php'; ?>
</div>

<div class="commentSection">
    <h2>Leave a comment</h2>
    <?php require 'views/frontend/comment.php'; ?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>