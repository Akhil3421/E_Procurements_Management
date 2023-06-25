<?php include "header.php"?>
    <div class="sidenav">
        <h1> Admin page</h1>
        <a href="#" style="background-color:deeppink">Active tenders</a><br>
        <a href="post.php">Post new tender</a><br>
        <a href="delete.php">Delete tender</a><br>
        <a href="aregister.php">Add new Admin</a><br>
        <a href="applied.php">Applied contractors</a><br>
    </div>
    <div class="main">
        <h1>Active tenders</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#S.No</th>
            <th scope="id">ID</th>
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
            $i=0;
            if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                echo'
                <tr>
                <td>'.++$i.'</td>
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
    </div>
</body>
</html>