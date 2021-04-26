<?php $title = "DashboardChapters"; ?>

<?php ob_start(); ?>

    <section id="dashboard">
        <section id="dashboardTable">
            <section id="chapterList">

                <div class="dashboardtitles">
                    <h1> CHAPTERS</h1>
                    <p class="dashboardnewChapter"><a href="index.php?action=new_chapter"><i class="fas fa-plus"></i> New Chapter</a></p>
                </div>

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

                            <?php foreach ($chapters as $chapter) { ?>
                                <tr>
                                    <div class="chapter_contents">
                                        <td><i>Chapter <?php echo $chapter['number'] ?></i><br></td>
                                        <td>
                                            <h3>
                                                <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>">
                                                    <?php echo  $chapter['title'] ?></a>
                                            </h3>
                                        </td>
                                        <td><a>Published <?php echo $chapter['published_date'] ?></a></td>
                                        <td>

                                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>

                                            <form action="index.php?action=deleteChapter" method="post">

                                                <input type="hidden" value="<?php echo $chapter['id'] ?>" name="id" />
                                                
                                                
                                                <input type="submit" value="Delete"  />
                                                <!-- <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a> -->
                                            </form>
                                        </td>

                                        <!-- <td><button class="read_more"> Delete</button> </a></td>
                                    <td><button class="read_more">Draft</button> </a></td> -->


                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>