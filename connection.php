<?php
$conn=mysqli_connect('localhost','root','','shop');
if($conn){
    echo "
    <script>
    alert('connected failed');
    window.location.herf:home.php;
    </script>
    ";
  }
else{
    echo "
    <script>
    alert('faile');
    window.location.herf:home.php;
    </script>
    ";
  }
?>