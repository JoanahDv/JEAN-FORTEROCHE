<?php foreach ($chapterComments as $comment) { ?>
    
        <div class="comment_content">
            <h3><?php echo $comment['author'] ?></h3>

             <?php echo $comment['comment'] ?><br>
             <i> publish on 
                <?php echo $comment['comment_date'] ?></i>
            <br>
     
        </div>
     
    <?php } ?>