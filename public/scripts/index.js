$(document).ready(function() {
    $("#burger_action").on("click", function() {
        $("#burger_menu").toggle();
        console.log($("#burger_menu"));
    });

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



    $("#contactForm").submit(function(event) {
        event.preventDefault(); // prevent regular form submit
        // submit form using AJAX
        var form = $(this);
        $.post({
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                $("#success").show();
                $("#contactForm").hide();
            }
        });
    });
    $("#commentform").submit(function(event) {
        event.preventDefault(); // prevent regular form submit
        // submit form using AJAX
        var form = $(this);
        $.post({
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                $("#success").show();
                $("#commentform").hide();
            }
        });
    });




});