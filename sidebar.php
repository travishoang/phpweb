<!-- Tham Khảo -->
<!-- <?php
        // $Categories = array(
        //     'Mobile Phones',
        //     'Desktop',
        //     'Laptop',
        //     'Accessories',
        //     'Software',
        //     'Sports & Fitness',
        //     'Footwear',
        //     'Jewellery',
        //     'Clothing',
        //     'Home Decor & Kitchen',
        //     'Beauty & Healthcare',
        //     'Toys, Kids & Babies'
        // );
        // for($i=0;$i<count($Categories);$i++)
        // {
        //     echo '<li>'.'<a href="#">' . $Categories[$i] . '</a>'.'</li>';
        // }
        
        ?> -->
<!-- Load MySQL -->
<?php
require("connect.php");
$sql = "SELECT Ten FROM sidebar";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// Load dữ liệu lên website+
while($row = $result->fetch_assoc()) {
    echo '<li>'.'<a href="#">' . $row["Ten"] . '</a>'.'</li>';
}
} else {
echo "0 results";
}
$conn->close();


?>