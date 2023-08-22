<?php
require("connect.php");
?>
<div class="wrap">
    <div class="section group">
        <?php $sql_footer = mysqli_query($conn, "Select * from name_footer");
        while ($row_footer = mysqli_fetch_array($sql_footer)) {
            $id_footer = $row_footer["footer_id"];
            ?>

        <div class="col_1_of_4 span_1_of_4">
            <h4><?php echo $row_footer["Name_footer"] ?></h4>

            <ul>
                <?php $sql_cate_footer = mysqli_query($conn, "Select * from footer_wrap");
                while ($row_cate_footer = mysqli_fetch_array($sql_cate_footer)) {
                    if ($row_cate_footer["footer_id"] == $id_footer) {

                        ?>
                <?php
                echo '<li>'. '<a href="#">'. $row_cate_footer["Name"]. '</a>'. '</li>';
                    ?>

                <?php
                    }
                }
               ?>
            </ul>
        </div>
        <?php
        }
    ?>
        <div class="col_1_of_4 span_1_of_4">
            <div class="social-icons">

                <h4>Follow Us</h4>

                <ul>
                    <?php $sql_footer_img = mysqli_query($conn, "Select * from icon_footer");
            while ($row_footer_img = mysqli_fetch_array($sql_footer_img)) {
                ?>
                    <li><a href="#" target="_blank"><img src="images/<?php echo $row_footer_img["img"] ?>" alt="" /></a>
                    </li>

                    <?php
            }
            ?>
                    <div class="clear"></div>

                </ul>

            </div>
        </div>
    </div>

</div>