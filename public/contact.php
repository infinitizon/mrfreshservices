<?php

include_once 'assets/common/header.inc.php';
?>
<img src="assets/img/contact.jpg" class="img-responsive contact-us" alt=""/>
<div class="well" style="margin-bottom: 0px;">
    <div class="container">
        <form method="post" action="" role="form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your Name" required>
              </div>
              <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="number" class="form-control" id="telephone" placeholder="07060000001 - (No dashes, spaces, etc. Only digits)" required>
              </div>
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" placeholder="email@address.com">
              </div>
              <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" placeholder="Enter a subject" required>
              </div>
               <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<div class="bg-danger" style="padding:40px;">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7431040775596!2d3.419017451223458!3d6.427041895327186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf532b80c346d%3A0x98c2a9f3e1d49128!2s45+Saka+Tinubu+St!5e0!3m2!1sen!2sng!4v1462978397732" width="100%" frameborder="0" style="border:0; min-height:400px;" allowfullscreen></iframe>
    </div>
</div>
<?php
/*
* Include the footer
*/
include_once 'assets/common/footer.inc.php';
?>