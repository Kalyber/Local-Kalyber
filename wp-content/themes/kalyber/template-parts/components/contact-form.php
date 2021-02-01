<?php
     $host = $_SERVER['HTTP_HOST'];
     $hostUrl = 'https://' . $host
?>


<div class="contact-form__wrap">
     <div class="container contact-form__inner">
          <div class="contact-form__copy">
               <p>To see how Kalyber can energize your marketing efforts, get in touch.</p>

               <hr>

               <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><title>Email Us</title><path d="M12 .02c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.99 6.98l-6.99 5.666-6.991-5.666h13.981zm.01 10h-14v-8.505l7 5.673 7-5.672v8.504z"/></svg>
               <a href="mailto:hello@kalyber.com">hello@kalyber.com</a></p>

               <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><title>Call Us</title><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3.445 17.827c-3.684 1.684-9.401-9.43-5.8-11.308l1.053-.519 1.746 3.409-1.042.513c-1.095.587 1.185 5.04 2.305 4.497l1.032-.505 1.76 3.397-1.054.516z"/></svg>
               <a>888.525.9237</a>
          </div>
          <div class="contact-form__form">
               <iframe id="contact_form" src="https://go.kalyber.com/l/869051/2020-06-01/71btl6?parentUrl=<?= $hostUrl ?>" 
               width="100%" 
               type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
          </div>
     </div>
</div>

<script>
     var iframe_contact_height = function(){
          var browser_width = window.innerWidth;

          if(browser_width < 712) {
               var iframe_height = "800";
          } else {
               var iframe_height = "470";
          }
          document.getElementById("contact_form").height = iframe_height;
     }

     window.addEventListener("load", function(){
          iframe_contact_height();
     });

     window.addEventListener("resize", function(){
          iframe_contact_height();
     });
</script>