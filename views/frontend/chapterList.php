<?php foreach ($chapters as $chapter) { ?>
    <div class="chapterlist">
        <br>
        
            <i>Chapter <?php echo $chapter['number'] ?></i><br><br>

            <img src="<?php echo $chapter['image'] ?>"><br><br>
            <h3>
                <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                    <?php echo $chapter['title'] ?>
                </a>
            </h3><br>


            <div class="body_text">
                <?php echo substr($chapter['body'], 0, 200) ?>...
            </div>

            <br>
            <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                <br>

                <a>Published <?php echo $chapter['published_date'] ?></a>
                <br><br>    
                <button class="read_more">Read More</button><br>

        
    </div>
<?php } ?>