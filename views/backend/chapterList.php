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

                        <div class="action_buttons">
                            <p><input type='submit' name='submit' value='Submit'></p>
                            <button type="submit" id="edit-button">Publish</button>
                            <button type="submit" id="edit-button">Draft</button>
                            <button type="submit" id="edit-button">Delete</button>

                        </div>
            </div>
        </div>

    </div>
<?php } ?>