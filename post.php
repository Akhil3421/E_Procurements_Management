<?php include "header.php"?>
    <div class="sidenav">
        <h1> Admin page</h1>
        <a href="index.php">Active tenders</a><br>
        <a href="#" style="background-color:deeppink">Post new tender</a><br>
        <a href="delete.php">Delete tender</a><br>
        <a href="aregister.php">Add new Admin</a><br>
        <a href="applied.php">Applied contractors</a><br>
    </div>
    <div class="main">
        <h1>Post new tender</h1>
        <h3>Enter tender details to add</h3>
        <form method="POST">
            <label for="name" class="form-label">Name of the tender:</label>
            <input id="name" type="text" placeholder="Name" class="form-control" name="name" required><br><br>
            <label for="department" class="form-label">Department:</label>
            <input id="department" type="text" placeholder="ex: Department of education-telangana" class="form-control" name="department" required><br><br>
            <label for="estimatedcost" class="form-label">Estimated cost:</label>
            <input id="ecost" type="number" placeholder="In rupees" class="form-control" name="ecost" required><br><br>
            <label for="location" class="form-label">Location:</label>
            <input id="location" type="text" placeholder="With pincode" class="form-control" name="location" required><br><br>
            <label for="desc" class="form-label">Description:</label>
            <!-- <input id="desc" type="textarea" placeholder="In 250 words" class="form-control" name="desc"><br><br> -->
            <textarea rows="6" cols="33" name="desc" id="desc" placeholder="Description in 250 words" required></textarea>
            <input type="submit" class="btn btn-primary" name="post">
        </form>
    </div>
</body>
</html>