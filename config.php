<?php
/** 
ASPLIT STUDIOS Edition Mext V2
Date:23/Agos/2016 , Time:05:24:00:PM
Credit:King,King Master,Kelviin,Xredrago,Xblade,Zosh,Matt,Dante0x,xHunter.
**/

interface Configurations {
    /** SERVER INFORMATION **/
    const ServerName = 'KingQuestWorlds';
    const ServerCompany = 'Asplit';    
    /** MYSQL DATA **/
    const MySQLHost = 'db';
    const MySQLUser = 'root';
    const MySQLPass = '$Rafa1234';
    const MySQLData = 'kqw';
    
    const DebugMode = false;    
    const Advertisements = false;
    const IESupport = true;
}

putenv("SiteRoot=/");
putenv("TimeZone=America/Sao_Paulo");

error_reporting(E_ALL);
date_default_timezone_set(getenv('TimeZone'));

ini_set('display_errors', Configurations::DebugMode ? 1 : 0);
ini_set('memory_limit', '700M');
ini_set("max_execution_time", 120);
?>