<?php
     $content          = get_field('content');
     $image            = get_field('section_image');
?>



<article class="container container-padding what-we-do-single__container">
     <div class="what-we-do-single__content">
          <?= $content ?>
     </div>
     <div class="what-we-do-single__form">
          <h4>Lorem ipsum dolor sit amet consectetur.</h4>
          <form class="go-rightx">
               <label for="first name">First Name</label>
               <input id="first_name" name="first name" type="text" required>

               <label for="last name">Last Name</label>
               <input id="last_name" name="last name" type="text" required>

               <label for="phone">Phone</label>
               <input id="phone" name="phone" type="tel" required>

               <label for="company">Company</label>
               <input id="company" name="company" type="tel" required>

               <label for="message">Message</label>
               <textarea id="message" name="message" required></textarea>

               <input type="submit">
          </form>
     </div>
</article>