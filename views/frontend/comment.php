<section id="commentbox">

    <form action="/index.php?action=comment" method="post" id="commentform">

        <input type="hidden" value="<?php echo $chapter['id'] ?>" name="chapterid">

        <label for="comment_author" class="required">Your name</label>
        <br>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required"><br>
        <br>
        <label for="email" class="required">Your email</label><br>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required"><br>

        <label for="comment" class="required">Your comment</label><br>
        <textarea name="comment" id="comment" rows="10" tabindex="4" required="required"></textarea><br>

        <input name="submit" type="submit" value="Submit comment" /><br>

    </form>
</section>