<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body{
            background-image: url(UNEP\ SPP\ Banner\ 3.5\ mb.jpg);
            background-size: cover;
        }
        .logindiv {
            background-color: lavender;
            display:flex;
            flex-flow: row wrap;
            align-items: center;
            margin-top: 6em;
            margin-left: 7em;
            margin-right:11em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px lightblue;
        }
        .logindiv h1{
            font-size: 40px;
        }
        .logindiv label{
            font-size:18px;
        }
        
        .elmt{
            vertical-align: middle;
            width: 30%;
            margin: 5px 10px 5px 0;
            padding: 10px;
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
    <div>
        <form method="POST" class="logindiv">
        <h1 style="width: 100%;">Register</h1>
            <div class="elmt">
                <label for="Fullname" class="form-label">Full Name:</label><br>
                <input id="Fullname" type="text" placeholder="Name" class="form-control" name="Fullname" required>
            </div>
            <div class="elmt">
            <label for="emailid" class="form-label">Email ID:</label><br>
            <input id="emailid" type="email" placeholder="Email ID" class="form-control" name="emailid" required>
            </div>
            <div class="elmt">
            <label for="password" class="form-label">Password:</label><br>
            <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
            </div>
            <div class="elmt">
            <label for="cpassword" class="form-label">Confirm Password:</label><br>
            <input id="cpassword" type="text" placeholder="Confirm" class="form-control" name="cpassword" required>
            </div>
            <div class="elmt">
            <label for="exp" class="form-label">Experience in tenders:</label><br>
            <input id="exp" type="text" placeholder="Experience in years" class="form-control" name="exp" required>
            </div>
            <div class="elmt">
            <label for="ptender" class="form-label">Previous tenders name:</label><br>
            <input id="ptender" type="text" placeholder="Previous tender name" class="form-control" name="ptender" required>
            </div>
            <div class="elmt">
            <label for="pan" class="form-label">PAN Card number:</label><br>
            <input id="pan" type="text" placeholder="XXXXX0000X" class="form-control" name="pan" required>
            </div>
            <div class="elmt">
            <label for="amount" class="form-label">Total cost of assets</label><br>
            <input id="amount" type="number" placeholder="In rupees" class="form-control" name="amount" required>
            </div>
            <!-- <label for="assetst" class="form-label">Type of assets:</label>
            <form>
                Land<input type="checkbox" name="Land" value="Land" id="assetst"><br>
                House<input type="checkbox" name="House" value="House" id="assetst"><br>
                Shares<input type="checkbox" name="Shares" value="Shares" id="assetst"><br>
                Bank Balance<input type="checkbox" name="Bank balance" value="Bank Balance" id="assetst"><br>
                Jewelery<input type="checkbox" name="Jewelery" value="Jewelery" id="assetst"><br>
                Vehicles<input type="checkbox" name="Vehicles" value="Vehicles" id="assetst"><br>
            </form> -->
            <!-- <select id="assetst">
                <option value="Land">Land</option>
                <option value="House">House</option>
                <option value="shares">Shares</option>
                <option value="Bank balance">Bank balance</option>
                <option value="Jewelery">Jewelery</option>
                <option value="Vehicles">Vehicles</option>
            </select><br><br> -->
            <!-- <a href="index.html"><button id="submit" type="submit">Register</button></a> -->
            <input type="submit" class="btn btn-primary" name="submit" style="vertical-align: middle; margin-left:100px; margin-top:20px;"><br>
            <p style="width: 50%;">Existing User?<a href="login.php">Login</a></p>
            
        </form>
    </div>
</body>
</html>