<?php include "header.php"?>
    <div class="sidenav">
        <h1>Admin page</h1>
        <a href="index.php">Active tenders</a><br>
        <a href="post.php">Post new tender</a><br>
        <a href="delete.php">Delete tender</a><br>
        <a href="aregister.php">Add new Admin</a><br>
        <a href="#" style="background-color:deeppink">Applied contractors</a><br>
    </div>
    <div class="main">
        <h1>Applied contractors</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#S.No</th>
            <th scope="id">Tender ID</th>
            <th scope="col">email</th>
            <th scope="col">Estimated time</th>
            <th scope="col">Estimated amount</th>
            <th scope="col">Start date</th>
            <th scope="col">End date</th>
            </tr>
        </thead>
        <tbody>
        <?php
            //$sql="SELECT `tenderid`,`email`,`estamount`,`startdate`,`enddate`,`esttime` FROM apply";
            // $result=mysqli_query($conn,$sql);
            // $i=0;
            // if($result->num_rows>0){
            // while($rows=$result->fetch_assoc()){
            //     echo'
            //     <tr> 
            //     <td>'.++$i.'</td>
            //     <td>'.$rows['tenderid'].'</td>
            //     <td>'.$rows['email'].'</td>
            //     <td>'.$rows['esttime'].'</td>
            //     <td>'.$rows['estamount'].'</td>
            //     <td>'.$rows['startdate'].'</td>
            //     <td>'.$rows['enddate'].'</td>
            //     </tr>';
            // }
            // }
            // else{
            // echo"";
            // }
        ?>
        <?php 
        $query="SELECT `tenderid` FROM apply";
        $result = mysqli_query($conn, $query);

        // Fetch the column data and store it in a PHP array
        $columnData = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $columnData[] = $row['tenderid'];
            }
        }
        $uniqueSet = array_unique($columnData); 
        foreach ($uniqueSet as $col) {
            $sql = "SELECT * FROM apply WHERE `tenderid`='$col' ORDER BY `estamount`";
            $result=mysqli_query($conn,$sql);
            $j=0;
            echo '<tr>
            <td style="border:0px; padding: 8px;"></td>
            <td style="border:0px; padding: 8px;"></td>
            <td style="border:0px; padding: 8px;"></td>
            <td style="background-color:aquamarine;
            color: #333;
            font-weight: bold;
            padding: 10px; border:0px;">Tender ID:'.$col.'</td>
            <td style="border:0px; padding: 8px;"></td>
            <td style="border:0px; padding: 8px;"></td>
            <td style="border:0px; padding: 8px;"></td>
          </tr>';
            if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                echo'
                <tr>
                <td>'.++$j.'</td>
                <td>'.$rows['tenderid'].'</td>
                <td>'.$rows['email'].'</td>
                <td>'.$rows['esttime'].'</td>
                <td>'.$rows['estamount'].'</td>
                <td>'.$rows['startdate'].'</td>
                <td>'.$rows['enddate'].'</td>
                </tr>';
            }
            }
            else{
            echo "\n";
            }
        }
        ?>
        </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.onload=function(){
            const arr=<?php echo json_encode($columnData);?>;
            let ms=new Set();
            for(var i in arr)
            {
                ms.add(arr[i]);
                console.log(ms);
            }
            
        }
    </script>
</body>
</html>