<?php

require('models/backend/ChapterManager.php');

function newChapter($parameters)
{
    if (isset($parameters)) {
        $chapterManager = new ChapterManagerBackend();
        $chapterManager->createChapter($parameters['title'], $parameters['body']);
    }
    require('views/backend/chapter.php');
}

?>