<?php $title = "Contact"; ?>
<?php ob_start(); ?>

<section id="contact_us">
    <div class="chapters_content">
        <h1>Get in touch</h1>
        <br>
        <p><i>Every destination you’ll visit leaves its own unique memory.
                Thinking back of our travels through Alaska already gives me the goosebumps. </br>
                As this travel quote says:Make memories all over the world!
            </i>
        </p>
        <br>
    </div>

    <div class="container_contact">
        <h3>Contact Us</h3>

        <form action="/index.php?action=contact" method="POST">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

            <label for="e-mail">E-mail address</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>

            <label for="topic">Subject</label>
            <input type="text" id="topic" name="topic" placeholder="subject" required>

            <label for="subject">Message</label>
            <textarea id="subject" name="message" placeholder="Write something.." style="height:200px" required></textarea>  

            <input type="checkbox">
            <label> I have read and agree to the Privacy Policy.</label></br>

            <button type="submit" name="contact_submit">Send Message</button>
        </form>
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>