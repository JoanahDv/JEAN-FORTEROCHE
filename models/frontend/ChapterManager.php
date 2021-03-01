<?php

class ChapterManagerFrontend
{
    public function getChapters($pageNumber)
    {
        $chaptersPerPage = 6;
        $offset = $chaptersPerPage * $pageNumber - $chaptersPerPage; // 
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM chapter 
            ORDER BY published_date ASC
            LIMIT ' . $offset . ', ' . $chaptersPerPage);
        $req->execute();
        // this is the right way to do it but it won't work
        // $req = $db->prepare('
        //     SELECT *
        //     FROM chapter 
        //     ORDER BY published_date ASC 
        //     LIMIT ?, ?
        // ');
        // $req->execute(array($offset, $chaptersPerPage));
        $result = $req->fetchall();
        $req->closeCursor();
        return $result;
    }

    public function getChapterPagination()
    {
        global $db;
        // count all chapters
        $req = $db->query('
            SELECT COUNT(*)
            FROM chapter
        ');
        $numberOfChapters = $req->fetch()[0]; // fetch result
        $numberOfPages = ceil ($numberOfChapters/6);
        return $numberOfPages;
    }

    public function getChapter($id)
    {
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM chapter
            WHERE id = ?
        '); // build prepared statement
        $req->execute(array($id)); // bind parameters and execute query ($id replaces the question mark "?")
        $result = $req->fetch(); // fetch result
        $req->closeCursor();
        return $result;
    }

    public function getRecentChapters()
    {
        global $db;
        $req = $db->query('
            SELECT *
            FROM chapter 
            ORDER BY published_date DESC 
            LIMIT 1
        ');
        $result = $req->fetchall();
        $req->closeCursor();
        return $result;
    }
}
