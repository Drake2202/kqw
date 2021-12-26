<?php
if(!isset($_SERVER['HTTP_REFERER'])){
	header('Location: /');
	exit;
}
/*
KingQuestWorlds 2016 V3 : ASPLIT STUDIOS Signup	
	*/	
//Conexion a la Data base
	$MySQL = array(
		'HOSTNAME' => 'db', //Host name (Default: 'localhost')
		'USERNAME' => 'root', //MySQL Username (Default: 'root')
		'PASSWORD' => '$Rafa1234', //MySQL Password (Default: NULL)
		'DATABASE' => 'kqw' //MySQL Database (Default: 'kqw')
	);

	mysql_select_db($MySQL['DATABASE'], 
	mysql_connect($MySQL['HOSTNAME'], $MySQL['USERNAME'], $MySQL['PASSWORD'])) 
	or die('Error when connecting to the database, please check your "<i><b>scripts/MySQL_Connector.php</b></i>" to fix this problem.');
//IMPORTANT STUFF
$username = mysql_real_escape_string(stripslashes($_POST["strUsername"]));
$password = mysql_real_escape_string(stripslashes($_POST["strPassword"]));
$pass1 = gen_token($password, $username);
$age = mysql_real_escape_string(stripslashes($_POST["intAge"]));
$dob = mysql_real_escape_string(stripslashes($_POST["strDOB"]));
$email = mysql_real_escape_string(stripslashes($_POST["strEmail"]));
$gender = mysql_real_escape_string(stripslashes($_POST["strGender"]));
$classid = mysql_real_escape_string(stripslashes($_POST["ClassID"]));
$eyecolor = mysql_real_escape_string(stripslashes($_POST["intColorEye"]));
$skincolor = mysql_real_escape_string(stripslashes($_POST["intColorSkin"]));
$haircolor = mysql_real_escape_string(stripslashes($_POST["intColorHair"]));
$hairid = $_POST['HairID'];
$ip = $_SERVER['REMOTE_ADDR'];




//Checks if Email has Already been used
$emailcheck = mysql_query("SELECT id FROM meh_users WHERE Email='$email'") or die("status=Error&strReason=" . mysql_error());
if (mysql_num_rows($emailcheck) != 0) {
	die("status=Taken&strReason=The email is already in used by another user.");
}

//Checks If Username has been Taken
$sql = mysql_query("SELECT * FROM meh_users WHERE Username = '$username'") or die("status=Error&strReason=" . mysql_error());
if (mysql_num_rows($sql) !=0) {
	die("status=Taken&strReason=The username is already in use by another character.");
} else {

switch ($hairid) {
	//MALE HAIR
	case 52:
		$hairname = 'Default';
		$hairfile = 'hair/M/Default.swf';
		break;
	case 396:
		$hairname = 'MQElegant';
		$hairfile = 'hair/M/MQElegant.swf';
		break;
	case 55:
		$hairname = 'Goku1';
		$hairfile = 'hair/M/Goku1.swf';
		break;
	case 58:
		$hairname = 'Goku2';
		$hairfile = 'hair/M/Goku2.swf';
		break;
	case 92:
		$hairname = 'Ponytail8';
		$hairfile = 'hair/M/Ponytail8.swf';
		break;
	case 64:
		$hairname = 'Normal2';
		$hairfile = 'hair/M/Normal2.swf';
		break;
	case 349:
		$hairname = 'SuggestedHair';
		$hairfile = 'hair/M/SuggestedHair.swf';
		break;
	case 284:
		$hairname = 'SandBoy';
		$hairfile = 'hair/M/SandBoy.swf';
		break;
	case 383:
		$hairname = 'AQDemonHunter1';
		$hairfile = 'hair/M/AQDemonHunter1.swf';
		break;
	case 390:
		$hairname = 'DFWarStyle';
		$hairfile = 'hair/M/DFWarStyle.swf';
		break;
	case 275:
		$hairname = 'FauxHawk';
		$hairfile = 'hair/M/FauxHawk3.swf';
		break;
	case 398:
		$hairname = 'MQSwift';
		$hairfile = 'hair/M/MQSwift.swf';
		break;
	case 324:
		$hairname = 'Troll3Human';
		$hairfile = 'hair/M/Troll3Human.swf';
		break;		
	//FEMALE HAIR
	case 14:
		$hairname = 'Pig1Bangs1';
		$hairfile = 'hair/F/Pig1Bangs1.swf';
		break;
	case 18:
		$hairname = 'Pig2Bangs2';
		$hairfile = 'hair/F/Pig2Bangs2.swf';
		break;
	case 26:
		$hairname = 'Pony2Bangs2';
		$hairfile = 'hair/F/Pony2Bangs2.swf';
		break;
	case 83:
		$hairname = 'Bangs2Long';
		$hairfile = 'hair/F/Bangs2Long.swf';
		break;
	case 84:
		$hairname = 'Bangs3Long';
		$hairfile = 'hair/F/Bangs3Long.swf';
		break;
	case 285:
		$hairname = 'SandHairGirl';
		$hairfile = 'hair/F/SandHairGirl.swf';
		break;
	case 379:
		$hairname = 'MQGalaxyBuns';
		$hairfile = 'hair/F/MQGalaxyBuns.swf';
		break;
	case 375:
		$hairname = 'AQCasual';
		$hairfile = 'hair/F/AQCasual.swf';
		break;
	case 380:
		$hairname = 'MQRibbon';
		$hairfile = 'hair/F/MQRibbon.swf';
		break;
	case 277:
		$hairname = 'Dragonhawk';
		$hairfile = 'hair/F/Dragonhawk.swf';
		break;
	case 328:
		$hairname = 'TrollFem1HumanFix';
		$hairfile = 'hair/F/TrollFem1HumanFix.swf';
		break;
}
$time = date("Y-m-d");
//Insertar informacion de la cuenta ala Data Base
$randomString = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);	
$sql2 = mysql_query("INSERT INTO `meh_users` (`Username`, `Password`, `SupportPassword`, `Access`, `ActivationFlag`, `Age`, `Gender`, `Email`, `Level`, `Gold`, `Coins`, `Exp`, `ColorHair`, `ColorSkin`, `ColorEye`, `ColorBase`, `ColorTrim`, `ColorAccessory`, `DateCreated`, `UpgradeExpire`, `UpgradeDays`, `BankSlots`, `HouseSlots`, `BagSlots`, `HairID`, `HairFile`, `HairName`, `Permamute`, `Quests`, `Settings`, `Achievement`, `LastArea`, `Country`, `AchievementID`, `CurrentServer`, `ip`, `HouseInfo`) VALUES ('$username', '$pass1', '$password', '1', '5', '15', '$gender', '$email', '1', '0', '0', '0', '$haircolor', '$skincolor', '$eyecolor', '0', '0', '0', '$time', '$time', '-1', '20', '20', '150', '$hairid', '$hairfile', '$hairname', '0', '00000000000000000000000000000000000000000000000000', '0', '0', 'newbie-1|Enter|Spawn', 'US', '', 'Offline', '$ip', '');")  or die("status=Error&strReason=" . mysql_error());

//Seleccionar nuevo nombre
$sql3 = mysql_query("SELECT * FROM meh_users WHERE Username='$username'") or die("status=Error&strReason=" . mysql_error());
$user = mysql_fetch_assoc($sql3) or die("status=Error&strReason=" . mysql_error());
$userId = $user['id'];
$Level = $user['Level'];

//Agregar Armaduras de registro
switch ($classid) {
	case 2:
		mysql_query("INSERT INTO meh_users_items (itemid, userid, equipped, equipment, level, enhid) VALUES ('16777334', '".$user['id']."', '1', 'ar', '1', '1')");//btnWarrior
		break;
	} 

// Agregar Espada de registro
$addweapon = mysql_query("INSERT INTO meh_users_items (itemid, userid, equipped, equipment, level, enhid) VALUES ('36', '$userId', '1', 'Weapon', '1','1')" );

// Agregar Capa
$addCape = mysql_query("INSERT INTO meh_users_items (itemid, userid, equipped, equipment, level, enhid) VALUES ('927', '$userId', '1', 'ba', '1','1')" );


//s$addclass = mysql_query("INSERT INTO meh_users_items (itemid, userid, equipped, equipment, level) VALUES ('2', '$userId', '1', 'ar', '1')" );
		
// ADDS USERS FRIEND LIST 
$addfriends = mysql_query("INSERT INTO meh_users_friends (userid, friends) VALUES ($userId, '')" );

// Inicio seccion
$_SESSION['user_id'] 	= $userId;
$_SESSION['user_name'] 	= $username;
$_SESSION['user_level'] = $Level;
$_SESSION['signed_in'] = true;
$isLoged = 1;

//SUCCESS	
echo "status=Success";
}
function gen_token($pass, $salt) {
	$salt = strtolower($salt);
	$str = hash("sha512", $pass.$salt);
	$len = strlen($salt);
	return strtoupper(substr($str, $len, 17));
}
?>