<?php

require('models/backend/model.php');

function newChapter($parameters)
{
    if (isset($parameters)) {
        ($parameters['title'], $parameters['body']);
    }
    require('views/backend/chapter.php');
}

?>