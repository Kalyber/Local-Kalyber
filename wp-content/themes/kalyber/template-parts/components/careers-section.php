<?php
     $position_title = "Position Title";
     $position_description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident et blanditiis reprehenderit facilis quisquam temporibus mollitia quo distinctio at asperiores. Eos quisquam maiores ad, commodi dignissimos fuga dolorum perspiciatis autem fugiat nihil at magnam sequi asperiores quia iusto quae soluta excepturi expedita eius quis adipisci, voluptate consequuntur a laboriosam. Veniam ut laboriosam velit veritatis aperiam? Temporibus sequi voluptatum cum voluptatem sapiente blanditiis voluptatibus tenetur a perferendis dolore eius quidem consectetur minima numquam tempora, rerum similique veniam enim maiores possimus vitae repudiandae repellat adipisci quibusdam. Eos rerum sit est doloribus! Blanditiis assumenda molestias, eos dolore error voluptatibus recusandae eum! Alias, maiores.";
     $no_positions = get_field('no_positions_message');
?>

<div class="container__full-mobile careers__wrap">
     <div class="what-we-do-single__content">
          <p>Kalyber offers a full spectrum of benefits, including health and dental insurance, life insurance, paid holidays and paid time off.</p>

          <h3>Available Positions</h3>

          <?php
               if (1 == 2):
          ?>
               <div class="careers__position">
                    <h4 class="position-title position-title--off"><?= $position_title ?></h4>
                    <div class="careers__position-description">
                         <?= $position_description ?>
                    </div>
               </div>

               <div class="careers__position">
                    <h4 class="position-title position-title--off"><?= $position_title ?></h4>
                    <div class="careers__position-description">
                         <?= $position_description ?>
                    </div>
               </div>
          <?php else: ?>
               <p><?= $no_positions ?></p>
          <?php endif; ?>
     </div>
     <div class="what-we-do-single__form">
          <h3 class="color__white">form stuff</h3>
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