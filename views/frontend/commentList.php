<?php foreach ($chapterComments as $comment) { ?>

    <section id="chapterComments">

        <div class="comment_content">
            <?php echo $comment['author'] ?><br>

            <?php echo $comment['comment_date'] ?><br>

            <?php echo $comment['comment'] ?>
            
        </div>
    </section>
<?php } ?>