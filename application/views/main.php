<?php include 'include/header.php'; ?>

  <link href="<?php echo base_url('assets/css/modal.css') ?>" rel="stylesheet">
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">

      <!-- User Info -->
      <div class="row well userInfo">
        <div class="span1">
          <img src="../../assets/img/avatars/<?php echo $avatar ?>.png" alt="" class="img-rounded">
        </div>
        <div class="span2 userInfoSpan2">
          <p><strong> <?php echo $name ?> </strong></p>
          <span class=" badge badge-warning">
            <span class="totalMessageCount"><?php echo $post_count ?></span> messages
            <i class="glyphicon glyphicon-globe"></i>
          </span>
        </div>
        <div class="span2 userInfoSpan2">
          <p id="pTagline" contenteditable="true"><?php echo $tagline ?></p>
        </div>

        <div class="userTeamBadge">
          จำนวนเพื่อน: <span class="badge badge-info"><!--<?php echo $teamId ?>--></span>
        </div>
      </div>
      <!-- End User Info -->
          <ul class="nav">
            <li><a href="#"><i class="icon-home"></i> หน้าหลัก</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-th-list"></i> จัดการรายชื่อ</a></li>
            <li><a href="#"><i class="icon-group"></i> จัดการกลุ่ม</a></li>

            <li class="divider-vertical"></li>
          </ul>
          <div class="btn-group pull-right">
              <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/login/logout_user"><i class="glyphicon glyphicon-share"></i> Logout</a>
          </div>
      </div>
      <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
  </div>
  <!--/.navbar -->

  <div class="container">

    <!-- Left Column -->
    <div class="span5 offset1">


      <!-- Message Box -->
      <div class="span9 row well">
        <textarea class="span8" id="txtNewMessage" name="txtNewMessage"
                  placeholder="พิมพ์ข้อความของคุณที่นี่.." rows="5"></textarea>
        <h6 class="pull-right">เหลืออีก <span id="spanNumChars">320</span> ตัวอักษร</h6>
        <button id="btnPost" class="btn btn-info">ส่งข้อความ</button>
      </div>


      <!-- List of Current User Posts -->
      <?php if ( $max_posts ) : ?>
        <div class="row">
          <h3>ส่งไปแล้ว <span class="messageCount"><?php echo count($posts) ?></span> ข้อความ:</h4>
        </div>

        <div class="span9 row well">
          <table id="tblMyMessages" class="table table-condensed table-hover">
            <thead>
            <tr>
              <th class="span2">ข้อความ</th>
              <th class="span1">เวลาส่ง</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach( $posts as $post ) : ?>
              <tr>
                <td><?php echo $post['body'] ?></td>
                <td><?php echo $post['createdDate'] ?></td>
              </tr>
            <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      <?php else : ?>
        <div class="row">
          <h4>You have posted no messages.</h4>
        </div>
      <?php endif; ?>

      </div> <!-- End Left Column -->

  </div>
  </div>

<?php include 'include/footer.php'; ?>