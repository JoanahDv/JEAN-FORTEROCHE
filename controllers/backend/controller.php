<?php

require('models/backend/ChapterManager.php');

    function newChapter($post_parameters)
    {
        if (!empty($post_parameters)) {  // if form is submitted
            $chapterManager = new ChapterManagerBackend();
            $chapterManager->createChapter(
                $post_parameters['title'],
                $post_parameters['body'],
                $post_parameters['number']
            );
        }
        require('views/backend/chapter.php');
   
    }

 ?>

