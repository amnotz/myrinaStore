<!DOCTYPE html>
<html lang="en" >
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
    #clearCirculationBtn{
      margin-left: 10px;
    }
    .fixed_width {
      height: 100px;  
      width: 150px;
  }
   
 #testnavbar{
  background-color: #111111;
 }
 #backGmodal{
 
  background-color: #FFC0CB;

 }
  </style>
  <link href="css/4-col-portfolio.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="../../css/imageshow.css">
 <!-- <link rel="stylesheet" type="text/css" href="../../ordertheme.css"> -->
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
<nav class="navbar navbar-default navbar-fixed-top" id="testnavbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="MainOrder.html">Myrina </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 ">
      <ul class="nav navbar-nav">
    <li><a href="ProductSave.html">ผลิตภัณฑ์ที่สนใจ</a></li>
        <li><a href="Profile.html">Profile</a></li>
 <li><a href="StatusPage.html">StatusPage</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
  <li><a href="../ChartOrder.html" class="btn btn-success">สั่งซื้อ</a></li>
        <li><a href="../login.html">Longout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</head>
<body background="<?php echo base_url();?>assets/imges/night10g.jpg">

<div class="container main">
    <div class="panel panel-default" >
      <div class="panel-heading">

        <div class="row">
          <h3 class="panel-title">สินค้าที่สนใจ</h3>
        </div>
      </div>
      <div class="panel-body" >

      </div>
      <div class="panel-footer ">
        <div class="row">
        <div class="col-sm-4">
          <div class="thumbnail food1">
              <img src="<?php echo base_url();?>assets/imges/profile.png" alt="..." class="fixed_width" data-toggle="modal" data-target="#DetailOrderModal">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>รายละเอียด</p>
                <p><a href="#" class="btn btn-warning" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
              </div>
          </div>
        </div>
        <div class="col-sm-4 food1" >
          <div class="thumbnail">
              <img src="<?php echo base_url();?>assets/imges/night10g.jpg" alt="..." class="fixed_width">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-warning" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
              </div>
          </div>
        </div>
        <div class="col-sm-4 food1">
          <div class="thumbnail">
              <img src="<?php echo base_url();?>assets/imges/night10g.jpg" alt="..." class="fixed_width">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-warning" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
              </div>
          </div>
        </div>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
      </div><!-- endfooter -->
    </div>
  </div>
</body>
<div id="DetailOrderModal"class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div  class="modal-content" id="backGmodal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">รายละเอียดสินค้า</h4>
      </div>
      <div class="modal-body">        
        <div class="row">
          <div class="col-md-7 food1 col-md-offset-4">
           <img src="<?php echo base_url();?>assets/imges/night10g.jpg" alt="..." class="fixed_width"><br>
           </div><br><br>

         </div> 
         <div class="row">
         <div class="col-md-2 col-md-offset-1">
            <h4>รายละเอียด:</h4>
          </div>
          <div class="col-md-4 col-md-offset-0">

           <textarea class="form-control" rows="3">34/15 หมู่ 4 ต.ฉลอง อ.เมืองภูเก็ต</textarea>
          </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-1">
            <h4>โปรโมชั่น:</h4>
          </div>
           <div class="col-md-4 col-md-offset-0">

           <textarea class="form-control" rows="3">34/15 หมู่ 4 ต.ฉลอง อ.เมืองภูเก็ต</textarea>
          </div>


          </div>

         
        
        <br>
        <div class="row">
          <div class="col-md-2 col-md-offset-1">
            <h4>จำนวน</h4>
          </div>
          <input type="number" id="income" name="income" value="10">
        </div>
         
      </div><!-- end modal body --> 
      <div class="modal-footer">
        <div class="row">
          <button id="approveBtnOnModal" class="btn btn-success">เพิ่มลงในตะกร้า</button>
         
          
        </div>
      </div>
      </div>
    </div><!-- end modal content -->
  </div>
</div><!-- end modal -->
</html>