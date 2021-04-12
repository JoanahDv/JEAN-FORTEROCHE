<?php ob_start(); ?>

<section class="sectionBackend">
    <?php if (isset($successMessage)) { ?>
        <span style="background-color:green"><?php echo $successMessage; ?></span>
    <?php } ?>
    
    <h1> NEW CHAPTER</h1>

    <form action="index.php?action=new_chapter" method="POST">
        <div>
            <p><label>Chapter number</label><br />
                <input type='text' name='number'>
            </p>

            <label>Title</label><br />
            <input type='text' name='title'></p><br>

            <p><label>Body</label><br />
                <textarea name='body' cols='60' rows='10' id='body'></textarea></p>

            <p><label>Draft</label><br />
                <input type='checkbox' name='draft'></p>

            <div class="action_buttons">
                <p><input type='submit' name='submit' value='Submit'></p>

            </div>
    </form>
</section>


<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>