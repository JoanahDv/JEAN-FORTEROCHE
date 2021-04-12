<?php

require('models/frontend/ChapterManager.php');
require('models/frontend/LoginManager.php');
require('models/frontend/contactManager.php');
require('models/frontend/commentManager.php');
 


 

function author ()
{
    require('views/frontend/author.php');
}

function chapter($id)
{
    $chapterManager = new ChapterManagerFrontend();
    $chapter = $chapterManager->getChapter($id);
    $commentManagerFrontend = new CommentManagerFrontend();
    $chapterComments = $commentManagerFrontend->getCommentsForChapter($id);

    require('views/frontend/chapter.php');
}


function chapters($page)
{
    $chapterManager = new ChapterManagerFrontend();
    $chapters = $chapterManager->getChapters($page); // get chapters
    $numberOfPages = $chapterManager->getChapterPagination(); // get page numbers
    require('views/frontend/chapters.php');
}

function contact($post_parameters)
    {
        if (!empty($post_parameters)) {  // if form is submitted
            $contactManager = new contactUs();
            $contactManager->sendMessage(
                $post_parameters['firstname'],
                $post_parameters['lastname'],
                $post_parameters['email'],
                $post_parameters['subject'],
                $post_parameters['messagebox']

            );
            echo 'ok';
            die();
        }
        
    require('views/frontend/contact.php');

}
function welcome()
{   
    $chapterManager = new ChapterManagerFrontend();
    $chapters = $chapterManager->getRecentChapters();
    require('views/frontend/welcome.php');
   
}

 
function comment($post_parameters)
{
    if (!empty($post_parameters)) {  // if form is submitted
        $commentManager = new commentManagerFrontend();
        $commentManager->createComment(
            $post_parameters['comment'],
            $post_parameters['comment_author'],
            $post_parameters['email'],
            $post_parameters['chapterid']
            // $post_parameters['flag']
        );
    }
    require('views/frontend/comment.php');
}
// function comments($page){
// $commentManager= new commentManagerFrontend();
// $comments= $commentManager->getComments($page);
// $numberOfPages = $commentManager->getcommentPagination();

// }


function flagComment($post_parameters)
{
    $flagCommentManager = new commentManagerFrontend();
    $id = $post_parameters['id'];
    $flagCommentManager->flagComment($id);
    echo 'This comment has been flagged';
    die();
}

 


// function flagComment()
// {
//     $flagManager = new flagCommentFrontend();

 
// }
?>