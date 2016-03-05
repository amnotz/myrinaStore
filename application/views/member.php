<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title></title>
      <!-- **************************************bootstrap************************************** -->
      <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
      <script src="<?php echo base_url();?>assets/js/jquery-1.12.0.js"></script>
      <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
      <style type="text/css">
         /*.container{
         border:solid 1px red;      
         }*/
         .container.main{
         margin-top: 100px;
         padding-top: 17px;
         }
         body {
         background-color: #DADADA;
         }
         .panel-title{
         margin-left: 15px;
         }
         .btn.btn-danger.btn-sm.glyphicon.glyphicon-minus.pull-right{
         margin-left: 10px;
         }
         .fixed_width {
         height: 300px;
         width: 350px;
         }
      </style>
      <!-- *************************************Header/Manu************************************** -->
      <!-- <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
           <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                         data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar" ></span>
                     <span class="icon-bar" ></span>
                 </button>
                 <a class="navbar-brand">Myrina Store</a>
           </div>
         </div>
         </nav> -->
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php echo site_url('tranfer_controller/tranfer')?>">Myrina Store</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li><a href="<?php echo site_url('product_controller/product') ?>" >Product <span class="sr-only">(current)</span></a></li>
                  <li><a href="<?php echo site_url('circulation_controller/circulation') ?>">Circulation</a></li>
                  <li><a href="<?php echo site_url('member_controller/member') ?>">Member</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo site_url('controller/login') ?>">Logout</a></li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
   </head>
   <body>
      <div class="container main">
         <div class="panel panel-danger">
            <div class="panel-heading">
               <div class="row">
                  <h3 class="panel-title">Member</h3>
               </div>
            </div>
            <div class="panel-body">
               <div class="row">
                  <div class="col-xs-1">
                     <button class="btn btn-success btn-sm glyphicon glyphicon-plus" data-target=".bs-example-modal-md" data-toggle="modal"></button>
                  </div>
               </div>
            </div>
            <div class="panel-footer ">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="thumbnail">
                        <img src="../imges/user-icon.png" alt="..." class="fixed_width">
                        <div class="caption">
                           <h3>Thumbnail label</h3>
                           <p>...</p>
                           <p><a href="#" class="btn btn-warning" data-target=".bs-example-modal-md" data-toggle="modal" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="thumbnail">
                        <img src="../imges/user-icon.png" alt="..." class="fixed_width">
                        <div class="caption">
                           <h3>Thumbnail label</h3>
                           <p>...</p>
                           <p><a href="#" class="btn btn-warning" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="thumbnail">
                        <img src="../imges/user-icon.png" alt="..." class="fixed_width">
                        <div class="caption">
                           <h3>Thumbnail label</h3>
                           <p>...</p>
                           <p><a href="#" class="btn btn-warning" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- endfooter -->
         </div>
      </div>
      <!-- Large modal -->
      <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
         <div class="modal-dialog modal-md">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">New Product</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-6">
                        <h4>Member ID</h4>
                        <input type="text" class="form-control" placeholder="member ID" aria-describedby="basic-addon1">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-2">
                        <h4>Firstname</h4>
                     </div>
                     <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="firstname" aria-describedby="basic-addon1">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2">
                        <h4>Lastname</h4>
                     </div>
                     <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="lastname" aria-describedby="basic-addon1">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                           <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                              <img data-src="holder.js/100%x100%" alt="...">
                           </div>
                           <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                           <!-- <div> -->
                           <span class="btn btn-default btn-file"><span class="fileinput-new"></span><span class="fileinput-exists"></span><input type="file" name="..."></span>
                           <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                           <!-- </div> -->
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-2">
                        <h4>Address</h4>
                     </div>
                     <div class="col-md-6">
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-2">
                        <h4>Tel.</h4>
                     </div>
                     <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="tel." aria-describedby="basic-addon1">
                     </div>
                  </div>
                  <div id="rateM">
                  </div>
               </div>
               <!-- end modal body --> 
               <div class="modal-footer">
                  <div class="row">
                     <button class="btn btn-primary">create</button>
                     <button class="btn btn-danger" style="margin-right:17px">cancle</button>
                  </div>
               </div>
            </div>
            <!-- end modal content -->
         </div>
      </div>
      <!-- end modal -->
   </body>
</html>