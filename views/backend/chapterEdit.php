<?php ob_start(); ?>
<section id="newChapter">
<form action="index.php?action=new_chapter" method="POST">
    <div>
        <label>Title</label><br />
        <input type='text' name='title'></p><br>
 
        <p><label>Body</label><br />
            <textarea name='body' cols='60' rows='10' id='body'></textarea></p>

        <p><label>Chapter number</label><br />
            <input type='text' name='number'></p>
        
        <div class="action_buttons">
            <p><input type='submit' name='submit' value='Submit'></p>
            <p><input type='submit' name='publish' value='Publish'></p>
            <p><input type='submit' name='draft' value='Draft'></p>
            <p><input type='submit' name='delete' value='Delete'></p>

        </div>
</form>
</section>


<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>