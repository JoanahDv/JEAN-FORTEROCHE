<?php foreach ($chapters as $chapter) { ?>
    <div class="chapterlist">
        <div class="recentpost_display">
            <figure class="imageDisplay">
                <img src="/public/images/<?php echo $chapter['image'] ?>" alt="<?php echo $chapter['image'] ?>">
            </figure>
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

                <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>"></a>


                <a>Published <?php echo $chapter['published_date'] ?></a><br>

                <a class="read_more" href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                    READ MORE
                </a>
                <!-- <button>Read More</button>  -->
            </div>
        </div>
    </div>
<?php } ?>