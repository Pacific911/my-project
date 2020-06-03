<?php
    mysql_connect('localhost','root','');
    mysql_select_db('job_link');
    session_start();

if(isset($_SESSION['log'])){
switch ($_SESSION['type']) {

  case 'employee':
  header("location:job-search.php");
    break;

  case 'admin':
  header("location:job-category.php");
    break;
}
}
else{
if(isset($_POST['sub'])){
$a=mysql_real_escape_string($_POST['email']);
$b=mysql_real_escape_string($_POST['password']);
$sql1="select * from applicants where email='$a'and password='$b' where category='employee' ";
$sql2="select * from admin where email='$a' and password='$b' where category='admin'";
$result=mysql_query($sql1);
  if(mysql_num_rows($result)>0){
    $v=mysql_fetch_array($result);
    $id=$v['id'];
    $_SESSION['log']=$id;
    $_SESSION['type']="employee";
    header("location:job-search.php");
  }
  else{
    $result=mysql_query($sql2);
    if(mysql_num_rows($result)>0){
      $v=mysql_fetch_array($result);
    $id=$v['id'];
    $_SESSION['log']=$id;
    $_SESSION['type']="admin";
    header("location:job-category.php");
  }

  else{
  echo"<script type='TEXT/javascript'>alert('incorrect data');</script>";
  }
  }
}
}
}


?>
