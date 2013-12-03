<!DOCTYPE html >
    
<?php include 'include/header.php'; ?>

<head>
<link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">

<title>RegisterForm</title>
</head>
<body>
<!--<form class="form-horizontal" name="form2" method="post" action="<?=$_SERVER['PHP_SELF'] ?>">
        <h3 class="form-signin-heading">Registration Page!<h3>
        <table border="2">
        <input class ="usercheck" autocomplete="off" name="myusername" type="text" placeholder="Username"></input><span class="check"></span>
        <input class ="input-block-level" name="myemail" type="text" placeholder="E-mail"></input>
        <input class ="input-block-level" name="mypassword" type="password" placeholder="Password"></input><br>
        <button type="submit" class="btn btn-success" >Register</button>
    </form>-->

  <form class="form-horizontal" id="myModal">
        <h3 class="form-signin-heading">Registration Page!<h3>
        <table border="2">
          <input type="text" class="span4" name="first_name" id="first_name" placeholder="First Name">
          <input type="text" class="span4" name="last_name" id="last_name" placeholder="Last Name">
          <input type="text" class="span4" name="email" id="email" placeholder="Email">
          <select class="span4" name="teamId" id="teamId">
            <option value="">Team Number...</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
          <label class="checkbox span4">
            <input type="checkbox" id="isAdmin" name="isAdmin"> Is an admin?
          </label>
          <input type="password" class="span4" name="password" id="password" placeholder="Password"></p>
          <input type="password" class="span4" name="password2" id="password2" placeholder="Confirm Password"></p>
          <!--<button type="submit" class="btn btn-success" >Register</button>-->
          <a href="<?php redirect('/Login/index')?>" class="btn btn-warning">Cancel</a>
          <a href="#" id="btnModalSubmit" class="btn btn-primary">Create</a>

  </form>

<!--model user register-->
<div class="modal hide" id="myModal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">x</button>
      <h3>New User Details</h3>
    </div>
    <div class="modal-body">
        <p><input type="text" class="span4" name="first_name" id="first_name" placeholder="First Name"></p>
        <p><input type="text" class="span4" name="last_name" id="last_name" placeholder="Last Name"></p>
        <p><input type="text" class="span4" name="email" id="email" placeholder="Email"></p>
        <p>
          <select class="span4" name="teamId" id="teamId">
            <option value="">Team Number...</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </p>
        <p>
          <label class="checkbox span4">
            <input type="checkbox" id="isAdmin" name="isAdmin"> Is an admin?
          </label>
        </p>
        <p><input type="password" class="span4" name="password" id="password" placeholder="Password"></p>
        <p><input type="password" class="span4" name="password2" id="password2" placeholder="Confirm Password"></p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-warning" data-dismiss="modal">Cancel</a>
      <a href="#" id="btnModalSubmit" class="btn btn-primary">Create</a>
    </div>
  </div>
<!--model user register-->

  

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
            $(function()
            {
                $('.usercheck').keyup(function()
                {
                    var checkname=$(this).val();
                    var availname=remove_whitespaces(checkname);
                    if(availname!=''){
                        $('.check').show();
                        $('.check').fadeIn(400).html('<img src="<?php echo base_url(); ?>assets/img/ajax-loading.gif" /> ');

                        var String = 'username='+ availname;

                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('controllers/username-check.php') ?>",
                            data: String,
                            cache: false,
                            success: function(result){
                                var result=remove_whitespaces(result);
                                if(result==''){
                                    $('.check').html('<img src="<?php echo base_url(); ?>assets/img/accept.png" /><br> This Username Is Avaliable');                                    
                                    $(".check").removeClass("red");
                                    $('.check').addClass("green");
                                    
                                }else{
                                    $('.check').html('<img src="<?php echo base_url(); ?>assets/img/error.png" /><br> This Username Is Already Taken');
                                    $(".check").removeClass("green");
                                    $('.check').addClass("red");
                                }
                            }
                        }); 
                    }else{
                        $('.check').html('');
                    }
                });
            });
            function remove_whitespaces(str){
                var str=str.replace(/^\s+|\s+$/,'');
                return str;
            }
            
</script>
<?php include 'include/footer.php'; ?>
</body>
</html>

  <!-- ****************************************************************** -->
  <!--                        NEW USER Modal Window                       -->
  <!-- ****************************************************************** -->
<!--<div class="modal hide" id="myModal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">x</button>
      <h3>New User Details</h3>
    </div>
    <div class="modal-body">
        <p><input type="text" class="span4" name="first_name" id="first_name" placeholder="First Name"></p>
        <p><input type="text" class="span4" name="last_name" id="last_name" placeholder="Last Name"></p>
        <p><input type="text" class="span4" name="email" id="email" placeholder="Email"></p>
        <p>
          <select class="span4" name="teamId" id="teamId">
            <option value="">Team Number...</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </p>
        <p>
          <label class="checkbox span4">
            <input type="checkbox" id="isAdmin" name="isAdmin"> Is an admin?
          </label>
        </p>
        <p><input type="password" class="span4" name="password" id="password" placeholder="Password"></p>
        <p><input type="password" class="span4" name="password2" id="password2" placeholder="Confirm Password"></p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-warning" data-dismiss="modal">Cancel</a>
      <a href="#" id="btnModalSubmit" class="btn btn-primary">Create</a>
    </div>
  </div>-->