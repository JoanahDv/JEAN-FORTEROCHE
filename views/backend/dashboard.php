<?php $title = "Dashboard"; ?>

<?php ob_start(); ?>
  <section id="dashboardHome">
    <H1>
WELCOME TO YOUR DASHBOARD
    </H1>

    <!-- <ul class="nav_menu">
         <li class="dashboardChapters"><a href="#chapterList"><i class="fas fa-book-open"></i>CHAPTERS</li>
         <li class="dashboardComment"><a href="#commentList"><i class="fas fa-comments"></i>COMMENTS</a></li>
    </ul> -->
</section>
<?php require 'views/backend/chapterList.php'; ?>
<?php require 'views/backend/commentList.php'; ?> 
<?php require 'views/backend/contactList.php'; ?> 




<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>
