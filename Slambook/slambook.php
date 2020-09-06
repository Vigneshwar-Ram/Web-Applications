<?php
$link = mysqli_connect("localhost", "root", "", "slambook");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$pname = mysqli_real_escape_string($link, $_REQUEST['pname']);
$nname = mysqli_real_escape_string($link, $_REQUEST['nname']);


$cname = mysqli_real_escape_string($link, $_REQUEST['cname']);
$bname = mysqli_real_escape_string($link, $_REQUEST['bname']);
$sname = mysqli_real_escape_string($link, $_REQUEST['sname']);


$bfname = mysqli_real_escape_string($link, $_REQUEST['bfname']);
$fcfname = mysqli_real_escape_string($link, $_REQUEST['fcfname']);
$how = mysqli_real_escape_string($link, $_REQUEST['how']);



$dn = mysqli_real_escape_string($link, $_REQUEST['dn']);
$land = mysqli_real_escape_string($link, $_REQUEST['land']);
$town = mysqli_real_escape_string($link, $_REQUEST['town']);


$dist = mysqli_real_escape_string($link, $_REQUEST['name']);
$state = mysqli_real_escape_string($link, $_REQUEST['name']);
$coun = mysqli_real_escape_string($link, $_REQUEST['name']);



$post = mysqli_real_escape_string($link, $_REQUEST['post']);
$tow = mysqli_real_escape_string($link, $_REQUEST['tow']);


$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$fb = mysqli_real_escape_string($link, $_REQUEST['fb']);
$insta = mysqli_real_escape_string($link, $_REQUEST['insta']);


$mob = mysqli_real_escape_string($link, $_REQUEST['mob']);
$llnum = mysqli_real_escape_string($link, $_REQUEST['llnum']);
$secnum = mysqli_real_escape_string($link, $_REQUEST['secnum']);


$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$zod = mysqli_real_escape_string($link, $_REQUEST['zod']);
$secret = mysqli_real_escape_string($link, $_REQUEST['secret']);


$fcolor = mysqli_real_escape_string($link, $_REQUEST['fcolor']);
$fdress = mysqli_real_escape_string($link, $_REQUEST['fdress']);
$fmusic = mysqli_real_escape_string($link, $_REQUEST['fmusic']);


$fgame = mysqli_real_escape_string($link, $_REQUEST['fgame']);
$fdish = mysqli_real_escape_string($link, $_REQUEST['fdish']);
$fbook = mysqli_real_escape_string($link, $_REQUEST['fbook']);


$factor = mysqli_real_escape_string($link, $_REQUEST['factor']);
$fsperson = mysqli_real_escape_string($link, $_REQUEST['fsperson']);
$mint = mysqli_real_escape_string($link, $_REQUEST['mint']);


$like = mysqli_real_escape_string($link, $_REQUEST['like']);
$fun = mysqli_real_escape_string($link, $_REQUEST['fun']);


$dldish = mysqli_real_escape_string($link, $_REQUEST['dldish']);
$dlthing = mysqli_real_escape_string($link, $_REQUEST['dlthing']);
$cthing = mysqli_real_escape_string($link, $_REQUEST['cthing']);


$aodl = mysqli_real_escape_string($link, $_REQUEST['aodl']);

$lonme = mysqli_real_escape_string($link, $_REQUEST['lonme']);
$dlom = mysqli_real_escape_string($link, $_REQUEST['dlom']);
$remmon= mysqli_real_escape_string($link, $_REQUEST['remmon']);


$sug = mysqli_real_escape_string($link, $_REQUEST['sug']);
$und = mysqli_real_escape_string($link, $_REQUEST['und']);
$fmeet = mysqli_real_escape_string($link, $_REQUEST['fmeet']);


$amb = mysqli_real_escape_string($link, $_REQUEST['amb']);
$insp = mysqli_real_escape_string($link, $_REQUEST['insp']);
$rolmod = mysqli_real_escape_string($link, $_REQUEST['rolmod']);


$abt = mysqli_real_escape_string($link, $_REQUEST['abt']);


$sql = "INSERT INTO slam (name,pname,nname,cname,bname,ssname,bfname,fcfname,how,dn,land,town,dist,state,coun,post,tow,email,fb,insta,mob,llnum,secnumber,dob,zod,secret,fcolor,fdress,fmusic,fgame,fdish,fbook,factor,fsperson,mint,like,fun,dldish,dlthing,cthing,aodl,loname,dlom,remmon,sug,und,fmeet, amb,insp,rolmod,abt) VALUES ('$name', '$pname','$nname','$cname','$bname','$ssname','$bfname','$fcfname','$how','$dn','$land','$town','$dist','$state','$coun','$post','$tow','$email','$fb','$insta','$mob','$llnum','$secnumber','$dob','$zod','$secret','$fcolor','$fdress','$fmusic','$fgame','$fdish','$fbook','$factor','$fsperson','$mint','$like','$fun','$dldish','$dlthing','$cthing','$aodl','$lonme','$dlom','$remmon','$sug','$und','$fmeet','$amb','$insp','$rolmod','$'abt,)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>