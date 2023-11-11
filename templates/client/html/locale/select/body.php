<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2022
 */

$enc = $this->encoder();
function callADA(){



    $baseURL = "https://www.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js";
    $context=app( 'aimeos.context' )->get();
    $manager = \Aimeos\MShop::create( $context, 'locale/site' );

    $root = $manager->find( config( 'shop.mshop.locale.site', 'default' ) );
    $config=$root->getConfig();
    $script="";

    if (!empty($config["ada"]["default"]["license_key"])) {
        $url = "https://www.skynettechnologies.com/add-ons/license-api.php";
        $postdata['token'] = $config["ada"]["default"]["license_key"];
        $postdata['SERVER_NAME'] = $_SERVER['SERVER_NAME'];
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        $resp = json_decode($resp,true);
        if($resp['valid']){
            $license_key=!empty($config["ada"]["default"]["license_key"])?$config["ada"]["default"]["license_key"]:'';
            $ada_lib = ['js' => $baseURL."?colorcode=".$config["ada"]["default"]["color"]."&token=".$license_key."&position=".$config["ada"]["default"]["position"]."."
                .$config["ada"]["default"]["icontype"]."." .$config["ada"]["default"]["iconsize"]];
            $script="<script src='".$ada_lib['js']."' id='aioa-adawidget'></script>";

        }


    }
    return $script;
}

$adaJS=callADA();
?>
<div class="section aimeos locale-select" data-jsonurl="<?= $enc->attr( $this->link( 'client/jsonapi/url' ) ) ?>">
   <?= $adaJS ?>
    <?= $this->get( 'body' ) ?>

</div>
