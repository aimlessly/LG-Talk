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


              <!-- Message Box -->
                <textarea class="span8" id="txtNewMessage" name="txtNewMessage"
                          placeholder="พิมพ์ข้อความของคุณที่นี่.." rows="5" style="font-size: 24px; padding-top: 18px"></textarea>
                <h6 class="pull-right">เหลืออีก <span id="spanNumChars">320</span> ตัวอักษร</h6>
                <button id="btnPost" class="btn btn-info">ส่งข้อความ <i class="glyphicon glyphicon-send"></i></button>



              <!-- List of Current User Posts -->
              <?php if ( $max_posts ) : ?>

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