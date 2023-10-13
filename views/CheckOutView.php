<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <link rel="stylesheet" href="./assets/frontend/css/check-out.css">
    </head>
    <div class="container well">
    <h2 style="text-align:center;">Book Seats</h2>
    <hr>
  <form method="post" action="ccavenue/ccavRequestHandler.php" class="form-horizontal">
    
    <!-- <input type="hidden" name="tid" id="tid" readonly />
    <input type="hidden" name="merchant_id" value=""/>
    <input type="hidden" name="order_id" value=""/>
    <input type="hidden" name="amount" value="10.00"/> -->
    <input type="hidden" name="currency" value="INR"/>
    <input type="hidden" name="redirect_url" value="http://tutorials.lcl/cart/ccavenue/ccavResponseHandler.php"/>
    <input type="hidden" name="cancel_url" value="http://tutorials.lcl/cart/ccavenue/ccavResponseHandler.php"/>
    <input type="hidden" name="language" value="EN"/>

    <div class="row">
      <div class="col-md-7 well">
        <h3>Billing Address</h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon addon-diff-color">
                <span class="glyphicon glyphicon-user"></span>
            </div>
            <input class="form-control" type="text" id="billing_name" name="billing_name" placeholder="Họ tên" value="<?= $customer['name']; ?>">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon addon-diff-color">
                <span class="glyphicon glyphicon-envelope"></span>
            </div>
            <input class="form-control" type="text" id="billing_email" name="billing_email" placeholder="email@gmail.com" value="<?= $customer['email']; ?>">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon addon-diff-color">
                <span class="glyphicon glyphicon-earphone"></span>
            </div>
            <input class="form-control" type="text" id="billing_tel" name="billing_tel" placeholder="Số điện thoại" value="<?= $customer['mobile']; ?>">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon addon-diff-color">
                <span class="glyphicon glyphicon-home"></span>
            </div>
            <input class="form-control" type="text" id="billing_address" name="billing_address" placeholder="Địa chỉ" value="<?= $customer['address']; ?>">
          </div>
        </div>     
    </div>
      <div class="col-md-4 col-md-offset-1 well">
        <div class="text-right">
          <h3>Your items</h3>
          <h4><span class="glyphicon glyphicon-shopping-cart"></span><sup id="itemCount"><?= $cartPrices['itemCount']; ?></sup></h4>
          <table class="table">
            <tbody>
              <?php 
                foreach ($cartItems as $key => $cartItem) { 
               ?>    
                <tr>
                  <td style ="text-align:right;" width="85%">
                    <a href="#"><?= $cartItem['name']; ?></a>
                  </td>
                  <td width="15%">
                    <strong><span>&#x20b9;</span><?= ($cartItem['price']*$cartItem['quantity']); ?></strong>
                  </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <hr style="border: 1px dotted gray;">
          <p>Total: <strong>
              <span>&#x20b9;</span><?= $cartPrices['finalPrice']; ?>
            </strong>
          </p>
        </div>
        <div class="text-right">
          <input type="submit" value="Pay Now" class="btn btn-success btn-block">
        </div>
      </div>
    </div>
  </form>
</div>
<div style="position: fixed; bottom: 10px; right: 10px; color: green;">
    <strong>
        Durgesh Sahani
    </strong>
</div>
 </html>
