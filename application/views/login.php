<?php include 'include/header.php' ?>
<link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">

      <div class="form-signin">

        <h1>Please Sign In</h1>

        <?php if (isset($error) && $error): ?>
          <div class="alert alert-danger alert-dismissable">
            <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
          </div>
        <?php endif; ?>

        <?php echo form_open('login/login_user') ?>

        <input type="text" id="username" class="form-control" name="username" placeholder="Username">
        <input type="password" id="password" class="form-control" name="password" placeholder="Password">

        <button type="submit" name="submit" class="btn btn-info btn-block btn-lg">Sign in</button>
        <br><br>

        </form>


      </div><!-- end div form-signin-->

        <div class="panel-group col-md-4 col-md-offset-4" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title" align="center">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  <i class="icon-user"></i> &nbsp;Sign up !
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" align="center">
              <div class="panel-body">
                <p><input type="text" class="form-control" name="user_name" id="user_name" placeholder="Username"></p>
                <p><input type="text" class="form-control" name="email" id="email" placeholder="Email"></p>
                <p><input type="password" class="form-control" name="password11" id="password11" placeholder="Password"></p>
                <p><input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password"></p>
                <a href="#" id="btnModalSubmit" class="btn btn-primary">Create</a>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title" align="center">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Forget password ?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body" align="center">
                <p><input type="text" class="form-control" name="register" id="register" placeholder="Fill in your username"></p>
                <a href="#" id="" class="btn btn-danger">Create</a>
              </div>
            </div>
          </div>
        </div>

<?php include 'include/footer.php' ?>