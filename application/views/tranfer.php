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
      <a class="navbar-brand" href="<?php echo site_url('tranfer_controller/tranfer') ?>">Myrina Store</a>
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</head>
<body>
  <div class="container main">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <div class="row">
          <h3 class="panel-title">Tranfer List</h3>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr class="">
              <th class="text-center">Member ID</th>
              <th class="text-center">Date</th>
              <th class="text-center">Balance (baht)</th>
              <th class="text-center">Date Transfer</th>
              <th class="text-center">Time</th>
              <th class="text-center">Staus</th>
            </tr>
          </thead>
          <tbody>
            <tr class="">
              <td class="text-center">M001</td>
              <td class="text-center">10/01/2016</td>
              <td class="text-center">150000</td>
              <td class="text-center">10/01/2016</td>
              <td class="text-center">17:15 PM</td>
              <td class="text-center"><button class="btn btn-warning btn-sm"data-toggle="modal" data-target="#statusModal">Pending</button></td>
            </tr>
            <tr class="">
              <td class="text-center">M002</td>
              <td class="text-center">09/01/2016</td>
              <td class="text-center">3000</td>
              <td class="text-center">09/01/2016</td>
              <td class="text-center">17:15 PM</td>
              <td class="text-center"><button id="pendingBtn"class="btn btn-warning btn-sm">Pending</button></td>
            </tr>
            <tr class="">
              <td class="text-center">M003</td>
              <td class="text-center">07/01/2016</td>
              <td class="text-center">150000</td>
              <td class="text-center">07/01/2016</td>
              <td class="text-center">11:15 AM</td>
              <td class="text-center"><button id="approvedBtn"class="btn btn-success btn-sm"data-toggle="modal" data-target="#statusModal">Approved</button></td>
            </tr>
            <tr class="">
              <td class="text-center">G001</td>
              <td class="text-center">04/01/2016</td>
              <td class="text-center">1500</td>
              <td class="text-center">04/01/2016</td>
              <td class="text-center">18:15 PM</td>
              <td class="text-center"><button class="btn btn-success btn-sm">Approved</button></td>
            </tr>
            <tr class="">
              <td class="text-center">G002</td>
              <td class="text-center">02/01/2016</td>
              <td class="text-center">20000</td>
              <td class="text-center">02/01/2016</td>
              <td class="text-center">13:12 PM</td>
              <td class="text-center">Supply</td>
            </tr>
            <tr class="">
              <td class="text-center">G003</td>
              <td class="text-center">02/01/2016</td>
              <td class="text-center">22000</td>
              <td class="text-center">02/01/2016</td>
              <td class="text-center">19:12 PM</td>
              <td class="text-center">Supply</td>
            </tr>
          </tbody>
        </table>
      </div><!-- endfooter -->
    </div>
  </div>
</body>
<!-- Large modal -->
<div id="statusModal"class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Tranfer Detail</h4>
      </div>
      <div class="modal-body">        
        <div class="row">
          <div class="col-md-2 col-md-offset-1">
            <h4>Member ID :</h4>
          </div>
          <div class="col-md-2 text-left">
            <h4><label>M00001</label></h4>
          </div>
          <div class="col-md-2 text-right">
            <h4>Name :</h4>
          </div>
          <div class="col-md-1">
            <h4><label>Witsuta</label></h4>
          </div>
          <div class="col-md-1">
            <h4><label>Kongmuang</label></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-1">
            <h4>Bank :</h4>
          </div>
          <div class="col-md-2 text-left">
            <h4><label>K.Bank</label></h4>
          </div>
          <div class="col-md-2 text-right">
            <h4>Balance :</h4>
          </div>
          <div class="col-md-1">
            <h4><label>150000</label></h4>
          </div>
          <div class="col-md-1">
            <h4>฿</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-1">
            <h4>Date Tranfer  :</h4>
          </div>
          <div class="col-md-2 text-left">
            <h4><label>10/01/2016</label></h4>
          </div>
          <div class="col-md-2 text-right">
            <h4>Tranfer Time :</h4>
          </div>
          <div class="col-md-1">
            <h4><label>17:15</label></h4>
          </div>
          <div class="col-md-1">
            <h4>PM</h4>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2 col-md-offset-1">
            <h4>Address :</h4>
          </div>
          <div class="col-md-4 text-right">
            <textarea class="form-control" rows="3">34/15 หมู่ 4 ต.ฉลอง อ.เมืองภูเก็ต</textarea>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2 col-md-offset-1">
            <h4>Supplying By :</h4>
          </div>
          <div class="col-md-3">
            <h4><label>Private Offices</label></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-1">
            <h4>Order :</h4>
          </div>
          <div class="col-md-4">
            <h4><label>Myrina Night Cream 10 g</label></h4>
          </div>
          <div class="col-md-1 text-right">
            <h4><label>1000</label></h4>
          </div>
          <div class="col-md-1">
            <h4>piece</h4>
          </div>
        </div>
        <div class="row">          
          <div class="col-md-4 col-md-offset-3">
            <h4><label>Myrina Night Cream 5 g</label></h4>
          </div>
          <div class="col-md-1 text-right">
            <h4><label>1500</label></h4>
          </div>
          <div class="col-md-1">
            <h4>piece</h4>
          </div>
        </div>
        <div class="row">          
          <div class="col-md-4 col-md-offset-3">
            <h4><label>Myrina Sunscreen Cream 5 g</label></h4>
          </div>
          <div class="col-md-1 text-right">
            <h4><label>20</label></h4>
          </div>
          <div class="col-md-1">
            <h4>piece</h4>
          </div>
        </div>
      </div><!-- end modal body --> 
      <div class="modal-footer">
        <div class="row">
          <button id="approveBtnOnModal" class="btn btn-success">Approve</button>
          <button class="btn btn-primary">Supply</button>
          <button class="btn btn-danger"style="margin-right:17px">Cancle</button>
        </div>
      </div>
    </div><!-- end modal content -->
  </div>
</div><!-- end modal -->
<script src="<?php echo base_url();?>assets/js/pageScript/home.js"></script>
</html>