
<script> 
    function eventTrigger(eventName) {
        var submissionType = event.target.parentElement.parentElement.id;
        if(submissionType == 'web-review'){
            var type = event.target.dataset.type;
            dataLayer.push({
                event: eventName,
                auditType: type,
            });
        }else {
            dataLayer.push({
                event: eventName,
            });
        }
    }
</script>

<?php 
    if(get_field('show_audit')) :
        $audit_type     = get_field('audit_type');
        $audit_copy     = get_field('audit_copy');
        $audit_btn_copy = get_field('audit_button_copy');
        $audit_url      = get_field('audit_url');
    endif;

    if(get_field('show_downloads')) :
        $downloads_headline = get_field('downloads_headline');
        $downloads_copy     = get_field('downloads_copy');
        $downloads_link     = get_field('download_link');
    endif;
?>

<div class="pop-up__container">
    <!-- audit -->
    <?php
        if(get_field('show_audit')) :
    ?>
        <div class="pop-up__wrap color__blue--bk" id="web-review">
            <div class="pop-up-copy__wrap">
                <h3 class="pop-up-copy__header"><?= $audit_type ?> Audit</h3>
                <p class="pop-up-copy__subheader"><?= $audit_copy ?></p>
            </div>
            <div class="pop-up-button__wrap">
                <a class="pop-up-button" href="<?= $audit_url ?>" target="_blank" data-type="<?= $audit_type ?>"onclick="javascript:eventTrigger('websiteAudit')"><?= $audit_btn_copy ?></a>
            </div>

            <div class="pop-up-exit"></div>
        </div>
    <?php endif; ?>

    <!-- newsletter -->
    <?php
        if(get_field('show_newsletter_signup')) :
    ?>
    <div class="pop-up__wrap pop-up__wrap--red" id="newsletter">
        <div class="pop-up-copy__wrap">
            <h3 class="pop-up-copy__header">Newsletter</h3>
            <p class="pop-up-copy__subheader">Get monthly insights from Kalyber</p>
        </div>
        <div class="pop-up-input__wrap">
            <input class="pop-up-input" type="text" placeholder="Email"/>
        </div>
        <div class="pop-up-button__wrap">
            <a class="pop-up-button"  onclick="javascript:eventTrigger('subscribe')">Subscribe</a>
        </div>
        <div class="pop-up-exit"></div>
    </div>
    <?php endif; ?>

    <!-- downloads -->
    <?php
        if(get_field('show_downloads')) :
    ?>
    <div class="pop-up__wrap color__dark-blue-green--bk" id="downloads">
        <div class="pop-up-copy__wrap">
            <h3 class="pop-up-copy__header"><?= $downloads_headline ?></h3>
            <p class="pop-up-copy__subheader"><?= $downloads_copy ?></p>
        </div>
        <div class="pop-up-button__wrap">
            <a class="pop-up-button" href="<?= $downloads_link ?>" target="_blank" data-type="<?= $audit_type ?>"onclick="javascript:eventTrigger('websiteAudit')">
                DOWNLOAD
            </a>
        </div>
        <div class="pop-up-exit"></div>
    </div>
    <?php endif; ?>

    <!-- social sharing -->
    <?php
        if(get_field('show_social_sharing')) :
    ?>
        <?php get_template_part('template-parts/components/social-container'); ?>
    <?php endif; ?>
</div>



<div class="pop-up-svg__container">
    <?php
        if(get_field('show_audit')) :
    ?>
    <div class="pop-up-svg__wrap" id="web-review-btn">
        <svg xmlns="http://www.w3.org/2000/svg"  class="pop-up-svg" viewBox="0 0 25 25"  fill="#fff"><path d="M23 12c0 1.042-.154 2.045-.425 3h-2.101c.335-.94.526-1.947.526-3 0-4.962-4.037-9-9-9-1.706 0-3.296.484-4.654 1.314l1.857 2.686h-6.994l2.152-7 1.85 2.673c1.683-1.049 3.658-1.673 5.789-1.673 6.074 0 11 4.925 11 11zm-6.354 7.692c-1.357.826-2.944 1.308-4.646 1.308-4.963 0-9-4.038-9-9 0-1.053.191-2.06.525-3h-2.1c-.271.955-.425 1.958-.425 3 0 6.075 4.925 11 11 11 2.127 0 4.099-.621 5.78-1.667l1.853 2.667 2.152-6.989h-6.994l1.855 2.681zm-.66-4.702c.628-.836 1.014-1.864 1.014-2.99 0-2.761-2.237-5-5-5s-5 2.239-5 5 2.237 5 5 5c1.625 0 3.053-.786 3.966-1.985l.034-.015-.014-.01zm.014-2.99c0 .899-.31 1.722-.812 2.391l-3.188-2.391v-4c2.206 0 4 1.794 4 4z"/></svg>
        <p>Free Audit</p>
    </div>
    <?php endif; ?>

    <?php
        if(get_field('show_newsletter_signup')) :
    ?>
    <div class="pop-up-svg__wrap" id="newsletter-btn">
        <svg xmlns="http://www.w3.org/2000/svg"  class="pop-up-svg" viewBox="0 0 25 25"  fill="#fff"><path d="M15.137 3.945c-.644-.374-1.042-1.07-1.041-1.82v-.003c.001-1.172-.938-2.122-2.096-2.122s-2.097.95-2.097 2.122v.003c.001.751-.396 1.446-1.041 1.82-4.667 2.712-1.985 11.715-6.862 13.306v1.749h20v-1.749c-4.877-1.591-2.195-10.594-6.863-13.306zm-3.137-2.945c.552 0 1 .449 1 1 0 .552-.448 1-1 1s-1-.448-1-1c0-.551.448-1 1-1zm3 20c0 1.598-1.392 3-2.971 3s-3.029-1.402-3.029-3h6zm5.778-11.679c.18.721.05 1.446-.304 2.035l.97.584c.504-.838.688-1.869.433-2.892-.255-1.024-.9-1.848-1.739-2.351l-.582.97c.589.355 1.043.934 1.222 1.654zm.396-4.346l-.597.995c1.023.616 1.812 1.623 2.125 2.874.311 1.251.085 2.51-.53 3.534l.994.598c.536-.892.835-1.926.835-3-.001-1.98-1.01-3.909-2.827-5.001zm-16.73 2.692l-.582-.97c-.839.504-1.484 1.327-1.739 2.351-.255 1.023-.071 2.053.433 2.892l.97-.584c-.354-.588-.484-1.314-.304-2.035.179-.72.633-1.299 1.222-1.654zm-4.444 2.308c0 1.074.299 2.108.835 3l.994-.598c-.615-1.024-.841-2.283-.53-3.534.312-1.251 1.101-2.258 2.124-2.873l-.597-.995c-1.817 1.092-2.826 3.021-2.826 5z"/></svg>
        <p>Newsletter</p>
    </div>
    <?php endif; ?>

    <div class="pop-up-svg__wrap" id="chat-btn">
        <svg xmlns="http://www.w3.org/2000/svg"  class="pop-up-svg" viewBox="0 0 25 25"  fill="#fff"><path d="M20 9.352c0-4.852-4.751-8.352-10-8.352-5.281 0-10 3.526-10 8.352 0 1.711.615 3.391 1.705 4.695.047 1.527-.851 3.718-1.661 5.312 2.168-.391 5.252-1.258 6.649-2.115 7.697 1.877 13.307-2.842 13.307-7.892zm-14.5 1.38c-.689 0-1.25-.56-1.25-1.25s.561-1.25 1.25-1.25 1.25.56 1.25 1.25-.561 1.25-1.25 1.25zm4.5 0c-.689 0-1.25-.56-1.25-1.25s.561-1.25 1.25-1.25 1.25.56 1.25 1.25-.561 1.25-1.25 1.25zm4.5 0c-.689 0-1.25-.56-1.25-1.25s.561-1.25 1.25-1.25 1.25.56 1.25 1.25-.561 1.25-1.25 1.25zm8.383 8.789c-.029 1.001.558 2.435 1.088 3.479-1.419-.258-3.438-.824-4.352-1.385-3.365.818-6.114-.29-7.573-2.1 4.557-.66 8.241-3.557 9.489-7.342 1.48.979 2.465 2.491 2.465 4.274 0 1.12-.403 2.221-1.117 3.074z"/></svg>
        <p>Chat</p>
    </div>
</div>