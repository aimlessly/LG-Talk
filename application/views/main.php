<?php include 'include/header.php'; ?>

  <link href="<?php echo base_url('assets/css/modal.css') ?>" rel="stylesheet">
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">

      <!-- User Info -->
      <div class="row well userInfo">

        <div class="span1">
          <img src="../../assets/img/avatars/<?php echo $avatar ?>.png" alt="" class="img-rounded">
        </div>

        <div class="span6">
          <h1><strong> <?php echo $name ?> </strong>
          <span class="badge badge-warning">
          <span class="totalMessageCount"><?php echo $post_count ?></span> messages
            <i class="glyphicon glyphicon-globe"></i>
          </span>
          </h1>
        </div>

        <div class="span2">
          <p id="pTagline" contenteditable="true" style="font-size:22px;"><?php echo $tagline ?></p>
        </div>

        <div class="userTeamBadge">
          จำนวนเพื่อน: <span class="badge badge-info"><!--<?php echo $teamId ?>--></span>
        </div>

        <div class="btn-group pull-right">
          <a class="btn btn-danger btn-lg" href="<?php echo base_url() ?>index.php/login/logout_user" onmouseover="mouseoversound4.playclip()"><i class="glyphicon glyphicon-share"></i> Logout</a>
        </div>

      </div>
      <!-- User Info -->

          <ul class="nav nav-tabs">
            <li><h2><strong> LGTALK <i class="glyphicon glyphicon-comment"></i>&nbsp;</strong></h2></li>
            <li><a href="#home" data-toggle="tab"><h4><i class="glyphicon glyphicon-home" onmouseover="mouseoversound1.playclip()"></i>&nbsp; หน้าหลัก </h4></a></li><li></li>
            <li><a href="#contact" data-toggle="tab"><h4><i class="glyphicon glyphicon-th-list" onmouseover="mouseoversound2.playclip()"></i>&nbsp; จัดการรายชื่อ </h4></a></li><li></li>
            <li><a href="#group" data-toggle="tab"><h4><i class="icon-group" onmouseover="mouseoversound3.playclip()"></i>&nbsp; จัดการกลุ่ม </h4></a></li><li></li>
          </ul>


    <!--/.navbar-inner -->
    </div>
  <!--/.navbar -->
  </div>

<?php include 'chat.php'; ?>
<?php include 'include/footer.php'; ?>