<?php $title = "DashboardComments"; ?>

<?php ob_start(); ?>

<section id="dashboard">
    <section id="dashboardTable">
        <section id="commentList">
            <h1> COMMENTS</h1>
            <table class="table">
                <thead>
                    <tr class="desktop_row">

                        <th>Chapter Title</th>
                        <th>Author</th>
                        <th>comments</th>
                        <th>Published Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($comments as $comment) { ?>
                        <tr class="mobile_row">
                            <td colspan="2">
                                <?php if ($comment['flag'] == 1) : ?>
                                    <i id="warning" class="fas fa-exclamation-triangle"><br>
                                        <p>this comment has been flagged</p>
                                    </i>
                                <?php endif; ?>
                        </tr>
                        <tr class="mobile_row">
                            <td>Chapter Title</td>
                            <td>
                                <h3>
                                    <a href="/index.php?action=chapter&id=<?php echo $comment['chapter_id'] ?>">
                                        <?php echo  $comment['chapter']['title'] ?></a>
                                </h3>
                            </td>
                        </tr>
                        <tr class="mobile_row">
                            <td>Author</td>

                            <td>
                                <h4><?php echo $comment['author'] ?></h4>
                            </td>
                        </tr>
                        <tr class="mobile_row">
                            <td>comments</td>
                            <td>

                                <p><?php echo $comment['comment'] ?></p>
                            </td>
                        </tr>
                        <tr class="mobile_row">
                            <td>Published Date</td>
                            <td>
                                <i> publish on <?php echo $comment['comment_date'] ?></i>
                            </td>
                        </tr>
                        <tr class="mobile_row last_row">
                            <!-- FORM TO DELETE COMMENT -->
                            <div class="dashboardAction">
                                <td>Action</td>
                                <td>

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
                                </td>
                            </div>
                        </tr>

                        <!-- DESKTOP TABLE -->
                        <tr class="desktop_row">
                            <div class="comment_content">

                                <td>
                                    <?php if ($comment['flag'] == 1) : ?>
                                        <i id="warning" class="fas fa-exclamation-triangle"><br>
                                            <p>this comment has been flagged</p>
                                        </i>
                                    <?php endif; ?>

                                    <h3>
                                        <a href="/index.php?action=chapter&id=<?php echo $comment['chapter_id'] ?>">
                                            <?php echo  $comment['chapter']['title'] ?></a>
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
                                    <div class="dashboardAction">
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
                                    </div>
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