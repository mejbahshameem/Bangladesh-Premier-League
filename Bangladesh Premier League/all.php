<!DOCTYPE html>
<html>
    <head>
    </head>
<link rel="stylesheet" type="text/css" href="styl.css" />
	<body>

<?php
if(isset($_POST['insert'])) {
    
    $name = $_POST['name'];
    $jersey = $_POST['jersey'];
	$country = $_POST['country'];
	$team = $_POST['team'];
	$age= $_POST['age'];
	$role = $_POST['role'];
	$match = $_POST['match'];
	$run= $_POST['run'];
	$wicket = $_POST['wicket'];
	
    require 'connect.php';

    $sql="INSERT INTO `players`(`player_name`, `jersey_no`, `country`,`team`, `age`, `role`, `matches`, `runs`, `wickets`) VALUES ('$name','$jersey','$country','$team','$age','$role','$match','$run','$wicket')";
	
	mysql_query($sql,$con);
	mysql_close($con);
	echo 'Data INSERTED Successfully.';
};
if(isset($_POST['cinsert'])) {
    
    $tid1 = $_POST['tid'];
    $tname1 = $_POST['tname'];
	$pid1 = $_POST['pid'];
	$pname1= $_POST['pname'];
	
    require 'connect.php';

    $sql="INSERT INTO `captain`(`team_id`, `team_name`, `player_id`, `player_name`) VALUES ('$tid1','$tname1','$pid1','$pname1')";
	
	mysql_query($sql,$con);
	mysql_close($con);
	echo 'Data INSERTED Successfully.';
};
if(isset($_POST['sinsert'])) {
    
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
	$t3 = $_POST['fi'];
	$t4= $_POST['si'];
	$t5 = $_POST['dt'];
    $t6 = $_POST['wn'];
	$t7 = $_POST['rs'];
	$t8= $_POST['tw'];
	$t9= $_POST['dc'];
	
    require 'connect.php';

    $sql="INSERT INTO `summary`(`team1`, `team2`, `first_innings_score`, `second_innings_score`, `date`, `winner`, `result`, `toss_winner`, `decision`) VALUES ('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9')";
	
	mysql_query($sql,$con);
	mysql_close($con);
	echo 'Data INSERTED Successfully.';
};
if(isset($_POST['tinsert'])) {
    
    $tid1 = $_POST['tid'];
    $tname1 = $_POST['tname'];
	$pid1 = $_POST['sp'];
	$pname1= $_POST['ow'];
	$wo1= $_POST['wo'];
	
    require 'connect.php';

    $sql="INSERT INTO `teams`(`team_id`, `team_name`, `sponsors`, `owner`, `worth`) VALUES ('$tid1','$tname1','$pid1','$pname1','$wo1')";
	
	mysql_query($sql,$con);
	mysql_close($con);
	echo 'Data INSERTED Successfully.';
};

if(isset($_POST['binsert'])) {
    
    //$tid1 = $_POST['pid'];
    $tname1 = $_POST['tname'];
	$pid1 = $_POST['pname'];
	$pname1= $_POST['mt'];
	$wo1= $_POST['rs'];
	$his= $_POST['highestscore'];
	
    require 'connect.php';

    $sql="INSERT INTO `batting_perfomance`(`team_name`, `player_name`, `matches`, `runs`,`highest_scores`) VALUES ('$tname1','$pid1','$pname1','$wo1','$his')";
	
	mysql_query($sql,$con);
	mysql_close($con);
	echo 'Data INSERTED Successfully.';
};
if(isset($_POST['bwinsert'])) {
    
   // $tid1 = $_POST['pid'];
    $tname1 = $_POST['tname'];
	$pid1 = $_POST['pname'];
	$pname1= $_POST['mt'];
	$wo1= $_POST['ws'];
	
	
    require 'connect.php';

    $sql="INSERT INTO `bowling_perfomance`(`team_name`, `player_name`, `matches`, `wicket`) VALUES ('$tname1','$pid1','$pname1','$wo1')";
	
	mysql_query($sql,$con);
	mysql_close($con);
	echo 'Data INSERTED Successfully.';
};
if(isset($_POST['update'])){
    require 'connect.php';
    $up_query = "UPDATE players SET player_name = '$_POST[pname]', jersey_no = '$_POST[jsn]', country = '$_POST[cty]',team = '$_POST[team]', age = '$_POST[ag]', role = '$_POST[rl]', matches = '$_POST[mc]', runs = '$_POST[rn]', wickets = '$_POST[wc]' WHERE player_id = '$_POST[hidden]' " ;
	mysql_query($up_query,$con);
	mysql_close($con);
	echo 'Data UPDATED Successfully.';
};

if(isset($_POST['cupdate'])){
    require 'connect.php';
    $up_query = " UPDATE `captain` SET `player_id`='$_POST[p_id]',`team_name`='$_POST[tname]',`player_name`='$_POST[pname]' WHERE player_id = '$_POST[hidden]' " ;
	mysql_query($up_query,$con);
	mysql_close($con);
	echo 'Data UPDATED Successfully.';
};
if(isset($_POST['userupdate'])){
    require 'connect.php';
    $up_query = " UPDATE `users` SET `user_name`='$_POST[username]',`email`='$_POST[email]',`password`='$_POST[password]',`fav_team`='$_POST[fav_team]' WHERE user_id = '$_POST[hidden]'  " ;
	mysql_query($up_query,$con);
	mysql_close($con);
  header("Location: usercrud.php");
};
if(isset($_POST['bupdate'])){
    require 'connect.php';
    $up_query = " UPDATE `batting_perfomance` SET `team_name`='$_POST[tname]',`player_name`='$_POST[pname]',`matches`='$_POST[mt]',`runs`='$_POST[rs]',`highest_scores`='$_POST[highestscore]' WHERE player_id = '$_POST[hidden]'  " ;
	mysql_query($up_query,$con);
	mysql_close($con);
	echo 'Data UPDATED Successfully.';
};
if(isset($_POST['livescore'])){
    require 'connect.php';
    $up_query = " UPDATE `live_score` SET `team1bat`='$_POST[t1run]',`team1bowl`='$_POST[t1bowl]',`team2bat`='$_POST[t2run]',`team2bowl`='$_POST[t2bowl]' WHERE match_id = '$_POST[hidden]'  " ;
	mysql_query($up_query,$con);
	mysql_close($con);
	header("Location: livescore.php");
};
if(isset($_POST['bwupdate'])){
    require 'connect.php';
    $up_query = " UPDATE `bowling_perfomance` SET `team_name`='$_POST[tname]',`player_name`='$_POST[pname]',`matches`='$_POST[mt]',`wicket`='$_POST[rs]' WHERE player_id = '$_POST[hidden]'  " ;
	mysql_query($up_query,$con);
	mysql_close($con);
	echo 'Data UPDATED Successfully.';
};
if(isset($_POST['tupdate'])){
    require 'connect.php';
    $up_query = "UPDATE `teams` SET `team_id`='$_POST[tid]',`team_name`='$_POST[tname]',`sponsors`='$_POST[sp]',`owner`='$_POST[ow]',`worth`='$_POST[wo]' WHERE team_id = '$_POST[tid]' " ;
	mysql_query($up_query,$con);
	mysql_close($con);
	echo 'Data UPDATED Successfully.';
};
if(isset($_POST['delete'])){
	$a=$_POST['hidden'];
	
    require 'connect.php';
    $del_query = "DELETE FROM  `players` WHERE player_id = '$_POST[hidden]' " ;
	mysql_query($del_query,$con);
	mysql_close($con);
	
	echo 'Data DELETED Successfully.';
};
if(isset($_POST['delete1'])){
    require 'connect.php';
    $del_query = "DELETE FROM captain WHERE player_id = '$_POST[hidden]' " ;
	mysql_query($del_query,$con);
	mysql_close($con);
	echo 'Data DELETED Successfully.';
};
if(isset($_POST['tdelete'])){
    require 'connect.php';
    $del_query = "DELETE FROM teams WHERE team_id = '$_POST[hidden]' " ;
	mysql_query($del_query,$con);
	mysql_close($con);
	echo 'Data DELETED Successfully.';
};
if(isset($_POST['bdelete'])){
    require 'connect.php';
    $del_query = "DELETE FROM batting_perfomance WHERE player_id = '$_POST[hidden]' " ;
	mysql_query($del_query,$con);
	mysql_close($con);
	echo 'Data DELETED Successfully.';
};
if(isset($_POST['bwdelete'])){
    require 'connect.php';
    $del_query = "DELETE FROM bowling_perfomance WHERE player_id = '$_POST[hidden]' " ;
	mysql_query($del_query,$con);
	mysql_close($con);
	echo 'Data DELETED Successfully.';
};
if(isset($_POST['userdelete'])){
    require 'connect.php';
    $del_query = "DELETE FROM users WHERE user_id = '$_POST[hidden]' " ;
	mysql_query($del_query,$con);
	mysql_close($con);
	  header("Location: logout.php");
};
?>
</br> </br>
<a href="table.html" >Home</a> 
</body>
</html>