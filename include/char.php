<tr>
	<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="..css/reset.css">
	<link rel="stylesheet" href="..css/Char.css">
	<link rel="stylesheet" href="..css/skeleton.css">
	<link rel="stylesheet" href="..css/layout.css">
<td colspan="2" class="cellScrollMiddle"><table width="525" border="0" align="center" cellpadding="5" cellspacing="0">

<tr>
<td align='justfy' valign='top'>
<p>
<center>
<?php
$ip = "localhost";
$username = "root";
$password = "812155855";
$database = "kqw";
mysql_connect($ip, $username, $password) or die("Erro ao Connectar");
mysql_select_db($database) or die("Erro ao selecionar a DB");
?>

<?php
$id_user = $_GET['id'];
if ($id_user != ""){
    $objRS_query = mysql_query("SELECT * FROM meh_users WHERE Username = '".$id_user."'");
    $objRS1_query = mysql_query("SELECT * FROM meh_users WHERE Username = '".$id_user."'");
    $objRS1 = mysql_fetch_assoc($objRS1_query);
    $i = 0;
    while ($objRS = mysql_fetch_array($objRS_query)){
        $i = $i + 1;
    }
    if ($i != ""){
	$id = $objRS1['id'];
	$iAccess = $objRS1['Access'];
	$iGold = $objRS1['Gold'];
	$iCoins = $objRS1['Coins'];
    }
}
?>
<?php
$userid2 = $_GET['id'];
if ($userid2 != ""){
    $objRS_query = mysql_query("SELECT * FROM meh_users WHERE Username = '".$userid2."'");
    $objRS1_query = mysql_query("SELECT * FROM meh_users WHERE Username = '".$userid2."'");
    $objRS1 = mysql_fetch_assoc($objRS1_query);
    $i = 0;
    while ($objRS = mysql_fetch_array($objRS_query)){
        $i = $i + 1;        
    }
    if ($i != ""){
		$id = $objRS1['id'];
        $strUsername = $objRS1['Username'];
        $iLvl  = $objRS1['Level'];
        $bgindex  = $objRS1['ColorSkin'];
        $facecolors = $objRS1['ColorEye'];
        $armorcolors = $objRS1['ColorBase'];
		$bHelm = 1;
		$bPet = 1;
		$bCloak = 1;
		$regip = 1;
    } else {
	die('
<center><p>El usuario no existe en nuetra database!</p></center>
</td>
</tr>
</table></td>
</tr>
<tr>
<td colspan="2" class="cellScrollBottom">&nbsp;</td>
</tr>
</table>
		  ');
    }
}

//CURRENT ARMOR
$current_arm = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'ar' AND userid = '".$objRS1['id']."' AND equipped = 1 ORDER BY id ASC LIMIT 1");
$carm = mysql_fetch_assoc($current_arm);
$current_a = mysql_query("SELECT * FROM meh_items WHERE id = '".$carm['itemid']."'");
$ca = mysql_fetch_assoc($current_a);


//CURRENT WEAPON
$current_wep = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'Weapon' AND userid = '".$objRS1['id']."' AND equipped = 1 ORDER BY id ASC LIMIT 1");
$cwep = mysql_fetch_assoc($current_wep);
$current_w = mysql_query("SELECT * FROM meh_items WHERE id = '".$cwep['itemid']."'");
$cw = mysql_fetch_assoc($current_w);



//CURRENT BACK ITEM
if($bCloak >= 1){
$current_ba = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'ba' AND userid = '".$objRS1['id']."' AND equipped = 1 ORDER BY id ASC LIMIT 1");
$cba = mysql_fetch_assoc($current_ba);
$current_b = mysql_query("SELECT * FROM meh_items WHERE id = '".$cba['itemid']."'");
$cb = mysql_fetch_assoc($current_b);

}


//CURRENT PET
if($bPet >= 1){
$current_pe = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'pe' AND userid = '".$objRS1['id']."' AND equipped = 1 ORDER BY id ASC LIMIT 1");
$cpe = mysql_fetch_assoc($current_pe);
$current_p = mysql_query("SELECT * FROM meh_items WHERE id = '".$cpe['itemid']."'");
$cp = mysql_fetch_assoc($current_p);

}

//CURRENT HELM
if($bHelm >= 1){
$current_he = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'he' AND userid = '".$objRS1['id']."' AND equipped = 1 ORDER BY id ASC LIMIT 1");
$che = mysql_fetch_assoc($current_he);
$current_h = mysql_query("SELECT * FROM meh_items WHERE id = '".$che['itemid']."'");
$ch = mysql_fetch_assoc($current_h);
$helmhair = $ch['File'];
$helmhairl = $ch['Link'];

//Checks if there is not an Equipped Helm
//IF THERE IS NONE EQUIPPED WILL LOAD HAIR INSTEAD
$checkh = mysql_num_rows($current_h);
if ($checkh == 0) {
	$helmhair = 'none';
	$helmhairl = 'none';
}
	}

if($bHelm <= 0){
	$helmhair = 'none';
	$helmhairl = 'none';
}

//CURRENT OUTFIT
$current_ou = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'co' AND userid = '".$objRS1['id']."' AND equipped = 1 ORDER BY id ASC LIMIT 1");
$cur_ou = mysql_fetch_assoc($current_ou);
$current_o = mysql_query("SELECT * FROM meh_items WHERE id = '".$cur_ou['itemid']."'");
$cou = mysql_fetch_assoc($current_o);
$armco = $cou['File'];
$armcol = $cou['Link'];

//Checks if there is not an Equipped Outfit
//IF THERE IS NONE EQUIPPED WILL LOAD CURRENT CLASS INSTEAD
$checko = mysql_num_rows($current_o);
if ($checko == 0) {
	$armco = $ca['File'];
	$armcol = $ca['Link'];
}
?>
<br />

<br />
       <center><br><br><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="550" height="350">
          <param name="movie" value="swf/character5.swf" />
          <param name="quality" value="high" />
          <param name="flashvars" value="
&intColorHair=<?php echo $objRS1['ColorHair']; ?>&intColorSkin=<?php echo $objRS1['ColorSkin']; ?>&intColorEye=<?php echo $objRS1['ColorEyes']; ?>&intColorTrim=<?php echo $objRS1['ColorTrim']; ?>&intColorBase=<?php echo $objRS1['ColorBase']; ?>&intColorAccessory=<?php echo $objRS1['ColorAccessory']; ?>&ia1=4768&strGender=<?php echo $objRS1['Gender']; ?>&strHairFile=<?php echo $objRS1['HairFile']; ?>&strHairName=<?php echo $objRS1['HairName']; ?>&strName=<?php echo $id_user ?>&intLevel=<?php echo $iLvl; ?>&strClassName=<?php echo $ca['Name']?>&strClassFile=<?php echo $armco ?>&strClassLink=<?php echo$armcol ?>&strArmorName=<?php echo $cou['Name']; ?>&strWeaponFile=<?php echo $cw['File'] ?>&strWeaponLink=<?php echo $cw['Link'] ?>&strWeaponType=<?php echo $cw['Type']; ?>&strWeaponName=<?php echo $cw['Name']; ?>&strCapeFile=<?php echo $cb['File']; ?>&strCapeLink=<?php echo $cb['Link']; ?>&strCapeName=<?php echo $cb['Name']; ?>&strHelmFile=<?php echo $helmhair; ?>&strHelmLink=<?php echo $helmhairl; ?>&strHelmName=<?php echo $ch['Name']; ?>&strPetFile=<?php echo $cp['File']; ?>&strPetLink=<?php echo $cp['Link']; ?>&strPetName=<?php echo $cp['Name']; ?>&bgindex=<?php echo $bgindex; ?>" />
          <embed src="swf/character5.swf" width="800" height="500" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" flashvars="
&intColorHair=<?php echo $objRS1['ColorHair']; ?>&intColorSkin=<?php echo $objRS1['ColorSkin']; ?>&intColorEye=<?php echo $objRS1['ColorEyes']; ?>&intColorTrim=<?php echo $objRS1['ColorTrim']; ?>&intColorBase=<?php echo $objRS1['ColorBase']; ?>&intColorAccessory=<?php echo $objRS1['ColorAccessory']; ?>&ia1=4768&strGender=<?php echo $objRS1['Gender']; ?>&strHairFile=<?php echo $objRS1['HairFile']; ?>&strHairName=<?php echo $objRS1['HairName']; ?>&strName=<?php echo $id_user ?>&intLevel=<?php echo $iLvl; ?>&strClassName=<?php echo $ca['Name']?>&strClassFile=<?php echo $armco ?>&strClassLink=<?php echo $armcol ?>&strArmorName=<?php echo $cou['Name']; ?>&strWeaponFile=<?php echo $cw['File'] ?>&strWeaponLink=<?php echo $cw['Link'] ?>&strWeaponType=<?php echo $cw['Type']; ?>&strWeaponName=<?php echo $cw['Name']; ?>&strCapeFile=<?php echo $cb['File']; ?>&strCapeLink=<?php echo $cb['Link']; ?>&strCapeName=<?php echo $cb['Name']; ?>&strHelmFile=<?php echo $helmhair; ?>&strHelmLink=<?php echo $helmhairl; ?>&strHelmName=<?php echo $ch['Name']; ?>&strPetFile=<?php echo $cp['File']; ?>&strPetLink=<?php echo $cp['Link']; ?>&strPetName=<?php echo $cp['Name']; ?>&bgindex=<?php echo $bgindex; ?>"></embed></object><center/>
<br>

<center>
<!---Badger-->
<?php
{
include "include/badger.php";
}
?>	

<div>	
<tr>
<td colspan="0" align="center" valign="top">
<h3>Inventory</h3>
<table width="450" cellspacing="0" cellpadding="0">
<tr valign="top"> 
<td width="205">
<table width="250" cellpadding="2">
<tr>
<strong><font color="#000000">Items</strong>
</tr>
</center>
<br>
<br>
<!---Início de Item Bags-->


<?php
$bag_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'None' AND userid = '".$objRS1['id']."' ORDER BY id DESC");
while ($bag = mysql_fetch_array($bag_query)){
    
$informbag_query = mysql_query("SELECT * FROM meh_items WHERE id = '".$bag['itemid']."'");
$informbag = mysql_fetch_assoc($informbag_query);
?>
<center>
<tr align="center" valign="top"> 
<td>
<?php echo '<img src="images/inven/item.gif">'; ?>
</td>
<td>
<?php echo '<font color="#000000">'; ?>
<?php if($informbag['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($informbag['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo $informbag['Name']; ?>
<?php if($informbag['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($informbag['Upg'] >= 1){ echo '</font></b>'; } ?>
</td>
</tr>
</center>
                
<?php } ?>

<!---Final de Item Bags-->

<!---Início de Item Capas-->


<?php
$armors_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'ba' AND userid = '".$objRS1['id']."' ORDER BY id DESC");
while ($armors = mysql_fetch_array($armors_query)){
                    
$inform1_query = mysql_query("SELECT * FROM meh_items WHERE id = '".$armors['itemid']."'");
$inform1 = mysql_fetch_assoc($inform1_query);
?>
<tr align="left" valign="top">	
<td>
<?php echo '<img src="images/inven/cape.gif">'; ?>
</td>
<td>
<?php echo '<font color="#000000">'; ?>
<?php if($inform1['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($inform1['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo $inform1['Name']; ?>
<?php if($inform1['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($inform1['Upg'] >= 1){ echo '</font></b>'; } ?>
</td>
</tr>
                
<?php } ?>

<!---Fim de Item Capas-->

<!---Início de Item Capacete-->


<?php
$armors_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'he' AND userid = '".$objRS1['id']."' ORDER BY id DESC");
while ($armors = mysql_fetch_array($armors_query)){
                    
$inform1_query = mysql_query("SELECT * FROM meh_items WHERE id = '".$armors['itemid']."'");
$inform1 = mysql_fetch_assoc($inform1_query);
?>
<tr align="left" valign="top"> 
<td width="1%">
<?php echo '<font color="#000000">'; ?>
<?php echo '<img src="images/inven/helm.gif">'; ?>
</td>
<td width="99%">
<?php if($inform1['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($inform1['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo $inform1['Name']; ?>
<?php if($inform1['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($inform1['Upg'] >= 1){ echo '</font></b>'; } ?>
</td>
</tr>
                
<?php } ?>

<!---Fim de Item Capacete-->

<!---Início de Item Pet-->


<?php
$pet_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'pe' AND userid = '".$objRS1['id']."' ORDER BY id DESC");
while ($pet = mysql_fetch_array($pet_query)){
                    
$inform1pe_query = mysql_query("SELECT * FROM meh_items WHERE id = '".$pet['itemid']."'");
$inform1pe = mysql_fetch_assoc($inform1pe_query);
?>
<tr align="left" valign="top"> 

<td width="1%">
<?php echo '<img src="images/inven/pet.gif">'; ?>
</td>
<td width="99%">
<?php echo '<font color="#000000">'; ?>
<?php if($inform1pe['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($inform1pe['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo $inform1pe['Name']; ?>
<?php if($inform1pe['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($inform1pe['Upg'] >= 1){ echo '</font></b>'; } ?>
</td>
</tr>
                
<?php } ?>	

<!---Fim de Item Pet-->

<!---Início de Item Weapon-->


<?php
$weapons_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment='weapon' AND userid = '".$objRS1['id']."' ORDER BY id DESC");
while ($weapons = mysql_fetch_array($weapons_query)){                    
$inform_query = mysql_query("SELECT * FROM meh_items WHERE id = '".$weapons['itemid']."'");
$inform = mysql_fetch_array($inform_query);
?>

<tr align="left" valign="top">
<td>
<?php echo '<font color="#000000">'; ?>
<?php echo '<img src="images/inven/'.$inform['Type'].'.gif">'; ?>
</td>
<td>
<?php echo '<font color="#000000">'; ?>
<?php if($inform['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($inform['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo $inform['Name']; ?>
<?php if($inform['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($inform['Upg'] >= 1){ echo '</font></b>'; } ?>	
</td>
</tr>

<?php } ?>

<!---Fim de Item Weapon-->

</table>
</td>

<td width="205">
<table width="200" cellpadding="2"> 
<tr>
<b><?php echo '<font color="#000000">'; ?>Classes e Armors</b>
</tr>
<br>
<br>		
<?php
$armorsar_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'ar' AND userid = '".$objRS1['id']."' ORDER BY id DESC");

while ($armorsar = mysql_fetch_array($armorsar_query)){
$inform1ar_query = mysql_query("SELECT * FROM meh_items WHERE id = '".$armorsar['itemid']."'");
$inform1ar = mysql_fetch_assoc($inform1ar_query);
?>
<tr align="left" valign="top"> 
<td>
<?php echo '<font color="#000000">'; ?>
<?php echo '<img src="images/inven/class.gif">'; ?>
</td>
<td>
<?php echo '<font color="#000000">'; ?>
<?php if($inform1ar['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($inform1ar['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo $inform1ar['Name']; ?>
<?php if($inform1ar['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($inform1ar['Upg'] >= 1){ echo '</font></b>'; } ?>
</td>
</tr>

<?php } ?>	



<?php
$armorsco_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment = 'co' AND userid = '".$objRS1['id']."' ORDER BY id DESC");
while ($armorsco = mysql_fetch_array($armorsco_query)){
$inform1co_query = mysql_query("SELECT * FROM meh_items WHERE id = '".$armorsco['itemid']."'");
$inform1co = mysql_fetch_assoc($inform1co_query);
?>

<tr align="left" valign="top"> 
<td>
<?php echo '<font color="#000000">'; ?>
<?php echo '<img src="images/inven/armor.gif">'; ?>
</td>
<td>
<?php echo '<font color="#000000">'; ?>
<?php if($inform1co['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($inform1co['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo $inform1co['Name']; ?>
<?php if($inform1co['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($inform1co['Upg'] >= 1){ echo '</font></b>'; } ?>
</td>
</tr>
         
<?php } ?>
</table>
</td>
</tr>
		


<tr> 
<tr valign="top"> 
<td width="205">
<br>
<br>
<table width="250">
<strong><font color="#000000">House</strong>
<br>
<br>
<?php
$house_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment='ho' AND userid = '".$objRS1['id']."' ORDER BY id DESC");
while ($house = mysql_fetch_array($house_query)){
                    
$informho_query = mysql_query("SELECT * FROM meh_items WHERE id = '".$house['itemid']."'");
$informho = mysql_fetch_array($informho_query);
?>
<tr align="left" valign="top"> 
<td>	
<?php echo '<font color="#000000">'; ?>
<?php echo '<img src="images/inven/house.gif">'; ?>
</td>
<td>
<?php echo '<font color="#000000">'; ?>
<?php if($informho['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($informho['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo $informho['Name']; ?>
<?php if($informho['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($informho['Upg'] >= 1){ echo '</font></b>'; } ?>
</td>
</tr>
<?php } ?>			
</table>
</td>


<td width="205">
<br>
<br>
<table width="200"> 
<b><?php echo '<font color="#000000">'; ?>Items da House</b>
<br>
<br>
<?php
$househi_query = mysql_query("SELECT * FROM meh_users_items WHERE equipment='hi' AND userid = '".$objRS1['id']."' ORDER BY id DESC");
while ($househi = mysql_fetch_array($househi_query)){
                    
$informhi_query = mysql_query("SELECT * FROM 
items WHERE id = '".$househi['itemid']."'");
$informhi = mysql_fetch_array($informhi_query);
?>
<tr align="left" valign="top"> 
<td>
<?php echo '<font color="#000000">'; ?>
<?php echo '<img src="images/inven/'.$informhi['sType'].'.gif">'; ?>
</td>
<td>
<?php echo '<font color="#000000">'; ?>
<?php if($informhi['Upg'] >= 1){ echo '<b><font color="#950099">'; } ?>
<?php if($informhi['Coins'] >= 1){ echo '<b><font color="#f67f00">'; } ?>
<?php echo$informhi['Name']; ?>
<?php if($informhi['Coins'] >= 1){ echo '</font></b>'; } ?>
<?php if($informhi['Upg'] >= 1){ echo '</font></b>'; } ?>
</td>	
</tr>
<?php } ?>		
</table>
</td>
</tr>
</table>

</div> 
</div> 