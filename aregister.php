<?php include "header.php"?>
    <div class="sidenav">
        <h1> Admin page</h1>
        <a href="index.php">Active tenders</a><br>
        <a href="post.php ">Post new tender</a><br>
        <a href="delete.php">Delete tender</a><br>
        <a href="#" style="background-color:deeppink">Add new Admin</a><br>
        <a href="applied.php">Applied contractors</a><br>
    </div>
    <div class="main">
        <h1>Add admin</h1>
        <form method="POST">
            <label for="Fullname" class="form-label">Full Name:</label>
            <input id="Fullname" type="text" placeholder="Name" class="form-control" name="Fullname"><br><br>
            <label for="empid" class="form-label">Employee ID:</label>
            <input id="empid" type="text" placeholder="emp_id" class="form-control" name="empid"><br><br>
            <label for="emailid" class="form-label">Email ID:</label>
            <input id="emailid" type="email" placeholder="Email ID" class="form-control" name="emailid"><br><br>
            <label for="password" class="form-label">Password:</label>
            <input id="password" type="password" placeholder="Password" class="form-control" name="password"><br><br>
            <input type="submit" class="btn btn-primary" name="aregister">
        </form>
    </div>
</body>
</html>





































