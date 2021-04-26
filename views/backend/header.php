<header class="headerbackend">
    <div class="logo">
        <a class="navbar-brand text-white-50 text-uppercase" href="index.php">Jean Forteroche</a>
    </div>

    <div id="burger_action">MENU</div>
    <div id="burger_menu">
        <div class="dashboardTitles">

            <li><a class="dashboardChapters"><i class="fas fa-book-open"></i><a href="#chapterList">CHAPTERS</a></li>
            <li><a href="#commentList">COMMENTS</a> <a class="dashboardComment"><i class="fas fa-comments"></i></li>
            <li><a class="dashboardMessages"><i class="fas fa-inbox"></i><a href="#Messages">MESSAGES</a></li>
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <form action="index.php?action=logout" method="POST">
            <button type="submit"><i class="fas fa-sign-out-alt"> sign out</i></button>
        </form>

    </div>

    <ul class="nav_menu">
        <li class="dashboardHome"><a href="#dashboardHome"><i class="fas fa-home"></i>HOME</li>
        <li class="dashboardChapters"><a href="#chapterList"><i class="fas fa-book-open"></i>CHAPTERS</li>
        <li class="dashboardComment"><a href="#commentList"><i class="fas fa-comments"></i>COMMENTS</a></li>
        <li class="dashboardMessages"><a href="#contactList"><i class="fas fa-inbox"></i>INBOX</a></li>
        <div class="search-container">

            <form action="/action_page.php">

                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <form action="index.php?action=logout" method="POST">
            <button type="submit"><i class="fas fa-sign-out-alt"> sign out</i></button>
        </form>
    </ul>
</header>