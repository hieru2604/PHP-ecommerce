<?php 
	//load file Layout.php vao day
	$this->fileLayout = "Layout.php";
	$con = new mysqli("localhost","root","","project");
 ?>
<h3>Home View</h3>

<div class="row" style="margin-top:20px">
<div class="col-md-3 ">
	<div class="card card-body bg-info text-white mb-3" style="padding:5px;border-style:solid">
		<label style="margin:10px 0px 5px 10px">This month orders</label>
		<?php

			$dash_orders_query = "SELECT * from orders where month(date)=month(now())";
			$dash_orders_query_run = mysqli_query($con, $dash_orders_query);
			$orders_total = mysqli_num_rows($dash_orders_query_run);
			echo '<h1 style="margin: 0px 0 10px 10px; font-weight:bold"> '.$orders_total.' </h1>'
		?>
		<a style="margin:10px;background-color:transparent !important; color:black !important" href="index.php?controller=orders" class="active-menu bg-primary" >View details  </a><i class="fas fa-arrow-right"></i>
	</div>
</div>
<div class="col-md-3 ">
	<div class="card card-body bg-success text-white mb-3" style="padding:5px;border-style:solid">
		<label style="margin:10px 0px 5px 10px">This month Earning</label>
		<?php
			$dash_monthlyorders_query = mysqli_query($con, 'SELECT sum(price) as sum FROM orders where month(date)=month(now())');
			$monthlyorders_row = mysqli_fetch_assoc($dash_monthlyorders_query);
			$monthlyorders_sum = $monthlyorders_row['sum'];
			echo '<h1 style="margin: 0px 0 10px 10px; font-weight:bold;">'.$monthlyorders_sum.'</h1>'
		?> 	
		<a style="margin:10px;background-color:transparent !important; color:black !important" href="index.php?controller=orders" class="active-menu bg-primary" >View details</a><i class="fas fa-arrow-right"></i>
	</div>
</div>
<div class="col-md-3 ">
	<div class="card card-body bg-warning text-white mb-3" style="padding:5px;border-style:solid">
		<label style="margin:10px 0px 5px 10px">This month books sold</label>
		<?php
			$dash_products_query = mysqli_query($con, 'SELECT sum(quantity) as sum FROM orderdetails o inner join orders e on o.order_id=e.id where month(date)=month(now())');
			$dash_products_row = mysqli_fetch_assoc($dash_products_query);
			$dash_products_sum = $dash_products_row['sum'];
			echo '<h1 style="margin: 0px 0 10px 10px; font-weight:bold;">'.$dash_products_sum.'</h1>'
		?> 	
		<a style="margin:10px; background-color:transparent !important; color:black !important" href="index.php?controller=orders" class="active-menu bg-primary" >View details</a><i class="fas fa-arrow-right"></i>
	</div>
</div>
<div class="col-md-3 ">
	<div class="card card-body bg-danger text-white mb-3" style="padding:5px; border-style:solid">
		<label style="margin:10px 0px 5px 10px">Total Customers</label>
		<?php
			$dash_customers_query = "SELECT * from customers";
			$dash_customers_query_run = mysqli_query($con, $dash_customers_query);
			$customers_total = mysqli_num_rows($dash_customers_query_run);
			echo '<h1 style="margin: 0px 0 10px 10px; font-weight:bold"> '.$customers_total.' </h1>'
		?>
		<a style="margin:10px;background-color:transparent !important; color:black !important" href="index.php?controller=customers" class="active-menu bg-primary" >View details</a><i class="fas fa-arrow-right"></i>
	</div>
</div>
</div>