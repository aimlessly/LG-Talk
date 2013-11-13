<!DOCTYPE html >
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link type="text/css" rel="Stylesheet" href="jsLgVKeyboard/LgVKeyboard.css" /> 

<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }
      
		
      .form-horizontal {
        max-width: 400px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-horizontal .form-signin-heading,
      .form-horizontal .checkbox {
        margin-bottom: 10px;
      }
      .form-horizontal input[type="text"],
      .form-horizontal input[type="password"] {
        font-size: 20px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
	  .green{color:green;}
	  .red{color:red;}

    </style>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<meta http-equiv="content-language" content="th" />

<style type= "text/css">
</style>

<title>RegisterForm</title>
</head>
<body>



<form class="form-horizontal" name="form2" method="post" action="register.php" accept-charset="utf-8">
<h3 class="form-signin-heading">Registration Page!<h3>
<table border="2">
<input class ="myusername" autocomplete="off" name="myusername" type="text" placeholder="Username"></input><span class="check"></span>

<input class ="input-block-level" name="myemail" type="text" placeholder="E-mail"></input>

<input class ="input-block-level" name="mypassword" type="password" placeholder="Password"></input>

<button type="submit" class="btn btn-success" >Register</button>
</form>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!--<script id="mainVKScript" type="text/javascript" src="jsLgVKeyboard/LgVKeyboard.js">
</script>
<script type="text/javascript" src="jsLgVKeyboard/LgVKeyboardIframe.js"></script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
            	document.write('<scr'+'ipt id="mainVKScript" type="text/javascript" src="jsLgVKeyboard/LgVKeyboard.js" ></scr'+'ipt>');
				document.write('<scr'+'ipt type="text/javascript" src="jsLgVKeyboard/LgVKeyboardIframe.js" ></scr'+'ipt>');
            $(function()
            {
                $('.myusername').keyup(function()
                {
                    var checkname=$(this).val();
                    var availname=remove_whitespaces(checkname);
                    if(availname!=''){
                        $('.check').show();
                        $('.check').fadeIn(400).html('<img src="img/ajax-loading.gif" /> ');

                        var String = 'username='+ availname;

                        $.ajax({
                            type: "POST",
                            url: "username-check.php",
                            data: String,
                            cache: false,
                            success: function(result){
                                var result=remove_whitespaces(result);
                                if(result==''){
                                    $('.check').html('<img src="img/accept.png" /><br> This Username Is Avaliable');                                    
                                    $(".check").removeClass("red");
                                    $('.check').addClass("green");
                                    
                                }else{
                                    $('.check').html('<img src="img/error.png" /><br> This Username Is Already Taken');
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

</body>
</html>