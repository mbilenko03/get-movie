<?php
include("login.php");
$title = $_GET['title'];
$sql = "Select * from movies where title='$title'";
$results = mysql_query($sql);
if($results)
{
    while($row=mysql_fetch_assoc($results))
        {
        echo $row['title'] . ':' . $row['year'];  
        }
}else
{
  echo "error";  
}
?>


