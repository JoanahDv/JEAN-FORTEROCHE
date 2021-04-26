<?php $title = "DashboardComments"; ?>

<?php ob_start(); ?>

<section id="dashboard">
    <section id="dashboardTable">

        <section id="commentList">
            <h1> COMMENTS</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Chapter Title</th>
                        <th>Author</th>
                        <th>comments</th>
                        <th>Published Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($comments as $comment) { ?>

                        <tr>
                            <div class="comment_content">

                                <td>
                                    <?php if ($comment['flag'] == 1) : ?>
                                        <i id="warning" class="fas fa-exclamation-triangle"><br>
                                            <p>this comment has been flagged</p>
                                        </i>
                                    <?php endif; ?>

                                    <h3>
                                        <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                                            <?php echo  $chapter['title'] ?></a>
                                    </h3>
                                </td>
                                <td>
                                    <h4><?php echo $comment['author'] ?></h4>
                                </td>
                                <td>
                                    <p><?php echo $comment['comment'] ?></p>
                                </td>
                                <td><i> publish on <?php echo $comment['comment_date'] ?></i></td>

                                <td>
                                    <!-- FORM TO DELETE COMMENT -->

                                    <form action="index.php?action=deleteComment" method="post">
                                        <input type="hidden" value="<?php echo $comment['id'] ?>" name="id" />
                                        <input type="submit" value="Delete" />
                                    </form>

                                    <form action="index.php?action=validateComment" method="post">
                                        <?php if ($comment['flag'] == 1) : ?>
                                            <input type="hidden" value="<?php echo $comment['id'] ?>" name="id" />
                                            <input type='submit' name='validate' value='Validate'>
                                        <?php endif; ?>
                                    </form>


                                    <!-- FORM TO VALIDATE COMMENT IF ITS FLAGGED  -->
                                    <!-- <form action="index.php?action=ValidateComment" method="post">
                                        <input type="submit" value="Validate" />
                                        <input type="hidden" value="<?php echo $comment['id'] ?>" name="id" />
                                    </form> -->


                                </td>
                            </div>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </section>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>