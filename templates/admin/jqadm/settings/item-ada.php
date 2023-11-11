<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2021-2022
 */

$selected = function ($key, $code) {
    return ($key == $code ? 'selected="selected"' : '');
};
$isvalid_key=0;$domain="";
$enc = $this->encoder();
$licensekey = $enc->attr($this->get('adaData/default/license_key'));
$color = $enc->attr($this->get('adaData/default/color'));
$position = $enc->attr($this->get('adaData/default/position'));
$icontype = $enc->attr($this->get('adaData/default/icontype'));
$iconsize = $enc->attr($this->get('adaData/default/iconsize'));
$position=!empty($position)?$position:"bottom_right";
$color=!empty($color)?$color:"#303030";
$icontype=!empty($icontype)?$icontype:"aioa-icon-type-1";
$iconsize =!empty($iconsize)?$iconsize:"aioa-default-icon";
$accPositionArr = ["top_left" => "Top Left", "top_center" => "Top Center", "top_right" => "Top Right", "middel_left" => "Middle Left", "middel_center" => "Middle Center", "middel_right" => "Middle Right", "bottom_left" => "Bottom Left", "bottom_center" => "Bottom Center", "bottom_right" => "Bottom Right"];
?>
<div id="ada" class="item-ada tab-pane fade" role="tabpanel" aria-labelledby="ada">

    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <h2 class="item-header">All in One Accessibility Setting</h2>


                <div class="col-sm-12 form-text text-muted help-text">
                    <?= $enc->html($this->translate('admin', 'License Key')) ?>

                </div>
                <style>
                    .aioa-settings-panel .input-hidden {
                        position: absolute;
                        left: -9999px;
                    }
                    .aioa-settings-panel .icon input[type=radio] +label{
                        width: 130px;
                        height: 130px;
                        padding: 10px !important;
                        text-align: center;
                        background-color: #f7f9ff;
                        outline: 4px solid #f7f9ff;
                        outline-offset: -4px;
                        border-radius: 10px;
                    }
                    .aioa-settings-panel .icon input[type=radio]:checked+label {
                        outline-color: #80c944;
                        position: relative;
                    }

                    .aioa-settings-panel .icon input[type=radio]:checked+label::before {

                        content: "";
                        width: 20px;
                        height: 20px;
                        position: absolute;
                        left: auto;
                        right: -4px;
                        top: -4px;
                        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 25 25' class='aioa-feature-on'%3E%3Cg%3E%3Ccircle fill='%2343A047' cx='12.5' cy='12.5' r='12'%3E%3C/circle%3E%3Cpath fill='%23FFFFFF' d='M12.5,1C18.9,1,24,6.1,24,12.5S18.9,24,12.5,24S1,18.9,1,12.5S6.1,1,12.5,1 M12.5,0C5.6,0,0,5.6,0,12.5S5.6,25,12.5,25S25,19.4,25,12.5S19.4,0,12.5,0L12.5,0z'%3E%3C/path%3E%3C/g%3E%3Cpolygon fill='%23FFFFFF' points='9.8,19.4 9.8,19.4 9.8,19.4 4.4,13.9 7.1,11.1 9.8,13.9 17.9,5.6 20.5,8.4 '%3E%3C/polygon%3E%3C/svg%3E") no-repeat center center/contain !important;
                        border: none;
                    }

                    /* IMAGE STYLES */
                    .aioa-settings-panel input[type=radio]+label>img {
                        cursor: pointer;
                    }

                    .aioa-settings-panel .icon-label {
                        display: flex;
                        justify-content: center;
                        height: 90px;
                        width: 90px;
                        border: 2px solid gray;
                        border-radius: 3px;
                    }

                    .aioa-settings-panel label {
                        font-weight: bold !important;
                    }

                    .d-none {
                        display: none;
                    }

                    .aioa-settings-panel {
                        font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                        box-sizing: border-box;
                    }

                    .aioa-settings-panel *,
                    .aioa-settings-panel *::after,
                    .aioa-settings-panel *::before {
                        box-sizing: border-box;
                    }

                    .aioa-settings-panel .form-group {
                        margin-bottom: 1rem;
                        margin-top: 1rem;
                    }

                    .aioa-settings-panel .panel-body {
                        padding-left: 0.75rem;
                        padding-right: 0.75rem;
                    }

                    .aioa-settings-panel .row {
                        display: flex;
                        flex-wrap: wrap;
                        margin-left: -0.75rem;
                        margin-right: -0.75rem;
                    }

                    .aioa-settings-panel .row>* {
                        padding-right: 0.75rem;
                        padding-left: 0.75rem;
                    }


                    @media screen and (min-width:576px) {
                        .aioa-settings-panel .col-sm-2 {
                            flex: 0 0 auto;
                            width: 16.66666%;
                        }

                        .aioa-settings-panel .col-sm-10 {
                            flex: 0 0 auto;
                            width: 83.33333%;
                        }

                        .aioa-settings-panel .col-sm-8 {
                            flex: 0 0 auto;
                            width: 66.6666%;
                        }

                        .aioa-settings-panel .col-sm-3 {
                            flex: 0 0 auto;
                            width: 25%;
                        }
                    }

                    .aioa-settings-panel .form-control {
                        display: block;
                        width: 100%;
                        padding: .375rem .75rem;
                        font-size: 1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        appearance: none;
                        border-radius: .25rem;
                        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;

                    }

                    .aioa-settings-panel .form-control:focus {
                        border-color: rgba(66, 0, 131, .3803921569);
                        box-shadow: 0 0 0 0.25rem rgba(66, 0, 131, .2);
                        outline: 0;
                    }

                    .aioa-settings-panel .visually-hidden,
                    .aioa-settings-panel .visually-hidden-focusable:not(:focus):not(:focus-within) {
                        position: absolute !important;
                        width: 1px !important;
                        height: 1px !important;
                        padding: 0 !important;
                        margin: -1px !important;
                        overflow: hidden !important;
                        clip: rect(0, 0, 0, 0) !important;
                        white-space: nowrap !important;
                        border: 0 !important;
                    }
                    .d-none{
                        display:none !important;
                    }
                    #settings-invalid-key-msg{
                        color:red;
                    }
                    #settings-license_key_msg{
                        margin-top : 0.1rem;
                    }
                    .loading {
                        position: fixed;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        opacity: 0.7;
                        background-color: #fff;
                        z-index: 99;
                    }

                    .loading-image {
                        z-index: 100;
                    }

                </style>

                <div class="panel panel-default aioa-settings-panel">
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" id="form-module">
                            <input type="hidden" id="domain" class="aioa-domain" value="<?= $domain ?>">
                            <div class="form-group row check-coupon">

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="input-status">License key required for full version:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'license_key'))) ?>" value="<?= $licensekey ?>"
                                           placeholder="Enter License Key"
                                           id="licenese_key" class="form-control license_key"/>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div style="margin-top: 5px;">
                                                <span id="invalid-key-msg" class=""></span>
                                                <p id="license_key_msg" class="text-change">

                                                    Please <a href="https://www.skynettechnologies.com/add-ons/cart/?add-to-cart=116&variation_id=117&quantity=1&utm_medium=contentful-module&utm_campaign=purchase-plan" target="_blank">Upgrade</a>
                                                    to full version of All in One Accessibility Pro</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="input-status">Color :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'color'))) ?>" value="<?= $color;?>"
                                        id="color" class="form-control colorint"/>
                                </div>
                                <div class="col-sm-2">
                                    <input type="color" id="colorpicker" name="color" class="colorpicker"
                                           pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?= $color;?>" style="height: 37px">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2" for="input-status">Icon Position :</label>
                                <div class="col-sm-10">
                                    <div style="font-weight: bold">
                                        Where would you like to place the accessibility icon on your site?
                                    </div>
                                    <div class="row">
                                        <?php foreach ($accPositionArr as $key => $position) : ?>
                                            <div class="col-md-3" style="padding-left: 0;">
                                                <input type="radio" id="edit-position-<?= $key ?>"
                                                       name="<?= $enc->attr($this->formparam(array('ada', 'default', 'position'))) ?>"
                                                       value="<?= $key ?>" class="form-radio"
                                                    <?php echo $this->get('adaData/default/position') == $key ? "checked" : null; ?>>
                                                <label class="form-check-label" for="edit-position-<?= $key ?>">
                                                    <?= $position ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                </div>


                            </div>
                            <div class="form-group row mt-4 icon common-class aioa-icon-type common-class">
                                <label class="col-sm-2">Select icon type:</label>
                                <div class="col-sm-2">
                                    <input type="radio" id="edit-type-1" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'icontype'))) ?>" value="aioa-icon-type-1"
                                           class="input-hidden icon_type" <?=$icontype=='aioa-icon-type-1' ?'checked':null?>>
                                    <label for="edit-type-1" class="icon-label">
                                        <img src="https://skynettechnologies.com/sites/default/files/python/aioa-icon-type-1.svg"
                                             width="65" height="65" id="aioa-icon-type-1-img" style="margin: auto" />
                                        <span class="visually-hidden">Type 1</span>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="edit-type-2" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'icontype'))) ?>" value="aioa-icon-type-2"
                                           class="input-hidden icon_type" <?=$icontype=='aioa-icon-type-2' ?'checked':null?>>
                                    <label for="edit-type-2" class="icon-label">
                                        <img src="https://skynettechnologies.com/sites/default/files/python/aioa-icon-type-2.svg"
                                             width="65" height="65" id="aioa-icon-type-2-img" style="margin: auto" />
                                        <span class="visually-hidden">Type 2</span>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="edit-type-3" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'icontype'))) ?>" value="aioa-icon-type-3"
                                           class="input-hidden icon_type" <?=$icontype=='aioa-icon-type-3' ?'checked':null?>>
                                    <label for="edit-type-3" class="icon-label">
                                        <img src="https://skynettechnologies.com/sites/default/files/python/aioa-icon-type-3.svg"
                                             width="65" height="65" id="aioa-icon-type-3-img" style="margin: auto" />
                                        <span class="visually-hidden">Type 3</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row mt-4 icon common-class common-class">
                                <label class="col-sm-2" style="margin: auto">Select icon size:</label>
                                <div class="col-sm-2">
                                    <input type="radio" id="edit-size-big" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'iconsize'))) ?>" value="aioa-big-icon"
                                           class="input-hidden aioa-iconsize"
                                        <?=$iconsize=='aioa-big-icon' ?'checked':null?>>
                                    <label for="edit-size-big" class="icon-label">
                                        <img src="https://skynettechnologies.com/sites/default/files/python/<?= $icontype?>.svg"
                                             width="75" height="75" style="margin: auto" class="icon-img" />
                                        <span class="visually-hidden">Type 1</span>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="edit-size-medium" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'iconsize'))) ?>" value="aioa-medium-icon"
                                           class="input-hidden aioa-iconsize" <?=$iconsize=='aioa-medium-icon' ?'checked':null?>>
                                    <label for="edit-size-medium" class="icon-label">
                                        <img src="https://skynettechnologies.com/sites/default/files/python/<?= $icontype?>.svg"
                                             width="65" height="65" style="margin: auto" class="icon-img" />
                                        <span class="visually-hidden">Type 2</span>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="edit-size-default" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'iconsize'))) ?>" value="aioa-default-icon"
                                           class="input-hidden aioa-iconsize" <?=$iconsize=='aioa-default-icon' ?'checked':null?>>
                                    <label for="edit-size-default" class="icon-label">
                                        <img src="https://skynettechnologies.com/sites/default/files/python/<?= $icontype?>.svg"
                                             width="55" height="55" style="margin: auto" class="icon-img" />
                                        <span class="visually-hidden">Type 3</span>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="edit-size-small" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'iconsize'))) ?>" value="aioa-small-icon"
                                           class="input-hidden aioa-iconsize" <?=$iconsize=='aioa-small-icon' ?'checked':null?>>
                                    <label for="edit-size-small" class="icon-label">
                                        <img src="https://skynettechnologies.com/sites/default/files/python/<?= $icontype?>.svg"
                                             width="45" height="45" style="margin: auto" class="icon-img" />
                                        <span class="visually-hidden">Type 3</span>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="edit-size-extra-small" name="<?= $enc->attr($this->formparam(array('ada', 'default', 'iconsize'))) ?>"
                                           value="aioa-extra-small-icon" class="input-hidden aioa-iconsize" <?=$iconsize=='aioa-extra-small-icon' ?'checked':null?>
                                  >
                                    <label for="edit-size-extra-small" class="icon-label">
                                        <img src="https://skynettechnologies.com/sites/default/files/python/<?= $icontype?>.svg"
                                             width="35" height="35" style="margin: auto" class="icon-img" />
                                        <span class="visually-hidden">Type 3</span>
                                    </label>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>




            </div>
        </div>

    </div>


    <div class="p-4 bg-ligh text-center" style="background-color: #f7f7f7; border-radius: 10px;">
        <h4 class="mb-3">Looking for enterprise or custom accessibility solutions?</h4>
        <a class="btn btn-primary text-uppercase fw-bold" href="https://www.skynettechnologies.com/contact-us">Contact Us</a>
    </div>

</div>
</div>

<div class="col-12">
    <?php if (empty($this->get('themeData'))) : ?>
        <?= $enc->html($this->translate('admin', 'No theme options available')) ?>
    <?php endif ?>
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function (){
        fetch('https://www.skynettechnologies.com/add-ons/discount_offer.php?platform=bitrix24') // Replace with your API endpoint
            .then(response => response.text())
            .then(data => {
                $('.check-coupon').html(data);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
        $(".common-class").addClass('d-none');
        checkLicenseKey($("#licenese_key").val());

        $('.colorpicker').on('input', function () {
            $('.colorint').val(this.value);
        });
        $('.colorint').on('input', function () {
            $('.colorpicker').val(this.value);
        });
        $(".icon_type").change(function () {
            var iconType = $(this).val();
            var iconImg = $("#" + iconType + "-img").attr("src");
            $(".icon-img").attr("src", iconImg);
        });
    })


    $("#licenese_key").on("change",function (e){
        checkLicenseKey($(this).val());
    })
    function checkLicenseKey(key){

        var server_name = $('.aioa-domain').val();
        var request = new XMLHttpRequest();
        var url =  'https://www.skynettechnologies.com/add-ons/license-api.php?';
        var params = "token=" + key +"&server_name=" + server_name;

        request.open('POST', url, true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        request.onreadystatechange = function() {
            $('.loading').hide();
            if (request.readyState === XMLHttpRequest.DONE) {
                if (request.status === 200) {
                    var response = JSON.parse(request.response);
                   console.info(response);

                    if (response.valid == 1){
                        $('.check-coupon').html('');
                       $(".common-class").removeClass('d-none');
                        $("#invalid-key-msg").text('');
                        $("#license_key_msg").addClass('d-none')

                    }else{
                        $(".common-class").addClass('d-none');
                        if(key!='')
                        $("#invalid-key-msg").text('Invalid Key');
                        $("#license_key_msg").removeClass('d-none');
                        fetch('https://www.skynettechnologies.com/add-ons/discount_offer.php?platform=bitrix24') // Replace with your API endpoint
                            .then(response => response.text())
                            .then(data => {
                                $('.check-coupon').html(data);
                            })
                            .catch(error => {
                                console.error('Error fetching data:', error);
                            });
                    }

                }
            }

        };
        $('.loading').show();
        request.send(params);
    }


</script>
</div>
