<?php
     $no_positions = get_field('no_positions_message');
?>

<div class="container__full-mobile careers__wrap">
     <div class="what-we-do-single__content">
          <p>Kalyber offers a full spectrum of benefits, including health and dental insurance, life insurance, paid holidays and paid time off.</p>

          <h3>Available Positions</h3>

          <?php
               if (have_rows('positions')):
                    while( have_rows('positions') ) : the_row();
                         $position_title = get_sub_field('position_title');
                         $position_description = get_sub_field('position_description');
          ?>
               <div class="careers__position">
                    <h4 class="position-title position-title--off"><?= $position_title ?></h4>
                    <div class="careers__position-description">
                         <?= $position_description ?>
                    </div>
               </div>
               <?php endwhile; ?>
          <?php else: ?>
               <p><?= $no_positions ?></p>
          <?php endif; ?>
     </div>
     <div class="careers__form">
          <h3 class="color__white">Apply Yourself</h3>
          <p>If you think you have what it takes to work at Kalyber, let us know. Make sure to include a cover letter to let us know what position your interested in, and why your mom thinks you’re special.</p>
          <?php echo do_shortcode('[contact-form-7 id="570" title="Contact form 1"]'); ?>
     </div>
</div>

<script>
     document.querySelectorAll('.position-title').forEach(el => {
          el.addEventListener('click', (e) => {
               const sender = e.target;

               const parent = sender.parentNode;
               const toggleTarget = parent.querySelector('.careers__position-description');
               
               toggleTarget.classList.toggle('description-on');

               if (sender.classList.contains('position-title--off')) {
                    sender.classList.remove("position-title--off");
                    sender.classList.add("position-title--on");
               } else {
                    sender.classList.remove("position-title--on");
                    sender.classList.add("position-title--off");
               }
          });
     });
</script>