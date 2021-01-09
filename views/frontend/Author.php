<?php $title = "Author" ;?>
<?php ob_start(); ?>

<section id="contaAuthor">
<h3>JEAN FORTEROCHE</h3>

<div class="container_author">
    <figure>
        <img src="public/images/Jean.png" alt="img4">
    </figure>

     <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    
</div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>