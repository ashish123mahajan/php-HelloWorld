 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$id=$_REQUEST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM person where id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo"<table><tr><th>ID</th><th>Name</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
        echo"<tr><td>". $row["id"]."</td><td>". $row["name"]."</td></tr>";
    }
    echo"</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 