<?php ob_start(); ?>

<div class="content">
    <h1><?php echo $chapter['title'] ?></h1>
    <?php echo $chapter['body'] ?>
    <?php echo $chapter['published_date'] ?>
    <?php echo $chapter['image'] ?>
    <?php echo $chapter['number'] ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>