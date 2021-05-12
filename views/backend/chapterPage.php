<?php $title = "DashboardChapters"; ?>
<?php ob_start(); ?>

<?php require 'views/backend/chapterList.php'; ?>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>