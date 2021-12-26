<?php

# Achievements Start
		$Upgraded_Achv = $userFetch['Upgraded'];
		$Achv_Access = $userFetch['Access'];
		$Beater_Achv = $userFetch['id'];
		if ($Achv_Access > 0) {
		//Checks Beater
		$TheBeaterCon = $con->query("SELECT id FROM meh_users WHERE Access < 40 AND Access > 0 ORDER BY meh_users.Level DESC, users.Kills DESC, meh_users.Deaths ASC, users.Exp DESC LIMIT 1");
		while ($TheBeaterFetch = $TheBeaterCon->fetch_object()) {
			if ($TheBeaterFetch->id == $Beater_Achv) {
			$Achv_Beater = "<a role='button' data-toggle='popover' data-trigger='hover' class='ach strike-tooltip' title='<h4>Top 1 in AQL Ranking</h4>' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/pvp.jpg' /></a>";
			}
		}
		
		$Top3 = $con->query("SELECT id FROM meh_users WHERE Access < 40 AND Access > 0 ORDER BY users.Level DESC, users.Kills DESC, users.Deaths ASC, users.Exp DESC LIMIT 3");
		while ($Top3Fetch = $Top3->fetch_object()) {
			if ($Top3Fetch->id == $Beater_Achv) {
			$Achv_Top3 = "<a role='button' data-toggle='popover' data-trigger='hover' class='ach strike-tooltip' title='<h4>Top 3 players in Ilussion AQ Ranking</h4>' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/top.jpg' /></a>";
			}
		}
		
		//Check Founder
		if ($userFetch['FounderBadge'] > 0) {
		$Achv_Founder = "<a role='button' data-toggle='popover' data-trigger='hover' class='ach strike-tooltip' title='<h4>Awarded to those, who upgraded their account during beta testing.</h4>' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/founder.jpg' /></a>";
		}
		
		if($userFetch['UpgradeDays']>0) {
			$con->query("UPDATE `meh_users` SET FounderBadge='1' WHERE id='{$userFetch['id']}'");
		}
		
		//Checks Beta
		if ($userFetch['BetaBadge'] > 0) {
		$Achv_Beta = "<a role='button' data-toggle='popover' data-trigger='hover' class='ach strike-tooltip' title='<h4>Awarded to those, who created their accounts during beta testing.</h4>' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/beta-char.jpg' /></a>";
		}
		
		//PTR //RARE
		if ($userFetch['PTRBadge'] > 0) {
		$Achv_PTR = "<a role='button' data-toggle='popover' data-trigger='hover' class='ach strike-tooltip' title='<h4>Awarded to those who help us on ptr stage.</h4>' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/ptr.jpg' /></a>";
		}
		
		//Checks Staff Member
		
		if ($userFetch['Rebirth'] > 0) {
		$Achv_Rebirth = "<span class='ach strike-tooltip' title='<center>Rebirth: Awarded to those who rebirthed their accounts!</center>'><i class='fa fa-fire'></i></span>";
		}
		
		//Checks VIP
		if ($userFetch['UpgradeDays'] > 0) {
		$Achv_VIP = "<a role='button' data-toggle='popover' data-trigger='hover' class='ach strike-tooltip' title='<h4>Awarded to those who upgraded their account.</h4>' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/vip.jpg' /></a>";
		}
		
		//Coins Digger
		if ($userFetch['Coins'] > 250000) {
		$Achv_Coins = "<a role='button' data-toggle='popover' class='ach strike-tooltip' title='<h4>This player haves 250000 Coins.</h4>' data-trigger='hover' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/ac-richee.png' /></a>";
		}
		
		//SilverDuelist
		if ($userFetch['KillCount'] > 100) {
		$Achv_Kills = "<a role='button' data-toggle='popover' data-trigger='hover' class='ach strike-tooltip' title='<h4>This player kills ".$userFetch['KillCount']." people, what can you say about that?</h4>' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/silver-duelist.png' /></a>";
		}
		
		
		} else {
			$Achv_Cheater = "<a role='button' data-toggle='popover' class='ach strike-tooltip' title='<h4>Disabled player.</h4>' data-trigger='hover' data-placement='bottom' data-container='body'><img alt='' width='90' height='82' src='/templates/images/badges/cheater.jpg' /></a>";
		}
		/* Achievements End */
		
		#VariableAchv
		
		$Core->Variables['{Achv_Beater}'] = $Achv_Beater;
		$Core->Variables['{Achv_Founder}'] = $Achv_Founder;
		$Core->Variables['{Achv_Beta}'] = $Achv_Beta;
		$Core->Variables['{Achv_SMember}'] = $Achv_SMember;
		$Core->Variables['{Achv_VIP}'] = $Achv_VIP;
		$Core->Variables['{Achv_Coins}'] = $Achv_Coins;
		$Core->Variables['{Achv_Kills}'] = $Achv_Kills;
		$Core->Variables['{Achv_Rebirth}'] = $Achv_Rebirth;
		$Core->Variables['{Achv_PTR}'] = $Achv_PTR;
		$Core->Variables['{Achv_Cheater}'] = $Achv_Cheater;
		#End->VariableAchv

?>