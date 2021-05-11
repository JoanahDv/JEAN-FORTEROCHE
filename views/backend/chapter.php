<?php ob_start(); ?>

<section class="sectionBackend">
    <?php if (isset($successMessage)) { ?>
        <span><?php echo $successMessage; ?></span>
    <?php } ?>


    <form id="chapter-form" action="index.php?action=new_chapter" method="POST"></form>
    <form id="form-image-upload" action="index.php?action=upload_image" method="POST" enctype="multipart/form-data"></form>

    <div class="newchapterForm">
        <div class="chapterTitles">
            <label class="chapterT"><b>ChapterTitle</b></label><br />
            <input class="titleText" type='text' name='title' form="chapter-form" />
            <label class="imageBox" for="file">Image</label>
            <input type="file" name="file" form="form-image-upload"><br>
            <input type="submit" value="Save" form="form-image-upload" />
            <input type="hidden" id="image" name="image" form="chapter-form" />
            <img src="" id="image-preview" width=100 />
        </div>

             <textarea name='body' cols='60' rows='10' id='body' form="chapter-form"></textarea>
 
        <p><label>Draft</label><br />
            <input type='checkbox' name='draft' form="chapter-form">
        </p>

        <div class="action_buttons">
            <p>
                <input type='submit' name='submit' value='Submit' form="chapter-form">
            </p>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>