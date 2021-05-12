<?php $title = "DashboardComments"; ?>

<?php ob_start(); ?>

<?php require 'views/backend/commentList.php'; ?>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>