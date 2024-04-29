<?php 
require('header.php'); 
if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
?>
<script>
    window.location.href = 'index.php';
</script>
<?php
}
?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <?php 
                                    $accordion_class = 'accordion__title';
                                    if(!isset($_SESSION['USER_LOGIN'])){ 
                                        $accordion_class = 'accordion__hide';
                                    ?>
                                    <div class="accordion__title">
                                        Checkout Method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                        <form id="login-form" method="post">
                                                            <h5 class="checkout-method__title">Login</h5>
                                                            <div class="single-input">
                                                                <input type="email" name="login_email" id="login_email" placeholder="Your Email*" style="width:100%">
                                                                <span class="field_error" id="login_email_error"></span>
                                                            </div>
                                                            <div class="single-input">
                                                                <input type="password" name="login_password" id="login_password" placeholder="Your Password*" style="width:100%">
                                                                <span class="field_error" id="login_password_error"></span>
                                                            </div>
                                                            <div class="dark-btn">
                                                                <button type="button" onclick="user_login()">Login</button>
                                                            </div>
                                                            <div class="form-output login_msg">
									                            <p class="form-messege field_error"></p>
								                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                        <form id="register-form" method="post">
                                                            <h5 class="checkout-method__title">Register</h5>
                                                            <div class="single-input">
                                                                <input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%">
                                                                <span class="field_error" id="name_error"></span>
                                                            </div>
															<div class="single-input">
                                                                <input type="email" name="email" id="email" placeholder="Your Email*" style="width:100%">
                                                                <span class="field_error" id="email_error"></span>
                                                            </div>
															<div class="single-input">
                                                                <input type="tel" name="mobile" id="mobile" placeholder="Your Mobile*" style="width:100%">
                                                                <span class="field_error" id="mobile_error"></span>
                                                            </div>
                                                            <div class="single-input">
                                                                <input type="password" name="password" id="password" placeholder="Your Password*" style="width:100%">
                                                                <span class="field_error" id="password_error"></span>
                                                            </div>
                                                            <div class="single-input">
                                                                <input type="password" name="cpassword" id="cpassword" placeholder="Re-enter Password*" style="width:100%">
                                                                <span class="field_error" id="cpassword_error"></span>
                                                            </div>
                                                            <div class="dark-btn">
                                                                <button type="button" onclick="user_register()">Register</button>
                                                            </div>
                                                            <div class="form-output register_msg">
                                                                <p class="form-messege"></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="<?php echo $accordion_class; ?>">
                                        Address Information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="bilinfo">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="First name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Street Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Apartment/Block/House (optional)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="City/State">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Post code/ zip">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="email" placeholder="Email address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Phone number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="<?php echo $accordion_class; ?>">
                                        payment information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="paymentinfo">
                                            <div class="single-method">
                                                <a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Check/ Money Order</a>
                                            </div>
                                            <div class="single-method">
                                                <a href="#" class="paymentinfo-credit-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Credit Card</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
                            <?php
                            $cart_total = 0;
                            foreach($_SESSION['cart'] as $key=>$val){
                            $product_arr = get_product($con , '', '', $key);
                                $pname = $product_arr[0]['name'];
                                $mrp = $product_arr[0]['mrp'];
                                $price = $product_arr[0]['price'];
                                $image = $product_arr[0]['image'];
                                $qty = $val['qty'];
                                $cart_total = $cart_total + ($qty * $price);
                            ?>
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image;?>" alt="ordered item" />
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#"><?php echo $pname;?></a>
                                        <span class="price"><?php echo $price*$qty;?></span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="javascript:void(0)" 
                                        onclick="manage_cart('<?php echo $key?>','remove')">
                                        <i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price"><?php echo $cart_total;?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
        
<?php 
require('footer.php'); 
?>