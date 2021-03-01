
<form action="post_comment.php" method="post" id="commentform">

    <label for="comment_author" class="required">Your name</label>
    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">

    <label for="email" class="required">Your email;</label>
    <input type="email" name="email" id="email" value="" tabindex="2" required="required">

    <label for="comment" class="required">Your comment</label>
    <textarea name="comment" id="comment" rows="10" tabindex="4" required="required"></textarea>

    <input name="submit" type="submit" value="Submit comment" />

</form>