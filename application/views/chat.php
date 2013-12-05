<?php include 'include/header.php'; ?>

  <link href="<?php echo base_url('assets/css/modal.css') ?>" rel="stylesheet">


  <!-- ****************************************************************** -->
  <!--                              CONTENT                               -->
  <!-- ****************************************************************** -->

  <div class="tab-content">

    <!-- ****************************************************************** -->
    <!--                           TAB 1 Home                               -->
    <!-- ****************************************************************** -->
      <div class="tab-pane active" id="home">
		<div class="container">
		

            <!-- Left Column -->
            <div class="span5 offset1">
			
			<!--form-->
			<form  method="post" accept-charset="utf-8" action="<?php echo site_url("main/show_main"); ?>" style='float:right;'>
				<select id="sel_health" name="health">
				<option value="" selected="selected">--เลือกประโบคสุขภาพ--</option>
				<?php
				$time = $this->typeTextModel->getHealth();
				foreach ($time as $row)
				{
				?>
					<option value="<?=$row->Sentence?>"><?=$row->Sentence?></option>
				<?php } ?>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</select>
			</form>
			<form  method="post" accept-charset="utf-8" action="<?php echo site_url("main/show_main"); ?>" style='float:right;'>
				<select id="sel_money" name="money">
				<option value="" selected="selected">--เลือกประโบคการเงิน--</option>
				<?php
				$time = $this->typeTextModel->getMoney();
				foreach ($time as $row)
				{
				?>
					<option value="<?=$row->Sentence?>"><?=$row->Sentence?></option>
				<?php } ?>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</select>
			</form>
			<form  method="post" accept-charset="utf-8" action="<?php echo site_url("main/show_main"); ?>" style='float:right;'>
				<select id="sel_time" name="time">
				<option value="" selected="selected">--เลือกประโบคเวลา--</option>
				<?php
				$time = $this->typeTextModel->getTime();
				foreach ($time as $row)
				{
				?>
					<option value="<?=$row->Sentence?>"><?=$row->Sentence?></option>
				<?php } ?>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</select>
			</form>
			<form  method="post" accept-charset="utf-8" action="<?php echo site_url("main/show_main"); ?>" style='float:right;'>
				<select id="sel_food" name="food">  
				<option value="" selected="selected">--เลือกประโบคอาหาร--</option>
				<?php
				$rs = $this->typeTextModel->getRows();
					foreach ($rs as $row)
				{
				?>
					<option value="<?=$row->Sentence?>"><?=$row->Sentence?></option>
				<?php } ?>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</select>
			</form>
			<!-- End form-->
			
              <!-- Message Box -->
                <textarea class="span6 pull-right" id="txtNewMessage" name="txtNewMessage"
                          placeholder="พิมพ์ข้อความของคุณที่นี่.." rows="5" style="font-size: 24px; padding-top: 18px; "></textarea>
                <h6 class="pull-right">เหลืออีก <span id="spanNumChars">320</span> ตัวอักษร</h6>
                <button id="btnPost" class="btn btn-info">ส่งข้อความ <i class="glyphicon glyphicon-send"></i></button>

              <!-- List of Current User Posts -->
              <?php if ( $max_posts ) : ?>

                <div class="span9 row well" >
                  <table id="tblMyMessages" class="table table-condensed table-hover"style='float:right;'>
                    
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
        </div> <!-- End Container -->




    </div><!-- End Tab One-->


    <!-- ****************************************************************** -->
    <!--                           TAB 2 CONTACT                            -->
    <!-- ****************************************************************** -->
    <div class="tab-pane" id="contact">...</div>

    <!-- ****************************************************************** -->
    <!--                           TAB 3 GROUP                              -->
    <!-- ****************************************************************** -->
    <div class="tab-pane" id="group">...</div>
    
  </div>





<?php include 'include/footer.php'; ?>