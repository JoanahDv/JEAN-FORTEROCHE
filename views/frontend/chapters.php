<?php foreach ($chapters as $chapter) { ?>
    <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>"><?php echo $chapter['title'] ?></a><br/>
<?php } ?>