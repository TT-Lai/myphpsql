<?php 
  include('db.php'); 
  session_start(); 
  $no = $_GET['no']; 
  $sql = "delete from guestbook where no='$no'"; 
  $name = $_SESSION['name']; 
  mysqli_query($conn, $sql); 
  if (!mysqli_query($conn, $sql)) { 
    die(mysqli_error($conn)); 
  } else
   { 
    echo " 
           <script> 
              setTimeout(function(){window.location.href='view.php?name=" . $name . "&no=" . $no . "';},300); 
          </script>"; 
   
  } 
   ?>