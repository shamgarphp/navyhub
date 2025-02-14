<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>eventeazy
    </title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #4 for " name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />

   <!--Toster plugins-->      
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--Toster end plugins -->


  </head>
  <body class=" login">
    <div class="logo">
      <a href="">
        <h1 style="color:white;">ADMIN

        </h1> 
      </a>
    </div>
    <div class="content">
    <form class="login-form" action=""  method="POST">
       <h3 class="font-white">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
          <label class="control-label visible-ie8 visible-ie9">Email
          </label>
          <div >
            
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="email" name="email" id="email_admin" /> 
          </div>
        </div>
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
        <div class="form-actions">
          <button type="submit" class="btn green pull-right" name="admin_email" id="admin_email" value="submit"> Submit 
          </button>
        </div> 
      </form>

    </div>
    <div class="copyright"> eventeazy Admin  
    </div>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/jquery.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/js.cookie.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/jquery.blockui.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript">
    </script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/select2/js/select2.full.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url('admin_assets');?>/global/scripts/app.min.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      var site_url = "<?php echo base_url('admin_assets'); ?>";
    </script>>
    <script src="<?php echo base_url('admin_assets');?>/pages/scripts/login-4.min.js" type="text/javascript">
    </script>
    <script>
      $(document).ready(function(){
        $('#clickmewow').click(function()
        {
          $('#radio1003').attr('checked', 'checked');
        });
      });
    </script>
     <!--Start toster validation -->
    <?php if($this->session->flashdata('success')) {  ?>
    <script type="text/javascript">
    toastr.success("<?php echo $this->session->flashdata('success'); ?>", "", {
    "closeButton": "true",
    "progressBar": "true",
    "timeOut": "5000",
    "extendedTimeOut": "2000"   
    });
    </script> 
    <?php  } elseif($this->session->flashdata('error')){ ?>
    <script type="text/javascript">
    toastr.error("<?php echo $this->session->flashdata('error'); ?>", "", {
    "closeButton": "true",
    "progressBar": "true"
    });
    </script> 
    <?php } ?>

    <?php 
    $err = validation_errors();
    $err_msg   = str_replace(array("\r","\n"), '\n', $err);
    if(isset($err_msg) &&  $err_msg != ""){?>
    <script type="text/javascript">
    toastr.error("<?php echo $err_msg; ?>", "", {
    "closeButton": "true",
    "progressBar": "true"
    });
    </script> 
    <?php  } ?>   
    <!--End toster validation -->      
  </body>

</html>
 


