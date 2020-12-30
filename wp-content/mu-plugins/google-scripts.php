<?php
/**
 * Plugin Name: Google Scripts
 * Description: Adds the correct Google Tag Manager Scripts for each environment.
 * Author: James de la Bastide
 * Version: 0.1
 */

function gtm_content () {
    $environments = (object) [
        'localDev' => 'local.',
        'qa' => 'qa.'
    ];
    $gtm_body_tag = '
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQZMBVC&gtm_auth=%auth%&gtm_preview=%preview%&gtm_cookies_win=x"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    ';
    $gtm_data_layer_init = '<script>window.dataLayer = window.dataLayer || [];</script>';
    $gtm_local_dev_options = ['F3DhZmsoDAOMxq4whBFASw', 'env-5'];
    $gtm_production_options = ['CfTqtOPB6O00tILfPXswbw', 'env-1'];
    $gtm_qa_options = ['FvMn6K_w-LCxCwYMvOT5VQ', 'env-6'];
    $host = $_SERVER['HTTP_HOST'];
    $gtm_head_script = '
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
        new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
        \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl+ \'&gtm_auth=%auth%&gtm_preview=%preview%&gtm_cookies_win=x\';f.parentNode.insertBefore(j,f);
        })(window,document,\'script\',\'dataLayer\',\'GTM-NQZMBVC\');</script>
        <!-- End Google Tag Manager -->
    ';
    $gtm_head_script_tokens = ['%auth%', '%preview%'];
    $myObject = (object) ["propertyA" => 1, "propertyB" => 2];
    $gtm_tag = (object) [
        'headScript' => '',
        'bodyTag' => ''
    ];

    // echo 'host is: ' . $host;
    // echo 'environment is: ' . $environments -> localDev;

    if (strpos($host, $environments -> localDev) > -1) {
        $gtm_head_script = str_replace($gtm_head_script_tokens, $gtm_local_dev_options, $gtm_head_script);
        $gtm_body_tag = str_replace($gtm_head_script_tokens, $gtm_local_dev_options, $gtm_body_tag);
    } else if (strpos($host, $environments -> qa) > -1) {
        $gtm_head_script = str_replace($gtm_head_script_tokens, $gtm_qa_options, $gtm_head_script);
        $gtm_body_tag = str_replace($gtm_head_script_tokens, $gtm_qa_options, $gtm_body_tag);
    } else {
        $gtm_head_script = str_replace($gtm_head_script_tokens, $gtm_production_options, $gtm_head_script);
        $gtm_body_tag = str_replace($gtm_head_script_tokens, $gtm_production_options, $gtm_body_tag);
    }

    $gtm_tag -> headScript = $gtm_data_layer_init . $gtm_head_script;
    $gtm_tag -> bodyTag = $gtm_body_tag;

    return $gtm_tag;
}

function insert_gtm_body() {
    $gtm_content = gtm_content();

    if ( !is_null($gtm_content) && !empty($gtm_content -> headScript) )
    {
        echo $gtm_content -> bodyTag;
    }
}

function insert_gtm_header() {
    $gtm_content = gtm_content();
    echo $gtm_content -> headScript;
}

add_action('wp_head', 'insert_gtm_header')
 
?>