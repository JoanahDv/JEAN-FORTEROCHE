<?php foreach ($chapters as $chapter) { ?>
    <i><?php echo $chapter['number'] ?></i>
    <h3>
        <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
        <?php echo $chapter['title'] ?>
        </a>
    </h3>
    <img src="<?php echo $chapter['image']?>">
    <?php echo substr($chapter['body'], 0, 150) ?>...

    <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
        Lire la suite
    </a><br>
    <i>Published <?php echo $chapter['published_date'] ?></i>
    <br>
<?php } ?>