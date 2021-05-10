<?php $title = "Dashboard"; ?>

<?php ob_start(); ?>
<section id="dashboardHome">
  <H1>
    WELCOME TO YOUR DASHBOARD
  </H1>
</section>
<?php require 'views/backend/chapterList.php'; ?>
<?php require 'views/backend/commentList.php'; ?>
<?php require 'views/backend/contactList.php'; ?>


<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>