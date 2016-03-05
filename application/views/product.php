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
         .rate{
         padding-left: 0px;
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
                  <h3 class="panel-title">Product</h3>
               </div>
            </div>
            <div class="panel-body">
               <div class="row">
                  <div class="col-xs-1">
                     <button class="btn btn-success btn-sm glyphicon glyphicon-plus" data-toggle="modal" data-target=".bs-example-modal-md"></button>
                  </div>
               </div>
            </div>
            <div class="panel-footer">
               <div class="form-box">
                  <div class="row">
                     <div class="col-md-2 col-md-offset-10">
                        <button class="btn btn-danger btn-sm glyphicon glyphicon-minus pull-right" data-toggle="modal" data-target="#alertModalDeleteProduct"><button class="btn btn-warning btn-sm glyphicon glyphicon-pencil pull-right" data-toggle="modal" data-target=".bs-example-modal-md"></button></button>
                     </div>
                  </div>
                  <div class="row"style="padding-left:17px;">
                     <div class="col-md-4" >
                        <div class="row">
                           <a href="#" class="thumbnail">
                           <img src="<?php echo base_url();?>assets/imges/night10g.jpg" alt="..." class="fixed_width">
                           </a>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-4"><input type="text" class="form-control text-center" value="10" disabled></div>
                                 <div class="col-md-1 ">
                                    <label>
                                       <h4>/</h4>
                                    </label>
                                 </div>
                                 <div class="col-md-4"><input type="text" class="form-control text-center" value="10000" disabled></div>
                                 <div class="col-md-1 ">
                                    <label>
                                       <h4>piece</h4>
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end product pic -->
                     <div class="col-md-6 col-md-offset-1">
                        <div class="row">
                           <div class="col-md-3">
                              <h4>Product :</h4>
                           </div>
                           <div class="col-md-7">
                              <!-- <input type="text" class="form-control" value="Night cream" disabled> -->
                              <h4><label>Night cream 10 g</label></h4>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="row">
                                 <div class="col-md-6">
                                    <h4>Price Rate G</h4>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4 col-md-offset-1">
                                    <h5><label>1-9 :</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>65</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>baht/piece</label></h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4 col-md-offset-1">
                                    <h5><label>10-49 :</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>60</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>baht/piece</label></h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4 col-md-offset-1">
                                    <h5><label>50-99 :</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>55</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>baht/piece</label></h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4 col-md-offset-1">
                                    <h5><label>100-199 :</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>50</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>baht/piece</label></h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4 col-md-offset-1">
                                    <h5><label>200 + :</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>45</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>baht/piece</label></h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-5 col-md-offset-1">
                              <div class="row">
                                 <div class="col-md-7">
                                    <h4>Price Rate M</h4>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4 col-md-offset-1">
                                    <h5><label>200 + :</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>40</label></h5>
                                 </div>
                                 <div class="col-md-1">
                                    <h5><label>baht/piece</label></h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end price rate -->
               </div>
            </div>
            <!-- end formbox -->
         </div>
         <!-- endfooter -->
      </div>
      </div>
   </body>
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
                  <div class="col-md-12">
                     <h4>Product Name</h4>
                     <input type="text" class="form-control" placeholder="product name" aria-describedby="basic-addon1">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                     <h4>Weight</h4>
                  </div>
                  <div class="col-md-3">
                     <input type="text" class="form-control" placeholder="weight" aria-describedby="basic-addon1">
                  </div>
                  <div class="col-md-1">
                     <h4>g</h4>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-2">
                     <h4>Quantity</h4>
                  </div>
                  <div class="col-md-3">
                     <input type="text" class="form-control" placeholder="quantity" aria-describedby="basic-addon1">
                  </div>
                  <div class="col-md-1">
                     <h4>piece</h4>
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
                  <div class="col-md-3">
                     <h4>Price Rate G</h4>
                  </div>
                  <div class="col-md-4">
                     <div class="input-group">
                        <input id="inputPieceRateG" type="text" class="form-control text-center" value="">
                        <span class="input-group-addon" id="basic-addon2">piece</span>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="input-group">
                        <input id="inputBahtRateG"type="text" class="form-control text-center" value="">
                        <span class="input-group-addon" id="basic-addon2">baht/piece</span>
                     </div>
                  </div>
                  <div class="col-md-1 rate">
                     <button id="BtnRateG" class="btn btn-success btn-sm glyphicon glyphicon-plus"></button>
                  </div>
               </div>
               <div id="rateG">
                 
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <h4>Price Rate M</h4>
                  </div>
                  <div class="col-md-4">
                     <div class="input-group">
                        <input id="inputPieceRateM" type="text" class="form-control text-center" value="">
                        <span class="input-group-addon" id="basic-addon2">piece</span>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="input-group">
                        <input id="inputBahtRateM"type="text" class="form-control text-center" value="">
                        <span class="input-group-addon" id="basic-addon2">baht/piece</span>
                     </div>
                  </div>
                  <div class="col-md-1 rate">
                     <button id="BtnRateM" class="btn btn-success btn-sm glyphicon glyphicon-plus"></button>
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
   <!-- alertModal-->
   <div id="alertModalDeleteProduct" class="modal fade">
      <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
               <center>
                  <label>
                     <h4>Delete Product</h4>
                  </label>
               </center>
            </div>
            <div class="modal-footer border">
               <center>
                  <button id="okBtnChangPage" class="btn btn-sm btn-primary" data-dismiss="modal">OK
                  </button>
                  <button id="cancleBtnChangPage" class="btn btn-sm btn-danger"
                     data-dismiss="modal">cancle
                  </button>
               </center>
            </div>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <!-- /.modal -->
   <script src="<?php echo base_url();?>assets/js/pageScript/product.js"></script>
</html>