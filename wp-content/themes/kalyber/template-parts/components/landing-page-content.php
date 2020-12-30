<?php
     //$background_color = get_sub_field('background_color');
     //$background_dark  = colourBrightness($background_color, -0.1); // in functions file
     //$headline         = get_sub_field('headline');
     //$subhead          = get_sub_field('subhead');
     //$content          = get_sub_field('content');
     //$image            = get_sub_field('section_image');  
     //$page_link        = get_sub_field('button_link');

     $background_dark = "#234567";
     $headline = "SEO";
     $subhead = "The Right Content in Front of the Right People";
?>




<main class="blog">
     <div class="what-we-do__section-head" style="background-color:<?= $background_dark ?>;">
          <div class="container">
               <div class="what-we-do__title"><?= $headline ?></div>
               <div class="what-we-do__subhead"><?= $subhead ?></div>
          </div>
     </div>

    <div class="blog__inner__wrap">
        <div class="blog__back-button__wrap">
            BACK
            <a href="javascript:history.back()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M17.026 22.957c10.957-11.421-2.326-20.865-10.384-13.309l2.464 2.352h-9.106v-8.947l2.232 2.229c14.794-13.203 31.51 7.051 14.794 17.675z"/></svg></a>
        </div>
        <div class="blog__rich-text">
            <div class="blog__rich-text--wrap">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolores mollitia itaque! Cumque tenetur distinctio nulla porro impedit ab voluptates dolor architecto quibusdam iste, veritatis expedita consectetur delectus qui quasi? Quibusdam amet sint laboriosam, laudantium sed rem distinctio reprehenderit sit suscipit aliquid itaque quod quas, odio enim recusandae. Perspiciatis quos iusto minima. At fugit in facilis eum eius earum vero neque quidem autem veritatis ratione dolor nisi quae, commodi illum! Minima voluptatem debitis nostrum, atque, nesciunt id possimus corporis at, quibusdam cupiditate quod iusto odio reiciendis perferendis eius ut minus repellat. Nisi ex eveniet maxime architecto fugiat reprehenderit dolorem atque.</p>

               <h2>Subhead Goes Here</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolores mollitia itaque! Cumque tenetur distinctio nulla porro impedit ab voluptates dolor architecto quibusdam iste, veritatis expedita consectetur delectus qui quasi? Quibusdam amet sint laboriosam, laudantium sed rem distinctio reprehenderit sit suscipit aliquid itaque quod quas, odio enim recusandae. Perspiciatis quos iusto minima. At fugit in facilis eum eius earum vero neque quidem autem veritatis ratione dolor nisi quae, commodi illum! Minima voluptatem debitis nostrum, atque, nesciunt id possimus corporis at, quibusdam cupiditate quod iusto odio reiciendis perferendis eius ut minus repellat. Nisi ex eveniet maxime architecto fugiat reprehenderit dolorem atque.</p>
            </div>
        </div> 

       
    </div>

</main>