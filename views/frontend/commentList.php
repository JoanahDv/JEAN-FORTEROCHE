<?php foreach ($chapterComments as $comment) { ?>

    <div class="comment_content">
        <h3><?php echo $comment['author'] ?></h3>

        <?php echo $comment['comment'] ?><br>
        <i> publish on
            <?php echo $comment['comment_date'] ?></i>
        <br>
        
        <p class="success-flag-comment">This comment has been flagged.</p>
        <form action="index.php?action=flagComment" method="post" class="flagform">
            <input type="hidden" value="<?php echo $comment['id'] ?>" name="id" />
            <input type="submit" value="flag" />
        </form>
    </div>

    
<?php } ?>