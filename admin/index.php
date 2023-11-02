<?php
include_once 'config/helpers.php';
session_start();
include_once  'config/DB.php';

if(isset($_POST['login']))
{ 
  $user = mysqli_real_escape_string($conn, htmlentities($_POST['user']));
  $pwd = mysqli_real_escape_string($conn, htmlentities(md5($_POST['pwd'])));
    if (empty($_POST['user']== $pwd ))
        {
          $Q=mysqli_query($conn, "SELECT * from admin where user='".$user."' and pwd='".$pwd."'");
          $r=mysqli_fetch_assoc($Q);
          if (mysqli_num_rows($Q))
            {
              $_SESSION['user'] = $r['user'];
              $_SESSION['pwd'] = $r['pwd'];
                echo "<script language='JavaScript'>alert('Login Sukses..!');
                document.location='overview.php?page=view';</script>";
            } else
              {
                echo "<script language='JavaScript'>alert('Username dan Password Salah  !');
                document.location='index.php';</script>";
                    
              }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>.::UPT-TIK | USN KOLAKA ::.</title>
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo"></div>
      <!-- /.login-logo -->
        <div class="login-box-body">
          <div align="center"><img width = "125px" src="<?=base_url()?>images/logo-anugrahgroup.png"></div>
            <h4 align="center"><font color="maroon"><b> ADMINISTRATOR</b></font></h4>
            <p align="center"><font color='blue'></font></p>

            <form action="" method="post">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="user">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="pwd">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>

              <div class="row">
                <div class="col-xs-8">
                  <a href=""><b>Lupa Password?</b></a>
                </div> <br><br>
                <div class="col-xs-12">
                  <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">MASUK</button>
                </div>
                
              </div>
              <br>
              <p class="login-box-msg glyphicon-envelope">support@anugrahgroup.co.id</p>
            </form>
          </div>
        </div>
  </body>
    


<script src="<?=base_url()?>asset/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>asset/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
</html>