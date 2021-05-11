<header>
    <div class="logo">
        <a class="navbar-brand text-white-50 text-uppercase" href="index.php">Jean Forteroche</a>
    </div>

    <div id="burger_action">MENU</div>
    <div id="burger_menu">
        <ul>
            <li> <a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="index.php?action=author">Author</a></li>
            <li><a class="nav-link" href="index.php?action=chapters&page=1">Chapter</a></li>
            <li><a class="nav-link" href="index.php?action=contact">Contact</a></li>
        </ul>
        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <ul class="nav_menu">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?action=author">Author</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?action=chapters&page=1">Chapter</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?action=contact">Contact</a></li>

        <li class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </li>
    </ul>
</header>