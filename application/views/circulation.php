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
    #clearCirculationBtn{
       margin-left: 10px;
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</head>
<body>
  <div class="container main">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <div class="row">
          <h3 class="panel-title">Circulation</h3>
        </div>
      </div>
      <div class="panel-body ">
        <div class="row">
          <button id="clearCirculationBtn"class="btn btn-success" data-toggle="modal" data-target="#modalClearCirculation">Clear Circulation</button>
        </div>
        <br>
        <table class="table table-bordered">
          <thead>
            <tr class="">
              <th class="text-center">Member ID</th>
              <th class="text-center">Name</th>
              <th class="text-center">Circulation (baht)</th>
              <th class="text-center">Score Point</th>
            </tr>
          </thead>
          <tbody>
            <tr class="">
              <td class="text-center">M001</td>
              <td class="text-center">Witsuta</td>
              <td class="text-center">150000</td>
              <td class="text-center">42</td>
            </tr>
            <tr class="">
              <td class="text-center">M002</td>
              <td class="text-center">Witsuta</td>
              <td class="text-center">3000</td>
              <td class="text-center">20</td>
            </tr>
            <tr class="">
              <td class="text-center">M003</td>
              <td class="text-center">Witsuta</td>
              <td class="text-center">150000</td>
              <td class="text-center">20</td>
            </tr>
            <tr class="">
              <td class="text-center">G001</td>
              <td class="text-center">Witsuta</td>
              <td class="text-center">1500</td>
              <td class="text-center">20</td>
            </tr>
            <tr class="">
              <td class="text-center">G002</td>
              <td class="text-center">Witsuta</td>
              <td class="text-center">20000</td>
              <td class="text-center">20</td>
            </tr>
            <tr class="">
              <td class="text-center">G003</td>
              <td class="text-center">Witsuta</td>
              <td class="text-center">22000</td>
              <td class="text-center">20</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col-md-2">
            <h4>Monthly sales :</h4>
          </div>
          <div class="col-md-8">
            <h4><label>1 January 2016 - Current Time</label></h4>
          </div>  
        </div>
        <div class="row">
          <div class="col-md-2">
            <h4>Total :</h4>
          </div>
          <div class="col-md-2">
            <h4><label>xxxxxxx</label></h4>
          </div>
          <div class="col-md-2 text-left">
            <h4>baht</h4>
          </div>  
        </div>
      </div><!-- endfooter -->
    </div>
  </div>
</body>
<!-- modal clear circulation -->
<div id="modalClearCirculation" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <label><h4>Clear Circulation</h4></label>
                </center>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-5">
                  <h4>Begin New Circulation :</h4>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                </div>    
              </div>
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
</html>