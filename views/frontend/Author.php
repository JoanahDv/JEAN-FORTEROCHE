<?php $title = "Author"; ?>
<?php ob_start(); ?>

<section id="contaAuthor">
    <div>
        <h3>JEAN FORTEROCHE</h3> <br>  
        <p>
        I was born in Conrad, Montana. After graduating in English, French and Russian, I went to teach in Odessa, Ukraine, for two years. 
        My taste for traveling led me to France where she obtained a position as an English teacher in 1999.
        After becoming a resident in Paris, she creates a writing workshop at the Shakespeare & Company bookstore and collaborates in the American library.
        </p> 
        <p>
        I learned about the history of the American Library in Paris while working there as the programs manager. 
        I divides her time between Alaska and Paris.
        As my passion for travelling deepened. I explored the great Alaksa.
        </p>

    </div>
    <div class="container_author">
        <figure>
            <img src="public/images/Jean.png" alt="img4">
        </figure>

    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>