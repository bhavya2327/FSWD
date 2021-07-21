<<<<<<< HEAD
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'vdp';
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
=======
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'vdp';
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
>>>>>>> 83e028d79549818bbadfae856787677adad9863c
?>