<?php ob_start(); ?>

<section class="sectionBackend">
    <?php if (isset($successMessage)) { ?>
        <span><?php echo $successMessage; ?></span>
    <?php } ?>
<!-- <div class ="backHome">
     <li><a href="#dashboardHome"><i class="fas fa-home"></i>HOME</li>
</div> -->

    <form action="index.php?action=new_chapter" method="POST">
        <div class ="newchapterForm">
            <!-- <p><label>Chapter number</label><br />
                <input type='text' name='number'>
            </p> -->

            <label>Title</label><br />
            <input type='text' name='title'></p><br>

            <form action="index.php?action=upload_image" method="POST" enctype="multipart/form-data">
                <label for="file">Image</label><br>
                <input type="file" name="file"><br>
                <button type="submit">Save</button>
            </form>
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