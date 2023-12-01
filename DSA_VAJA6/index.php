<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool PHP Index</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #3498db;
            padding: 1em;
            text-align: center;
            color: white;
            font-size: 1.5em;
        }

        nav {
            background-color: #2c3e50;
            padding: 0.5em;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 1em;
            margin: 0 0.5em;
            font-weight: bold;
        }

        section {
            padding: 2em;
            text-align: center;
        }

        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>24 LIITROOU</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">LOGIN</a>
        <a href="logout.php">LOGout</a>
       
    </nav>
   
    <section>
    <div id="rainbow">
  <div id="red"></div>
  <div id="orange"></div>
  <div id="yellow"></div>
  <div id="green"></div>
  <div id="blue"></div>
  <div class="purple"></div>
</div>
<div id="img">
  <img id="cat" src="http://www.nyan.cat/cats/original.gif" />
</div>
<iframe width=0  height=0 src="https://www.youtube.com/embed/QH2-TGUlwu4?autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
    
    <?php

    if (isset($_SESSION['prijavljen']) && $_SESSION['prijavljen']==true){
        echo  "<h1> BNČ al si že prjavljen.</h1>";
    }

    else{
        if (isset($_POST['username'])&& isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($password == '24litrou'&& $username == 'bnč') {
                    // Successful login
                    echo "<h1>Login successful! Welcome, $username.</h1>";
                    $_SESSION['prijavljen'] = true;
                } 
            else {
                // Incorrect password
                echo  "<h1> EEEE TI PA NISI BNČ, ne se hecat $username</h1>"; 
            }
        } 
    }
?>
</section>

    <footer>
        &copy; <?php 
        echo date("Y"); 
        $ime = "DR Slon";
        echo " To je $ime stran.";

        ?>
