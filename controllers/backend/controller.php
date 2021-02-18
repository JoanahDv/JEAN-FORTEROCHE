<?php

require('models/backend/ChapterManager.php');

    function newChapter($parameters)
    {
        if (isset($parameters)) {
            $chapterManager = new ChapterManagerBackend();
            $chapterManager->createChapter($parameters['title'], $parameters['body'], $parameters['$published_Date'],$parameters['$number']);
        }
        require('views/backend/chapter.php');
    }

// require('models/backend/login.php')
?>

