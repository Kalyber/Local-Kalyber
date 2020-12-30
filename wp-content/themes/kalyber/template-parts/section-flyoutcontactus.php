<a href="javascript:void(0)" class="vertical-button flyout-contact"><?php the_field('flyout_form_text', 'option'); ?> </a>

			<div class="sideForm">
				<div class="close"></div>

                <?php 
                $formFrameUrl = '';
                $id = get_the_ID();
                $siteUrl = '';

                if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'):
                    $siteUrl = "https"; 
                else:
                    $siteUrl = "http";
                endif;

                // Here append the common URL characters. 
                $siteUrl .= "://"; 
                // Append the host(domain name, ip) to the URL. 
                $siteUrl .= $_SERVER['HTTP_HOST']; 

                if (get_field('side_form', $id ) == ""):
                    $formFrameUrl = get_field('default_flyout_form', 'option');
                else:
                    $formFrameUrl = get_field('side_form', $id );
                endif;

                $formFrame = str_replace('%url%', esc_url($siteUrl), $formFrameUrl);
                //var_dump($formFrameUrl);
                
                //echo($id);
                // if(get_field('side_form', $id ) == ""){
                //     the_field('default_flyout_form', 'option'); 
                // }else{
                //     the_field('side_form', $id );

                // }
                ?>
                <?= $formFrame ?>
			</div>