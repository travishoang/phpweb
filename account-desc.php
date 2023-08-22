<?php
require("connect.php");
?>
<div class="headertop_desc">
    <div class="call">
        <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
    </div>
    <div class="account_desc">
        <ul>
            <?php
        $servername = "localhost";
$database = "banhang";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT Name FROM account_desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// Load dữ liệu lên website

while($row = $result->fetch_assoc()) {
    echo '<li>'.'<a href="#">' . $row["Name"] . '</a>'.'</li>';
}
} else {
echo "0 results";
}
$conn->close();

?>
            <!-- run -->
        </ul>
    </div>
    <div class="clear"></div>
</div>