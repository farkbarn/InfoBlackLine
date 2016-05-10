<?php
session_start();

$_SESSION['i']=1;
$_SESSION['ads']=true;
$_SESSION['tnot']=20;
$_SESSION['ncol2']=16;
$_SESSION['nsli']=5;
$_SESSION['npsli']=2;
$_SESSION['nads']=5;
$_SESSION['dirtem']=get_template_directory_uri().'/';
$_SESSION['dircat']=get_site_url().'/temas/';
$_SESSION['no_idcathome']=array(-1,-9,-12);
$_SESSION['no_idcatcol2']=array(-12,-9);
$_SESSION['arridpost']=array();
?>
<script>
if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET","<?php echo $_SESSION['dirtem']; ?>swid.php?s="+screen.width,true);
    xmlhttp.send();
</script>
<?php
$_SESSION['wid']=$_SESSION['screen']['width'];
?>

