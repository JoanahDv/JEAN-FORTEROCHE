<?php ob_start(); ?>

<section id="homepage" action="/index.php?action=dashboard" method="POST">
     <h1>JEAN FORTEROCHE</h1>
    <br>
    <h2>Welcome to your dashboard </h2>
    <br>
    <div id="burger_action">MENU</div>
    <div id="burger_menu">
        <li><a class="nav-link" href="index.php?action=chapters">Chapters</a></li><br>
        <li><a class="nav-link" href="index.php?action=comments">Comments</a></li> <br>
        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <ul class="nav_menu">
        <<li><a class="nav-link" href="index.php?action=chapters">Chapters</a></li><br>
            <li><a class="nav-link" href="index.php?action=comments">Comments</a></li> <br>
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
    </ul>
</section>

<?php $content = ob_get_clean(); ?>