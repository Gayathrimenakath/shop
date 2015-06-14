
<?php
$servername = "localhost";
$username = "root";
$password = "gayumenakath";
$db = "shoppingcart";
$uid = $_POST['ID']; 
$u= $_POST['username']; // gather all the variables
$p = $_POST['password'];
$email = $_POST['email'];
$mobile =$_POST['mobile'];
$sex = $_POST['sex']; // added batch id
echo "working";
//connect

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Conected successfully<br>";
//selection
$sql = "SELECT * FROM shop";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row['Username'];
    }
} else {
    echo "0 results";
}
//Sending form data to sql db
$query ="INSERT INTO shop (uid,Username,Password,email,mobile,sex)VALUES ('$uid', '$u','$p','$email','$mobile','$sex')";

//insert and close.
mysqli_query($conn, $query);
mysqli_close($conn);
?>
