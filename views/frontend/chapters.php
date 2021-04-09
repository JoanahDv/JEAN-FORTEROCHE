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

<div class="all_chapters">
    <h2 class="chapters_content_head">CHAPTERS</h2>
    <div class="list">
         <?php require('views/frontend/chapterList.php') ?>
    </div>
    <div class="pagination">
        <?php for ($pageNumber = 1; $pageNumber <= $numberOfPages; $pageNumber = $pageNumber + 1) { ?>
            <li class="page-item">
                <a class="page-link" href="index.php?action=chapters&page=<?php echo $pageNumber ?>">
                    <?php echo $pageNumber ?>
                </a>
            </li>
        <?php } ?>

    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>