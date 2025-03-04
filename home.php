<?php
include 'connection.php';
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       h6{
        color: brown;
        border-top: 0px;
        font-size: 30px;

       }
       .content{
        font-size: 20px;
        display:flex;
        gap: 20px;
        border-radius: 30px;
    position: left;

       }
       .content h6{
        font-size: 40px;
        direction: bottom;
    
       }
       .content h1{
        background-color: coral;
        display: inline;
       }
       .content a{
        font-size: 30px;
        color: black;
       
       }
       .color{
        background-color: chocolate;
        border-radius: 30px;
       }
       center{
        font-size: 60px;
        color: black;
       }
            </style>
</head>
<body>
    <div class="content">
    <h6>welcome on my home pages</h6>
    <a href="add.php">addproduct</a>
    <a href="select.php">list of product</a>
    <a href="logout.php">logout</a>
</div>
<center><p>welcome on my web site</p></center>
<div class="color">
   
 <h1>
        TF you are ready to create website join my website 
    <a href="sinup.php">click here</a></h1>
   
   
   
</div>
</body>
</html>