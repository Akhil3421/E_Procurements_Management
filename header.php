<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <title>Procurements</title>
    <style>
        body{
            background-color:burlywood;
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden; 
        }
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 6px;
        }
        .header{
            height: 60px;
            width: 50%;
            position: fixed;
            background-color: yellowgreen;
            padding-left: 10px;
            top: 0;
            left: 0;
        }
        .header h1{
            margin-top: 10px;
            font-family: "Audiowide", sans-serif;
        }
        .sidenav{
            height: 100%;
            width: 200px;
            position:fixed;
            z-index: 1;
            top: 60px;
            left: 0;
            background-color: orange;
            overflow-x: hidden;
            padding-top: 20px;
        }
        .main{
            margin-left: 220px;
            padding: 0px 0px;
        }
        .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 20px;
        color: blue;
        display: block;
        }
        .sidenav h1 {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 25px;
        color:purple;
        display: block;
        }
        .header3 h3{
            height: 45px;
            float:left;
            width: 25%;
            background-color: yellowgreen;
            text-align:right;
            padding-top: 15px;
            margin-top: 0;
            margin-left: 50%;
            position: fixed;
            top:0;
            padding-left: 180px;
            font-style:oblique;
        }
        .header3{
            background-color: yellowgreen;
            padding-bottom: 20px;
            height: 40px;
        }
        .header3 button {
        width:100px;
        margin-left: 90%;
        margin-top:10px;
        font-size: 18px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: red;
        border: none;
        border-radius: 15px;
        box-shadow: 0 6px #999;
        }

        .header3 button:hover {background-color: darkred}

        .header3 button:active {
        background-color: darkmagenta;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>E-procurements</h1>
    </div>
    <div class="header3">
        <h3>
            <?php
                $uemail=$_SESSION['var1'];
                echo $uemail;
            ?>
        </h3>
        <button onclick="location.href='alogin.php'">Logout</button>
    </div>