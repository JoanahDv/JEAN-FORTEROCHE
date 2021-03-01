<?php ob_start(); ?>

<div class="chapters_content">
    <h1>A SIMPLE TICKET TO ALASKA</h1>
    <br>
    <p><i>Every destination you’ll visit leaves its own unique memory.
            Thinking back of our travels through Alaska already gives me the goosebumps. </br>
            As this travel quote says:Make memories all over the world!
        </i>
    </p>
    <br>
</div>

<div class="content">
    <h1><?php echo $chapter['title'] ?></h1>
    <?php echo $chapter['body'] ?>
    <?php echo $chapter['published_date'] ?>
    <img src="<?php echo $chapter['image'] ?>" />
    <?php echo $chapter['number'] ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>