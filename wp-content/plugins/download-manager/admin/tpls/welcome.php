<script type="text/javascript" src="<?php echo includes_url();?>/js/jquery/jquery.form.min.js"></script>
<link rel="stylesheet" href="<?php echo plugins_url('/download-manager/assets/css/chosen.css'); ?>" />
<script language="JavaScript" src="<?php echo plugins_url('/download-manager/assets/js/chosen.jquery.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('/download-manager/assets/bootstrap3/css/bootstrap.css');?>" />
<link rel="stylesheet" href="<?php echo plugins_url('/download-manager/assets/css/front3.css'); ?>" />
<link href='//fonts.googleapis.com/css?family=Overpass:300,400,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    .w3eden .lead,
    .w3eden p{
        font-family: 'Overpass', sans-serif;
        font-weight: 100;
    }

    .w3eden h3, .w3eden h2, .w3eden h1{
        font-family: 'Overpass', sans-serif;
        font-weight: 700;
        margin-top: 20px;
        margin-bottom: 5px;
    }
    .w3eden a{
        font-family: 'Overpass', sans-serif;
        font-weight: 700;
    }

    .r{
        font-family: 'Overpass', sans-serif;
        font-weight: 300;
        font-size: 11pt;
    }

    .r b{
        display: block;
        clear: both;
        margin-bottom: 5px;
    }

    input{
        padding: 7px;
    }
    #wphead{
        border-bottom:0px;
    }
    #screen-meta-links{
        display: none;
    }
    .wrap{
        margin: 0px;
        padding: 0px;
    }
    #wpbody{
        margin-left: -19px;
    }
    select{
        min-width: 150px;
    }
    .media-body b{
        font-size: 11pt;
        margin-bottom: 5px;
    }

    .media .btn-success{
        margin-top: 3px;
    }

    .w3eden .label.label-info{
        font-size: 11px;background: rgba(132, 111, 168, 0.38) !important; padding: 5px 10px !important;;border-radius: 2px !important;font-weight: 300;font-family: Overpass;letter-spacing: 1px;
    }
    .w3eden .alert.alert-info:before{ line-height: 30px; }
    .wpdm-loading {
        background: url('<?php  echo plugins_url('download-manager/assets/images/wpdm-settings.png'); ?>') center center no-repeat;
        width: 16px;
        height: 16px;
        /*border-bottom: 2px solid #2a2dcb;*/
        /*border-left: 2px solid #ffffff;*/
        /*border-right: 2px solid #c30;*/
        /*border-top: 2px solid #3dd269;*/
        /*border-radius: 100%;*/

    }

    .w3eden .btn{
        border-radius: 0.2em !important;
    }
    .well{ box-shadow: none !important; background: #FFFFFF !important; } .btn{ border: 0 !important; }

    .w3eden .nav-pills a{
        background: #f5f5f5;
    }

    #addonmodal{ background: rgba(0,0,0,0.7); z-index: 9999; }

    #addonmodal .modal-dialog{
        margin-top: 100px;

    }

    .w3eden .form-control,
    .w3eden .nav-pills a{
        border-radius: 0.2em !important;
        box-shadow: none !important;
        font-size: 9pt !important;
    }

    .wpdm-spin{
        -webkit-animation: spin 2s infinite linear;
        -moz-animation: spin 2s infinite linear;
        -ms-animation: spin 2s infinite linear;
        -o-animation: spin 2s infinite linear;
        animation: spin 2s infinite linear;
    }

    @keyframes "spin" {
        from {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(359deg);
            -moz-transform: rotate(359deg);
            -o-transform: rotate(359deg);
            -ms-transform: rotate(359deg);
            transform: rotate(359deg);
        }

    }

    @-moz-keyframes spin {
        from {
            -moz-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -moz-transform: rotate(359deg);
            transform: rotate(359deg);
        }

    }

    @-webkit-keyframes "spin" {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
        }

    }

    @-ms-keyframes "spin" {
        from {
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -ms-transform: rotate(359deg);
            transform: rotate(359deg);
        }

    }

    @-o-keyframes "spin" {
        from {
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -o-transform: rotate(359deg);
            transform: rotate(359deg);
        }

    }

    .panel-heading h3.h{
        font-size: 11pt;
        font-weight: 700;
        margin: 0;
        padding: 5px 10px;
        font-family: 'Open Sans';
    }

    .panel-heading .btn.btn-primary{
        margin-top: -4px;
        margin-right: -6px;
        border-radius: 3px;
        border:1px solid rgba(255,255,255,0.8);
        -webkit-transition: all 400ms ease-in-out;
        -moz-transition: all 400ms ease-in-out;
        -o-transition: all 400ms ease-in-out;
        transition: all 400ms ease-in-out;
    }

    .panel-heading .btn.btn-primary:hover{
        margin-top: -4px;
        margin-right: -6px;
        border-radius: 3px;
        border:1px solid rgba(255,255,255,1);

    }

    .alert-info {
        background-color: #DFECF7 !important;
        border-color: #B0D1EC !important;
    }

    ul.nav li a:active,
    ul.nav li a:focus,
    ul.nav li a{
        outline: none !important;
    }

    #modalcontents .wrap h2{ display: none; }

</style>

<div class="wrap w3eden">


    <div class="container-fluid" style="margin-top: 10px;max-width: 1200px">
        <div class="row">
            <div class="col-md-12">
                <div class="well text-center" style="padding: 30px 95px">
                    <img src="<?php echo WPDM_BASE_URL; ?>assets/images/wpdm-welcome.png" style="max-width: 100%" />
                </div>

            </div>
            <?php //if(!function_exists('wpdm_tinymce')){ ?>
            <div class="col-md-12"><h3 class="text-center">What to do next?</h3></div>
            <div class="col-md-12 lead text-center">Install the following add-ons to make your WordPress Download Manager more awesome<br/></div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div style="min-height: 130px;height: 130px;overflow: hidden" class="panel-body">
                        <div class="media">
                            <div class="media-body">
                                <b><a target="_blank" href="https://www.wpdownloadmanager.com/download/gutenberg-blocks/">Gutenberg Blocks</a></b><br>
                                <p>Gutenberg Blocks for WordPress Download Manager is the collection of blocks for the new Gutenberg block editor to use various download manager features ...</p>
                            </div>
                        </div>
                    </div>
                    <div style="line-height: 30px;" class="panel-footer">
                        <div style="margin-top: -2px" class="pull-right">
                            <a style="border: 0;border-radius: 2px" href="#" data-target="#addonmodal" data-backdrop="true" rel="15665" data-toggle="modal" class="btn btn-sm btn-primary btn-install"><i class="fa fa-download"></i> &nbsp;Download &amp; Install</a>
                        </div>
                        <span style="font-size: 11px;" class="label label-info"><i class="fa fa-th"></i> &nbsp;642.87 KB</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4" >
                <div class="panel panel-default">
                    <div style="min-height: 130px;height: 130px;overflow: hidden" class="panel-body">
                        <div class="media">
                            <div class="media-body">
                                <b><a href="https://www.wpdownloadmanager.com/download/premium-package-complete-digital-store-solution/">Premium Package &ndash; Complete Digital Store Solution</a></b><br>
                                <p>Premium Package "Complete Digital Store Solution" add-on add shopping cart feature...</p>
                            </div>
                        </div>
                    </div>
                    <div style="line-height: 30px;" class="panel-footer">
                        <div style="margin-top: -2px" class="pull-right">
                            <a style="border: 0;border-radius: 2px" href="#" data-target="#addonmodal" data-backdrop="true" rel="15671" data-toggle="modal" class="btn btn-sm btn-primary btn-install"><i class="fa fa-download"></i> &nbsp;Download &amp; Install</a>
                        </div>
                        <span style="font-size: 11px;" class="label label-info"><i class="fa fa-th"></i> &nbsp;482.11 KB</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div style="min-height: 130px;height: 130px;overflow: hidden" class="panel-body">
                        <div class="media">
                            <div class="media-body">
                                <b><a target="_blank" href="https://www.wpdownloadmanager.com/download/wpdm-extended-short-codes/">WPDM Extended Short-codes</a></b><br>
                                <p>WPDM Extended Short-codes add-on will give you better experience in using WordPr...</p>
                            </div>
                        </div>
                    </div>
                    <div style="line-height: 30px;" class="panel-footer">
                        <div style="margin-top: -2px" class="pull-right">
                            <a style="border: 0;border-radius: 2px" href="#" data-target="#addonmodal" data-backdrop="true" rel="15691" data-toggle="modal" class="btn btn-sm btn-primary btn-install"><i class="fa fa-download"></i> &nbsp;Download &amp; Install</a>
                        </div>
                        <span style="font-size: 11px;" class="label label-info"><i class="fa fa-th"></i> &nbsp;310.17 KB</span>
                    </div>
                </div>
            </div>



            <div style="clear: both"></div>


            <?php //}

            ?>

            <div class="col-md-12">
                <div class="well">
                    <div class="media">
                        <div class="pull-right">
                            <a href="https://www.wpdownloadmanager.com/downloads/free-add-ons/" class="btn btn-success">Explore Free Add-ons <i class="fa fa-angle-double-right"></i></a>
                        </div>
                        <div class="media-body">
                            <b>Free Add-ons</b><br/>
                            There are more free add-ons
                        </div> </div>
                </div>

                <div class="alert alert-progress text-center">
                    <a style="color: #ffffff;font-size: 12pt" href="https://www.wpdownloadmanager.com/download/attire-allinone-wordpress-theme/" target="_blank"><i class="fa fa-gift" style="margin-right: 7px"></i> Attire – Free WordPress Theme for Digital Shops, Get it now! </a>
                </div>

            </div>

            <div class="col-md-12 lead">
                <h3>What's New?</h3>
                What new with WordPress Download Manager Pro v5.0:
            </div>

            <div class="col-md-4 r">
                <b>Media Protection</b>
                Protection media library files quickly using password, control who can access or not.

            </div>
            <div class="col-md-4 r">

                <b>Asset Manager</b>
                Added awesome asset management option, get control over all files.Upload, edit, delete or update directly from wp admin.

            </div>
            <div class="col-md-4 r">

                <b>More Features</b>
                Improved admin UI and front-end short-code templates, one click updates for wpdm add-ons, improved gutenberg compatibility.
            </div>


            <div class="col-md-12 lead">
                <hr/>
                Lets start: Admin Menu <i class="fa fa-angle-double-right"></i> <a href="<?php echo admin_url('edit.php?post_type=wpdmpro'); ?>">Downloads</a> <i class="fa fa-angle-double-right"></i> <a href="<?php echo admin_url('post-new.php?post_type=wpdmpro'); ?>">Add New</a>
            </div>

        </div>

    </div>
    <div class="modal fade" id="addonmodal" tabindex="-1" role="dialog" aria-labelledby="addonmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add-On Installer</h4>
                </div>
                <div class="modal-body" id="modalcontents">
                    <i class="fas fa-sun  fa-spin"></i> Please Wait...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <a type="button" id="prcbtn" target="_blank" href="https://www.wpdownloadmanager.com/cart/" class="btn btn-success" style="display: none" onclick="jQuery('#addonmodal').modal('hide')">Checkout</a>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    jQuery(function(){


        jQuery(".btn-install, .btn-purchase").click(function(){
            jQuery('#modalcontents').html('<i class="fas fa-sun  fa-spin"></i> Please Wait...');
        });
        jQuery('#addonmodal').on('shown.bs.modal', function (e) {
            if(jQuery(e.relatedTarget).hasClass('btn-install')){
                jQuery('.modal-dialog').css('width','500px');
                jQuery('.modal-footer .btn-danger').html('Close');
                jQuery('#modalcontents').css('padding','20px').css('background','#ffffff');
                jQuery.post(ajaxurl,{action:'wpdm-install-addon', addon: e.relatedTarget.rel}, function(res){
                    notice = "<div class='alert alert-info'>For any reason, if auto installation failed, close this popup, click on add-on title, download the add-on from our site, then install manually as you do for regular plugins.</div>"
                    jQuery('#modalcontents').html(res.replace('Return to Plugin Installer','')+notice);
                })
            }

            if(jQuery(e.relatedTarget).hasClass('btn-purchase')){
                jQuery('.modal-dialog').css('width','800px');
                jQuery('.modal-footer').css('margin',0);
                jQuery('.modal-footer .btn-danger').html('<i class="fas fa-sun  fa-spin"></i> Please Wait...');
                jQuery('#modalcontents').css('padding',0).css('background','#f2f2f2').html("<iframe onload=\"jQuery('.modal-footer .btn-danger').html('Continue Shopping...');jQuery('#prcbtn').show();\" style='width: 100%;padding-top: 20px; background: #f2f2f2;height: 300px;border: 0' src='https://www.wpdownloadmanager.com/?addtocart="+e.relatedTarget.rel+"'></iframe>");
            }
        })


    });
</script>


