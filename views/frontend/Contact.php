<?php $title = "Contact" ;?>
<?php ob_start(); ?>

<section id="contact_us">
<div class="container_contact">
<h3>Contact Us</h3>
<form action="/action_page.php">
<label for="fname">First Name</label>
<input type="text" id="fname" name="firstname" placeholder="Your name..">

<label for="lname">Last Name</label>
<input type="text" id="lname" name="lastname" placeholder="Your last name..">

<label for="lname">E-mail address</label>
<input type="text" id="lname" name="lastname" placeholder="john@example.com">

<label for="lname">Subject</label>
<input type="text" id="lname" name="lastname" placeholder="subject">

<label for="subject">Message</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>




<input type="checkbox">
<label> I have read and agree to the Privacy Policy.</label></br>


<input type="submit" value="Submit">
</form>
</div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>