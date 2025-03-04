
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
         form{
            background-color: orange;
            width: 400px;
            height: 400px;
            border-radius: 20px;
         }
         input{
            background: transparent;
            border-left: 0px;
            border-right: 0px;
            border-top: 0px;
            border-bottom: 2px solid black;
         }
         button{
            width: 40%;
            height: 30px;
            color: black;
            background-color: blue;
            border-radius: 23px;
           

         }
         h6{
            color: darkgreen;
            font-size: 20px;
         }
          

            </style>
        </head>
        <body>
            <center>
                <form action="" method="post" autocomplete="off">
                <h2>welcome on my login</h2>
                <label>e_mail:<br><input type="email" name="email" placeholder="type email" required></label><br><br>
            <label>password:<br><input type="password" name="password" placeholder="type password" required></label><br><br>
                <button type="submit" name="login">login</button>
                <h6>IF don,t have acount <a href="sinup.php" style="width: 40px; height: 60px; font-size: 20px;" >❎</a></h6>
            </form>
            </center>
        </body>
        </html>
       <?php 
        include "connection.php";
        session_start();
        if(isset($_POST)){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sql=mysqli_query($conn,"INSERT INTO adimn() VALUES(NULL,'$email','$password')");
        }
          if($sql == true){
            echo "inserted";
            header('location:home.php');
          }
            
        else{
            echo "<h1failed to insrted<h1>";
            
        }
        
        
        ?>
       