<?php
if(session_status() == PHP_SESSION_NONE){session_start();}
if(isset($_COOKIE['wscr'])){if((empty($_SESSION['wid'])) || ($_SESSION['wid']<>$_COOKIE['wscr']) || (isset($_SESSION['wid']))){$_SESSION['wid']=$_COOKIE['wscr'];}}
else {if(empty($_SESSION['wid'])){$_SESSION['wid']=1300;}}
$_SESSION['attwid']=false;
$_SESSION['boolsli']=false;
$_SESSION['i']=1;
$_SESSION['ads']=true;
$_SESSION['tnot']=18;
$_SESSION['ncol2']=17;
$_SESSION['nsli']=5;
$_SESSION['npsli']=2;
$_SESSION['nads']=3;
$_SESSION['nrel']=10;
$_SESSION['dirtem']=get_template_directory_uri().'/';
$_SESSION['dircat']=get_site_url().'/temas/';
$_SESSION['no_idcathome']=array(1,22,10,3831,3829,407,3747,3726);/*1 NOAPLICA, 22 SECUNDARIA, 3831,3829,407,3747,3726 COLUMNISTAS */
$_SESSION['no_idcatcol2']=array(1,10,3831,3829,407,3747,3726);/* 1 NOAPLICA */
$_SESSION['SOLO-DEP']=array(1,22,10);
$_SESSION['arridpost']=array();
$_SESSION['wsli']=1100;
$_SESSION['adA']=300;
$_SESSION['adB']=300;
$_SESSION['adC']=300;
$_SESSION['adD']=700;
$_SESSION['adE']=700;
$_SESSION['adF']=700;
$_SESSION['adG']=700;
$_SESSION['adH']=700;
$_SESSION['adI']=700;
$_SESSION['adJ']=700;



$_SESSION['A']=600;
$_SESSION['A23']=600;
$_SESSION['B']=600;
$_SESSION['ads2']=700;




$_SESSION['ads12']=700;
$_SESSION['ads13']=1400;
$_SESSION['ads14']=1400;
$_SESSION['ads15']=1400;
$_SESSION['phone']=300;
$_SESSION['tablet']=700;
$_SESSION['pc']=900;
$_SESSION['full']='1500';
?>
