
<?php foreach ($chapters as $chapter) { ?>
    <div class="chapterlist">
        <div class="recentpost_display">
             <img src="<?php echo $chapter['image'] ?>">

            <div class="chapter_contents">
                <h3>
                    <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                        <?php echo  $chapter['title'] ?>
                    </a>
                </h3>
                
                <i>Chapter <?php echo $chapter['number'] ?></i><br>    


                 <div class="body_text">
                    <?php echo substr($chapter['body'], 0, 200) ?>...
                </div>
                <br>    
        
                <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                 
                
                <a>Published <?php echo $chapter['published_date'] ?></a><br>    

                <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">

                 <button class="read_more">Read More</button> </a>
            </div>
        </div>
        
        

     </div>
    <?php } ?>