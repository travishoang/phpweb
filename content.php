<?php
require("connect.php");
?>
<div class="content">
    <!-- bat dau vong lap while products -->
    <?php $sql_product = mysqli_query($conn, "SELECT * FROM products");
    while ($row_product = mysqli_fetch_array($sql_product)) {
        $id_product = $row_product["ID"];
        ?>
    <div class="content_top">
        <div class="heading">
            <h3><?php echo $row_product['Name']?></h3>
        </div>
        <div class="see">
            <p><a href="#">See all Products</a></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="section group">
        <!-- bat dau vong lap while san pham -->
        <?php $sql_product_sp = mysqli_query($conn, "SELECT * FROM sanpham ORDER BY date_sub DESC");
    while ($row_sanpham = mysqli_fetch_array($sql_product_sp)) {
            if ($row_sanpham["category_id"] == $id_product) {
                ?>
        <div class="grid_1_of_4 images_1_of_4">
            <a href="preview.php?id=<?php echo $row_sanpham ['sanpham_id']?>"><img
                    src="images/<?php echo $row_sanpham['img_sp'] ?>" alt=""></a>
            <h2><?php echo $row_sanpham['Name'] ?> </h2>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$<?php echo $row_sanpham['Gia'] ?></span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.php?id=<?php echo $row_sanpham ['sanpham_id'] ?>">Add to Cart</a></h4>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <?php
            }
    }
?>
        <!-- ket thuc vong lap while sanpham -->
    </div>
    <?php
    }
?>
    <!-- ket thuc vong lap while Name products -->
</div>