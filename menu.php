<div class="menu">
    <ul>
        <!-- <?php
        // $menu = array(
        //     'Home',
        //     'About',
        //     'Delivery',
        //     'News',
        //     'Contact'
        // );
        // $supmenu = array(
        //     '<li><a href="index.php">',
        //     '<li><a href="about.html">',
        //     '<li><a href="delivery.html">',
        //     '<li><a href="news.html">',
        //     '<li><a href="contact.html">'
        // );
        // for ($i = 0; $i < count($menu); $i++) {
        //     echo $supmenu[$i] . $menu[$i] . '</a>' . '</li>';
        // }
        ?> -->
        <?php
        $supmenu = array(
            '<li class="active" ><a href="index.php">',
            '<li><a href="about.html">',
            '<li><a href="delivery.html">',
            '<li><a href="news.html">',
            '<li><a href="contact.html">'
        );
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
                $sql = "SELECT Menu FROM menu";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // Load dữ liệu lên website
                $i= 0;
                while($row = $result->fetch_assoc()) {
                    echo $supmenu[$i]. $row["Menu"]. '</a>'. '</li>';
                    $i++;
        }
        } else {
        echo "0 results";
        }
        $conn->close();


        ?>


        <div class="clear"></div>
    </ul>
</div>
<div class="search_box">
    <form>
        <input type="text" value="Search" onfocus="this.value = '';"
            onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
    </form>
</div>
<div class="clear"></div>