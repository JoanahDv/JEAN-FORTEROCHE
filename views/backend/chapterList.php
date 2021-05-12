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
                        <tr class="desktop_row">
                            <th>Chapter Title</th>
                            <th>Chapter Number</th>
                            <th>Published Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($chapters as $chapter) { ?>
                            <tr class="mobile_row">
                                <td>Chapter Title</td>
                                <td>
                                    <h3>
                                        <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>" class="chapterTitle">
                                            <?php echo  $chapter['title'] ?>
                                        </a>
                                    </h3>
                                </td>
                            </tr>

                            <tr class="mobile_row">
                                <div class="chapter_contents">
                                    <td>Chapter Number</td>
                                    <td><i>Chapter <?php echo $chapter['number'] ?></i><br></td>
                                </div>
                            </tr>

                            <tr class="mobile_row">
                                <td>Published Date</td>
                                <td>
                                    <a>Published <?php echo $chapter['published_date'] ?></a>
                                </td>
                            </tr>

                            <tr class="mobile_row last_row">
                                <div class="dashboardAction">
                                    <td>Action</td>
                                    <td>
                                        <a href="/index.php?action=editChapter&id=<?php echo $chapter['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>

                                        <form action="index.php?action=deleteChapter" method="post">

                                            <input type="hidden" value="<?php echo $chapter['id'] ?>" name="id" />

                                            <input type="submit" value="Delete" />


                                            <!-- <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a> -->
                                        </form>
                                    </td>
                                </div>
                            </tr>

                            <tr class="desktop_row">
                                <div class="chapter_contents">
                                    <td><i>Chapter <?php echo $chapter['number'] ?></i><br></td>
                                    <td>
                                        <h3>
                                            <a href="/index.php?action=chapter&id=<?php echo $chapter['id'] ?>" class="chapterTitle">
                                                <?php echo  $chapter['title'] ?>
                                            </a>
                                        </h3>
                                    </td>
                                    <td><a>Published <?php echo $chapter['published_date'] ?></a></td>
                                    <td>
                                        <div class="dashboardAction">
                                            <a href="/index.php?action=editChapter&id=<?php echo $chapter['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>

                                            <form action="index.php?action=deleteChapter" method="post">

                                                <input type="hidden" value="<?php echo $chapter['id'] ?>" name="id" />


                                                <input type="submit" value="Delete" />
                                                <!-- <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a> -->
                                            </form>
                                        </div>
                                    </td>
                            </tr>


                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </section>
    </section>
</section>