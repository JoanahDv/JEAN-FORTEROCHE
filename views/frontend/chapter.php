<?php ob_start(); ?>

<div class="content">
    <h1><?php echo $chapter['title'] ?></h1>
    <?php echo $chapter['body'] ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>