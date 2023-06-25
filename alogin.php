<?php include 'config.php';?>
<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <title>Admin Login</title>
    <style>
        body{
            background-image: url(UNEP\ SPP\ Banner\ 3.5\ mb.jpg);
            background-size: cover;
        }
        .logindiv {
            background-color: lavender;
            margin-top: 11em;
            margin-left: 7em;
            margin-right:54em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px lightblue;
        }
        .logindiv h1{
            font-size: 40px;
        }
        .logindiv label{
            font-size:25px;
        }
        .logindiv input[type="text"]
        .logindiv input[type="text"]{
            height: 20px;
            width: 250px;
        }
        .header{
            height: 60px;
            width: 100%;
            position: fixed;
            background-color:turquoise;
            padding-left: 10px;
            top: 0;
            left: 0;
        }
        .header h1{
            margin-top: 10px;
            font-family: "Audiowide", sans-serif;
        }
        
    </style>
</head>
<body>
    <div class="header">
        <h1>E-procurements</h1>
    </div>
    <div class='logindiv'>
        <h1>Admin Login</h1>
        <form method="POST" class="login">
            <label for="emailid">Email:</label><br>
            <input id="emailid" type="text" placeholder="Email ID" name="email" required><br><br>
            <label for="password">Password:</label><br>
            <input id="password" type="password" placeholder="Password" name="password" required><br><br>
            <input type="submit" name="alogin" class="btn btn-primary" id='btn'><br>
            <p>User login? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>