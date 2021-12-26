<?php 
if(!isset($_SERVER['HTTP_REFERER'])){
	header('Location: /');
	exit;
}
?>
<?php 
	if(!(include "config.php")){
		die("<center>FATAL ERROR: Arquivo de configuração não encontrado</center>");
	}
?>
<?php if(!(empty($passon)) && ($access < 40)){ ?>
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
<html>
	<head>
		<title>User no is Staff - ASPLIT</title>
	   <link rel="shortcut icon" href="./kqw.ico">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
		<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0-alpha' type='text/css' media='all' />
	</head>
	<body>
		<div id="tudo">
			<div>&nbsp </div>
			<div id="conteudo" class="shadow">
				<p> &nbsp </p>
				<div style="height: 30px;">&nbsp </div>
				<p><center><img src="images/asplit.png" alt=""> </br>only!</center></p>
				<p><a href=".."><center>&raquo Back to the game!</center></a></p>
			</div>
		</div>
	</body>
</html>
<?php }else if(!(empty($passon))){ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ASPLIT | Quest Edit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./admin/plugins/iCheck/flat/blue.css">
    <!-- iConos -->
  <link href="css/icons.css" rel="stylesheet" type="text/css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="./admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="./admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="./admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="./admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>QW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PANEL</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
			  <!-- Messages: style can be found in dropdown.less-->
			  <li class="dropdown messages-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">			  
				  
				</a>
				<ul class="dropdown-menu">
				  
				  <li>
					<!-- inner menu: contains the actual data -->
					
              
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/<?php echo $useron; ?>.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $useron; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/<?php echo $useron; ?>.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $useron; ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="?logout" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/<?php echo $useron; ?>.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $useron; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="fa fa-circle-o"></i>Home</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Game</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="items.php"><i class="fa fa-circle-o"></i> Items</a></li>
            <li><a href="monsters.php"><i class="fa fa-circle-o"></i> Monsters</a></li>
            <li><a href="maps.php"><i class="fa fa-circle-o"></i> Maps</a></li>
            <li><a href="shops.php"><i class="fa fa-circle-o"></i> Shops</a></li>
			<li class="active"><a href="quests.php"><i class="fa fa-circle-o"></i> Quests</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="reported.php"><i class="fa fa-circle-o"></i> Reported</a></li>
            <li><a href="/"><i class="fa fa-circle-o"></i> Logs</a></li>
            <li><a href="list.php?ban"><i class="fa fa-circle-o"></i> Banned</a></li>
            <li><a href="list.php?staffs"><i class="fa fa-circle-o"></i> Staff</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Server</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Assest</a></li>
            <li><a href="settings.php"><i class="fa fa-circle-o"></i> Settings</a></li>
          </ul>
        </li>
        <li><a href="/"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quests
        <small>Game Quests</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Game</a></li>
        <li><a href="#">Quests</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="callout callout-info">
        <h4>Notice!</h4>

        <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
          is bigger than your content because it prevents extra unwanted scrolling.</p>
      </div>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
          <div class="box-tools pull-right">
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!
		 <!-- Recent activity -->
		<div class="block">
		<?php if(!(isset($_GET['edit']))){ ?>
			<div class="block full">
				<div class="block-title">
				<h6 class="heading-hr"><i class="icon-file"></i> Insert new quest</h6>
								</ul>
        	</div>
				<?php
					if(isset($_POST['add'])){
						$id = addslashes($_POST['id']);
						$nome = addslashes($_POST['add-term']);
						$sDesc = addslashes($_POST['sDesc']);
						$sEndText = addslashes($_POST['sEndText']);
						$iGold = addslashes($_POST['iGold']);
						$iCoins = addslashes($_POST['iCoins']);
						$iExp = addslashes($_POST['iExp']);
						$iLvl = addslashes($_POST['iLvl']);
						$turnin = addslashes($_POST['turnin']);
						$oRewards = addslashes($_POST['oRewards']);
						
						$busca_it_add = mysql_query("SELECT sName FROM meh_quests WHERE id='$id'");
						$conta_it_add = mysql_num_rows($busca_it_add);
						
						if(empty($id) || empty($nome) || ($id <= 0) || empty($oRewards)){
							echo "<div class='alert alert-danger fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-cancel-circle'></i> Fill out all fields!
		            </div>";						}else if($conta_it_add > 0){
							echo "<div class='alert alert-danger fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-cancel-circle'></i> ID in use!
		            </div>";
						}else{
							if(mysql_query("INSERT INTO meh_quests (`id`, `sName`, `sDesc`, `sEndText`, `iGold`, `iCoins`, `iExp`, `iLvl`, `turnin`, `oRewards`, `sField`) VALUES ('$id', '$nome', '$sDesc', '$sEndText', '$iGold', '$iCoins', '$iExp', '$iLvl', '$turnin', '$oRewards', '')")){
								
								mysql_query("INSERT INTO meh_users_logs (`Staff`, `Info`, `Date`) VALUES ('$user', 'Created the quest: $id', NOW( ))");
								
									echo "<div class='alert alert-success fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-checkmark-circle'></i> Sucess! Quest id: $id - Redirect in 5 seconds...<script type='text/javascript' language='JavaScript'>
setTimeout(function () { location.href = 'quests.php';
}, 5000);
</script>
		            </div>";							}else{
							echo "<div class='alert alert-danger fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-cancel-circle'></i> MYSQL ERROR!
		            </div>";
							}
						}
						echo "<br /><br />";
					}
				?>
			</div>
			<form action="" method="POST">
				<table>
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Quest ID <font color="red" style="font-size: 10px;">(only numbers)</font>: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="id" value="<?php echo $_POST['id']; ?>"></td>
					</tr>
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Quest Name: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="add-term" value="<?php echo $_POST['add-term']; ?>"></td>
					</tr>
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Quest Description: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="sDesc" value="<?php echo $_POST['sDesc']; ?>"></td>
					</tr>				
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Quest end text: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="sEndText" value="<?php echo $_POST['sEndText']; ?>"></td>
					</tr>	
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Gold reward <font color="red" style="font-size: 10px;">(only numbers)</font>: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="iGold" value="<?php echo $_POST['iGold']; ?>"></td>
					</tr>
                    <tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Coin reward <font color="red" style="font-size: 10px;">(only numbers)</font>: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="iCoins" value="<?php echo $_POST['iCoins']; ?>"></td>
					</tr>					
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Exp reward <font color="red" style="font-size: 10px;">(only numbers)</font>:</td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="iExp" value="<?php echo $_POST['iExp']; ?>"></td>
					</tr>
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Level <font color="red" style="font-size: 10px;">(only numbers)</font>:</td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="iLvl" value="<?php echo $_POST['iLvl']; ?>"></td>
					</tr>	
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Req. Items <font color="red" style="font-size: 10px;">(Ex: itemid:amount)</font>: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="turnin" value="<?php echo $_POST['turnin']; ?>"></td>
					</tr>	
					<tr>
						<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Rewards <font color="red" style="font-size: 10px;">(Ex: itemid:itemid:itemid)</font>: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="oRewards" value="<?php echo $_POST['oRewards']; ?>"></td>
					</tr>																							
					<tr><td style="border: 1px #000; padding: 10px 50px 10px 50px;"></td><td><input type="submit" name="add" value="Insert quest"></td></tr>
				</table>
			</form>
		<?php }else{ ?>
						<div class="block">
			<div class="block full">
				<div class="block-title">
				<h6 class="heading-hr"><i class="icon-file"></i> Edit quest</h6>
				<?php
					if(isset($_POST['edd'])){
						$ed_id = addslashes($_POST['ed_id']);
						$ed_name = addslashes($_POST['ed_name']);
						$ed_sDesc = addslashes($_POST['ed_sDesc']);
						$ed_sEndText = addslashes($_POST['ed_sEndText']);
						$ed_iGold = addslashes($_POST['ed_iGold']);
						$ed_iCoins = addslashes($_POST['ed_iCoins']);
						$ed_iExp = addslashes($_POST['ed_iExp']);
						$ed_iLvl = addslashes($_POST['ed_iLvl']);
						$ed_turnin = addslashes($_POST['ed_turnin']);
						$ed_oRewards = addslashes($_POST['ed_oRewards']);

						if(empty($ed_name) || empty($ed_oRewards)){
							echo "<div class='alert alert-danger fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-cancel-circle'></i> Fill out all fields!
		            </div>";
						}else{
							if(mysql_query("UPDATE meh_quests SET sName='$ed_name', sDesc='$ed_sDesc', sEndText='$ed_sEndText', iGold='$ed_iGold', iCoins='$ed_iCoins', iExp='$ed_iExp', iLvl='$ed_iLvl', turnin='$ed_turnin', oRewards='$ed_oRewards' WHERE id='$ed_id'")){
								
								mysql_query("INSERT INTO meh_users_logs (`Staff`, `Info`, `Date`) VALUES ('$user', 'Edited the quest: $ed_id', NOW( ))");
								
									echo "<div class='alert alert-success fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-checkmark-circle'></i> Sucess! - Redirect in 5 seconds...<script type='text/javascript' language='JavaScript'>
setTimeout(function () { location.href = 'quests.php';
}, 5000);
</script>
		            </div>";
							}else{
							echo "<div class='alert alert-danger fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-cancel-circle'></i> MYSQL ERROR!
		            </div>";
							}
						}
					}
				?>
			</div>
				<?php
					$edit = addslashes($_GET['edit']);
					$busca_edit = mysql_query("SELECT * FROM meh_quests WHERE id=$edit");
					$conta_edit = mysql_num_rows($busca_edit);
					if($conta_edit > 0){
						$fetch_edit = mysql_fetch_array($busca_edit);
						$edit_id = $fetch_edit['id'];
						$edit_name = $fetch_edit['sName'];
						$edit_sDesc = $fetch_edit['sDesc'];
						$edit_sEndText = $fetch_edit['sEndText'];
						$edit_iGold = $fetch_edit['iGold'];
						$edit_iCoins = $fetch_edit['iCoins'];
						$edit_iExp = $fetch_edit['iExp'];
						$edit_iLvl = $fetch_edit['iLvl'];
						$edit_turnin = $fetch_edit['turnin'];
						$edit_oRewards = $fetch_edit['oRewards'];

				?>
					<form action="" method="POST">
						<table>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Quest ID: </td><td><?php echo $edit_id; ?></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Quest Name: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="ed_name" value="<?php echo $edit_name; ?>"></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Description: </td><td><textarea class="elastic form-control required" name="ed_sDesc" cols="40" rows="5"><?php echo $edit_sDesc; ?></textarea></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Quest end text: </td><td><textarea class="elastic form-control required" name="ed_sEndText" cols="40" rows="5"><?php echo $edit_sEndText; ?></textarea></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Gold: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="ed_iGold" value="<?php echo $edit_iGold; ?>"></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Coins: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="ed_iCoins" value="<?php echo $edit_iCoins; ?>"></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Exp: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="ed_iExp" value="<?php echo $edit_iExp; ?>"></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Level: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="ed_iLvl" value="<?php echo $edit_iLvl; ?>"></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Req. Items: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="ed_turnin" value="<?php echo $edit_turnin; ?>"></td>
							</tr>
							<tr>
								<td style='border: 1px #000; padding: 10px 50px 10px 50px;' align="right">Rewards: </td><td><input type="text" class="datepicker-trigger form-control hasDatepicker" name="ed_oRewards" value="<?php echo $edit_oRewards; ?>"></td>
							</tr>
							<tr><td style="border: 1px #000; padding: 10px 50px 10px 50px;"></td><td><input type="hidden" name="ed_id" value="<?php echo $edit_id; ?>"><input type="submit" name="edd" value="Update Quest"></td></tr>
						</table>
					</form>
			<?php
				}else{
							echo "<div class='alert alert-danger fade in block-inner'>
		                <button type='button' class='close' data-dismiss='alert'>×</button>
		                <i class='icon-cancel-circle'></i> Shop not found!
		            </div>";				}
			?>
		
		<?php } ?>
		
		<br /><br /><br />
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          
              <!-- /. tools -->

             
            <!-- /.box-body-->

          <!-- /.box -->

          <!-- solid sales graph -->
          
            <!-- /.box-body -->

                <!-- .col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          
                <!-- /.col -->
               
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <center><strong>Copyright &copy; 2014-2016 <a href="http://asplit.com">Asplit Studio</a>.</strong> All rights
    reserved.
  </footer></center>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- .wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php }else{ ?>
	<?php include "..login.php"; ?>
<?php } ?>