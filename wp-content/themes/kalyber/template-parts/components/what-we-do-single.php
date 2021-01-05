<?php
     $content          = get_field('content');
     $image            = get_field('section_image');
?>



<article class="container container-padding what-we-do-single__container">
     <div class="what-we-do-single__content">
          <?= $content ?>
     </div>
     <div class="what-we-do-single__form">
          <h3 class="color__white">Supercharge Your Marketing</h3>
          <p class="color__white">For more information about how Kalyber can help your business, use the form below.</p>
          <br>
          <form class="go-rightx">
               <label for="first name">First Name*</label>
               <input id="first_name" name="first name" type="text" required>

               <label for="last name">Last Name*</label>
               <input id="last_name" name="last name" type="text" required>

               <label for="email">Email*</label>
               <input id="email" name="email" type="email" required>

               <label for="website">Website URL*</label>
               <input id="website" name="company" type="tel" required>

               <label for="comments">Notes and Comments</label>
               <textarea id="comments" name="comments" required></textarea>

               <input type="submit">
          </form>
     </div>
</article>