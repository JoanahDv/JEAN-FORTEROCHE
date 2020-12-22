<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="JEAN FORTEROCHE">
    <meta name="author" content="JOANAH G">
    <title>A SIMPLE TICKET TO ALASKA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- MAIN STYLYSHEET-->
    <link href="style/index.css" rel="stylesheet"/>
    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

</head>

<body>
    <div class="bloc_page">
        <header>
            <div id="author">
                <a class="navbar-brand text-white-50 text-uppercase" href=" ">Jean Forteroche</a>
            </div>
                <ul class="nav">
            
                     <li class="nav-item">
                        <a class="navlink" href=" ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" ">Authur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" ">Chapter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" ">Contact</a>
                    </li>
                    <div class="search-container">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
        </header>
        <section id="homepage">
            <figure>
                <img src="images/Alaskaimage.jpg" alt="Mountains of Alaska"> 
            </figure>
            <figcaption id="slogan">
                <h1>JEAN FORTEROCHE</h1>
                <br>
                <h2>A SIMPLE TICKET TO ALASKA </h2>
                <br>
                <button class="startbutton">Start Here</button>
            </figcaption>
        </section>

        <section id="booklist">
            <div class="container">
                <div class="books-headings text-center">
                    <h2 class="heading-sub-title accent-color">OTHER BOOKS</h2>
                    <h3 class="heading-title">Discover other books.</h3>
                </div>
                <div class="gallery_row">

                    <figure class="top">
                        <img src="images/alaska.jpg" alt="img4">
                        <figcaption class="gallery_caption"> 
                            <h3>Portfolio 1</h3>
                            <p>Logo for lunette for all</p>
                         </figcaption>
                    </figure>

                    <figure>
                        <img src="images/alaska.jpg" alt="img4">
                        <figcaption class="gallery_caption"> 
                            <h3>Portfolio 2</h3>
                           <p>Atelier do it yourself</p>
                         </figcaption>
                    </figure>


                    <figure>
                        <img src="images/alaska.jpg" alt="img4">
                        <figcaption class="gallery_caption"> 
                            <h3>Portfolio 3</h3>
                            <p>Pompadour's new campagne</p> 
                         </figcaption>
                    </figure>

                    <figure>
                        <img src="images/alaska.jpg" alt="img4">
                        <figcaption class="gallery_caption"> 
                            <h3>Portfolio 4</h3>
                            <p>Design and built templates</p>
                         </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <section id="conteneur_contact">
            <form action="file.php">
                <h2>GET IN TOUCH</h2>
                <p><strong> Send Jean Forteroche a Message</strong></p>
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="E-mail">
                <input type="text" placeholder="Sujet">
                <textarea placeholder="Message"></textarea>
                <button>Send Message</button>
            </form>
        </section>
        <!--FOOTER-->
        <footer>
			<p>Copyright © 2020 joanah.This site is done within the context of a training course.</p>
			<p><a href="#"> Mentions légales</a></p>
			<p> Stay connected</p>
			<ul class="socialmedia">
				<li>
					<a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
					
				</li>
				<li>  
					<a href="https://twitter.com/"> <i class="fab fa-twitter"> </i></a>
				</li>
				<li>
					<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <a href="https://www.instagram.com/">Admin Login</a>
		</footer>
    </div>
</body>
</html>