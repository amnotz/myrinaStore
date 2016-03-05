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
      <a class="navbar-brand" href="home.html">Myrina Store</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="product.html" >Product <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url('controller/circulation') ?>">Circulation</a></li>
        <li><a href="member.html">Member</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</head>