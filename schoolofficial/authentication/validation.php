<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected with database<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['fname'])) {
        $name = $_POST['fname'];

        $stmt = $conn->prepare("INSERT INTO users (fname) VALUES (?)");
        $stmt->bind_param("s", $name);
        $result = $stmt->execute();

        if ($result) {
            echo "Added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Name field is missing.";
    }
}

$conn->close();
?>

<?php
$hostname = "localhost";
$email = "root";
$dbname = "login";
$password = "";

$conn = mysqli_connect($hostname,$email,$password,$dbname);
if($conn) {
    echo "Connection With database";
}else{
    die("Connection is failed:" . mysqli_connect_error());
}
// get value from users

$email = $_POST['email'];
$sql = "INSERT INTO user (email) VALUES ('$email')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Added Successfully";
}
?>