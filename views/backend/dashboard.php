<?php $title = "Dashboard"; ?>

<?php ob_start(); ?>

<section id="dashboard" action="/index.php?action=dashboard" method="POST">

    <h1>JEAN FORTEROCHE</h1>
    <br>


    <div class="dashboardTitles">
        <h2 class="dashboardChapters"><a href="#chapterList">CHAPTERS</a></h2>
        <h2 class="dashboardComment"><a href="#commentList">COMMENTS</a></h2>
        <h2 class="dashboardnewChapter"><a href="#newChapter">NEW CHAPTER</a></h2>
    </div>

    <div class="dashboardHeader">
        <h2>WELCOME TO YOUR DASHBOARD </h2>
    </div>
    <section id="dashboardTable">
        <section id="chapterList">
            <h1> CHAPTERS</h1>
            <?php foreach ($chapters as $chapter) { ?>
                <!-- <div class="adminChapters">
                    <div class="chapterlist"> -->
                <div class="recentpost_display">
                
                    <table class="table">
                        <thead>
                                <tr>
                                    <th>Chapter Title</th>
                                    <th>Chapter Number</th>
                                    <th>Published Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>
                        
                        <tr>
                            <div class="chapter_contents">
                                <td>
                                    <h3>
                                        <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                                            <?php echo  $chapter['title'] ?></a>
                                </td>

                                <td><i>Chapter <?php echo $chapter['number'] ?></i><br></td>
                                <td><a>Published <?php echo $chapter['published_date'] ?></a></td>
                                <td>
                                <a href="#" class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a>
                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                            </td>
                             
                                <!-- <td><button class="read_more"> Delete</button> </a></td>
                                <td><button class="read_more">Draft</button> </a></td> -->


                        </tr>

                        </tbody>
                    </table>
                </div>

                <!-- <img src="<?php echo $chapter['image'] ?>"> -->
                <!-- <div class="chapter_contents"> -->
                <!-- <h3>
                                    <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                                        <?php echo  $chapter['title'] ?>
                                    </a>
                                </h3> -->

                <!-- <i>Chapter <?php echo $chapter['number'] ?></i><br> -->

                <br>
                <!-- <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>"> -->

                <!-- <a>Published <?php echo $chapter['published_date'] ?></a><br><br> -->

                <!-- <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">

                                        <button class="read_more">Edit</button> </a>
                                    <button class="read_more"> Delete</button> </a>
                                <button class="read_more">Draft</button> </a> -->

                <!-- </div>
                        </div>
                    </div>
                     -->

                <!-- </div> -->

            <?php } ?>
        </section>

        <section id="commentList">
            <h1> COMMENTS</h1>

            <?php foreach ($comments as $comment) { ?>

                <div class="comment_content">
                    <h3>
                        <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                            <?php echo  $chapter['title'] ?></a>
                    </h3>
                    <h3><?php echo $comment['author'] ?></h3>

                    <?php echo $comment['comment'] ?><br>
                    <i> publish on
                        <?php echo $comment['comment_date'] ?></i>
                    <br><br>
                    <button class="read_more">Validate</button> </a>
                    <button class="read_more">Detele</button> </a>

                </div>
            <?php } ?>
        </section>


        <section id="newChapter">
            <h1> NEW CHAPTER</h1>

            <form action="index.php?action=new_chapter" method="POST">
                <div>
                    <label>Title</label><br />
                    <input type='text' name='title'></p><br>

                    <p><label>Body</label><br />
                        <textarea name='body' cols='60' rows='10' id='body'></textarea></p>

                    <p><label>Chapter number</label><br />
                        <input type='text' name='number'></p>

                    <div class="action_buttons">
                        <p><input type='submit' name='submit' value='Submit'></p>
                        <p><input type='submit' name='draft' value='Draft'></p>

                    </div>
            </form>
        </section>

    </section>
</section>


<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>