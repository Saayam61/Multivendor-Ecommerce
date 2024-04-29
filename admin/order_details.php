<?php
require('header.inc.php');
$order_id = get_safe_value($con, $_GET['id']);
if(isset($_POST['update_order_status'])){
    $update_order_status = $_POST['update_order_status'];
}
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title"> Order Details </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="product-thumbnail">Product Name</th>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-thumbnail">Qty</th>
                                        <th class="product-thumbnail">Price</th>
                                        <th class="product-thumbnail">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $res = mysqli_query($con, "SELECT distinct(order_details.id), 
                                    order_details.*,product.name, product.image, orders.address, 
                                    orders.city, orders.pincode FROM 
                                    order_details, product, orders WHERE 
                                    order_details.order_id = '$order_id' AND 
                                    order_details.product_id = product.id");
                                    $total_price = 0;
                                    while($row = mysqli_fetch_assoc($res)){
                                        $address = $row['address'];
                                        $city = $row['city'];
                                        $pincode = $row['pincode'];
                                        $total_price = $total_price + ($row['qty']*$row['price']);
                                    ?>
                                    <tr>
                                        <td class="serial"><?php echo $i; $i++;?></td>
                                        <td class="product-name"><?php echo $row['name'];?></td>
                                        <td class="product-name"><img src="
                                        <?php echo PRODUCT_IMAGE_SITE_PATH.
                                        $row['image']; ?>" alt="full-image"></td>
                                        <td class="product-name"><?php echo $row['qty'];?></td>
                                        <td class="product-name"><?php echo $row['price'];?></td>
                                        <td class="product-name"><?php echo $row['qty']*$row['price'];?></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td class="product-name">Total Price</td>
                                        <td class="product-name"><?php echo $total_price;?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div id="address_details">
                                <strong>Address: </strong>
                                <?php echo $address; ?>, <?php echo $city; ?>, <?php echo $pincode; ?><br><br>
                                <strong>Order Status: </strong>
                                <?php 
                                $order_status_arr = mysqli_fetch_assoc(mysqli_query($con, 
                                "SELECT order_status.name FROM order_status, orders WHERE 
                                orders.id = '$order_id' AND orders.order_status = order_status.id"));
                                echo $order_status_arr['name'];
                                ?>
                                <div>
                                    <form method="post">
                                        <div class="form-group">
                                            <!-- <label class=" form-control-label">Categories</label> -->
                                            <select class="form-control" name="update_order_status">
                                                <option>Select Status</option>
                                                <?php
                                                    $res = mysqli_query($con, "SELECT * FROM order_status");
                                                    while($row = mysqli_fetch_assoc($res)){
                                                        if($row['id'] == $categories_id){
                                                            echo "<option selected value=".$row['id'].">
                                                        ".$row['name']."</option>";
                                                        }
                                                        else{
                                                            echo "<option value=".$row['id'].">
                                                        ".$row['name']."</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="fv-btn">
                                            <button type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>