<header class="headerbackend">
    <div class="logo">
        <a class="navbar-brand text-white-50 text-uppercase" href="index.php">Jean Forteroche</a>
    </div>

    <div id="burger_action">MENU</div>
    <div id="burger_menu">
        <ul class="dashboardTitles">

            <li><a class="dashboardChapters"><i class="fas fa-book-open"></i><a href="index.php?action=chapterList">CHAPTERS</a></li>
            <li><a href="#commentList">COMMENTS</a> <a class="dashboardComment"><i class="fas fa-comments"></i></li>
            <li><a class="dashboardMessages"><i class="fas fa-inbox"></i><a href="#Messages">MESSAGES</a></li>
            <li>
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
</li>
</ul>
        <form action="index.php?action=logout" method="POST">
            <button type="submit"><i class="fas fa-sign-out-alt"> sign out</i></button>
        </form>

    </div>

    <ul class="nav_menu">
        <li class="dashboardHome"><a href="index.php?action=dashboard"><i class="fas fa-home"></i>HOME</li>
        <li class="dashboardChapters"><a href="index.php?action=chapterList"><i class="fas fa-book-open"></i>CHAPTERS</li>
        <li class="dashboardComment"><a href="index.php?action=commentList"><i class="fas fa-comments"></i>COMMENTS</a></li>
        <li class="dashboardMessages"><a href="index.php?action=contactList"><i class="fas fa-inbox"></i>INBOX</a></li>
        <li class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </li>
        <li>
        <form action="index.php?action=logout" method="POST">
            <button type="submit"><i class="fas fa-sign-out-alt"> sign out</i></button>
        </form>
        </li>
    </ul>
</header>