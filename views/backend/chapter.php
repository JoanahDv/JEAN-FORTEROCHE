<?php ob_start(); ?>

<form action="index.php?action=new_chapter" method="POST">
    <div>
        <label>Title</label><br />
        <input type='text' name='title'></p>


        <p><label>Body</label><br />
            <textarea name='body' cols='60' rows='10' id='body'></textarea></p>

        <p><label>Chapter number</label><br />
            <input type='text' name='number'></p>

        <p><input type='submit' name='submit' value='Submit'></p>
    </div>
</form>

<script type="text/javascript">
    tinymce.init({
        selector: 'textarea#body',
        height: 700,
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>

<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>