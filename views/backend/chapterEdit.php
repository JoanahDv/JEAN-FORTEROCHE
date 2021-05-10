<?php ob_start(); ?>

<section class="sectionBackend">
    <?php if (isset($successMessage)) { ?>
        <span><?php echo $successMessage; ?></span>
    <?php } ?>


    <form id="chapter-form" action="index.php?action=editChapter&id=<?php echo $chapter['id'] ?>" method="POST"></form>
    <form id="form-image-upload" action="index.php?action=upload_image" method="POST" enctype="multipart/form-data"></form>

    <!-- <div class="newchapterForm"> -->
    <div class="chapterTitle">

        <label><b>Chapter Title</b></label><br />

        <input class="titleText" type='text' name='title' form="chapter-form" value="<?php echo $chapter['title'] ?>" /><br>
        <label for="file"><b>Insert Image</b></label><br>
        <div class="fileUpload">
            <input type="file" name="file" form="form-image-upload">
            <input type="submit" value="Save" form="form-image-upload" />
            <input type="hidden" id="image" name="image" form="chapter-form" value="<?php echo $chapter['image'] ?>" />
            <img src="/public/images/<?php echo $chapter['image'] ?>" id="image-preview"/>
        </div>
    </div>
    <div class="newchapterForm">


        <div class="textSection"><label>Body</label><br />
            <textarea name='body' cols='60' rows='10' id='body' form="chapter-form"><br>
            </textarea>
        </div>

        <input type="hidden" value='<?php echo $chapter["body"] ?>' id="body-hidden" />

        <p><label>Draft</label><br />
            <?php if ($chapter['draft'] == 1) { ?>
                <input type='checkbox' name='draft' form="chapter-form" checked>
            <?php } else { ?>
                <input type='checkbox' name='draft' form="chapter-form">
            <?php } ?>
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