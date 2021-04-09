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

                                    <!-- <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a> -->

                                    <form action="index.php?action=deleteComment" method="post">

                                        <input type="hidden" value="<?php echo $comment['id'] ?>" name="id" />
                                        <input type="submit" value="Validate"/>
                                    </form>
                                   <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>

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