 <?php
    require('models/connect.php');

    class ChapterManagerBackend
    {
        function createChapter($title, $body, $published_date) 
        {
            global $db; // defined in models/connect.php
            // insert image then get image_id
            // insert chapter with function parameters plus image_id
            // $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
            // $affectedLines = $comments->execute(array($postId, $author, $comment));
            // return $result; 
        }
    }
?>
