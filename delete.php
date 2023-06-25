<?php include "header.php"?>
    <div class="sidenav">
        <h1> Admin page</h1>
        <a href="index.php">Active tenders</a><br>
        <a href="post.php ">Post new tender</a><br>
        <a href="#" style="background-color:deeppink">Delete tender</a><br>
        <a href="aregister.php">Add new Admin</a><br>
        <a href="applied.php">Applied contractors</a><br>
    </div>
    <div class="main">
        <h1>Delete tender</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#ID</th>
            <th scope="col">Tender Name</th>
            <th scope="col">Department</th>
            <th scope="col">Estimated cost</th>
            <th scope="col">Location</th>
            <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql="SELECT `id`,`name`,`department`,`estimated_cost`,`location`,`description` FROM tenders";
            $result=mysqli_query($conn,$sql);
            if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                echo'
                <tr>
                <td>'.$rows['id'].'</td>
                <td>'.$rows['name'].'</td>
                <td>'.$rows['department'].'</td>
                <td>'.$rows['estimated_cost'].'</td>
                <td>'.$rows['location'].'</td>
                <td>'.$rows['description'].'</td>
                </tr>';
            }
            }
            else{
            echo"";
            }
            ?>
        </tbody>
        </table>
        <h3>Enter tender ID to delete</h3>
        <form method="POST">
        <input id="sno" type="number" placeholder="ID" name="sno"><br>
        <input class="btn btn-primary" name="del" type="submit">
        </form>
    </div>
</body>
</html>