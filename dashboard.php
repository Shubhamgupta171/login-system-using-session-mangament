<?php
session_start(); //  here start the session..
include "header.php";

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit(); // Exit to prevent further execution
}
include "database_connection.php"; 
// Fetch all user data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
}
?>
<div class="container col-12 border rounded mt-3">
    <h1 class="mt-3 text-center"> <?php echo "Welcome this is  ". $_SESSION['name'].  "  dashboard!" ;?> </h1>
   
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Display user's own data
            echo "<tr>";
            echo "<td>" . $_SESSION['id'] . "</td>";
            echo "<td>" . $_SESSION['name'] . "</td>";
            echo "<td>" . $_SESSION['email'] . "</td>";
            echo "</tr>";

            // Loop through each row in the result set and display other user data
            while ($row = mysqli_fetch_assoc($result)) {
                // Skip displaying own data again
                if ($row['id'] == $_SESSION['id']) {
                    continue;
                }
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <form action="" method="post">
        <button type="submit" name='signout' class="btn btn-warning mb-3">Sign Out</button>
    </form>
</div>
<?php include "footer.php"; ?>
<?php
if (isset($_POST['signout']))
 {
    session_destroy(); // here destroys  our session ..
    header('location: index.php');
    exit(); // to stop further execution
}
?>