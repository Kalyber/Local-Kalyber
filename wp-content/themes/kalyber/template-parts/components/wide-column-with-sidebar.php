<?php
     $main_column_content = get_field('main_column_content');
     $sidebar_content     = get_field('sidebar_content');

     $form_address = "";

     if(get_field('pardot_form_address')) :
          $form_address = get_field('pardot_form_address');
     endif;
?>


<article class="container__full-mobile wide-column-sidebar__container">
     <div class="wide-column-sidebar__content">
          <?= $main_column_content ?>
     </div>
     <div class="wide-column-sidebar__sidebar">
          <?= $sidebar_content ?>

          <?php
               if(1 == 2):
          ?>
               <iframe src="<?= $form_address ?>" width="100%" height="1000" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
          <?php
               endif;
          ?>
     </div>
</article>