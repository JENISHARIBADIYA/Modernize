<?php
include('../connect.php');

$name = $_REQUEST['name'];
$price = $_REQUEST['price'];
$sale_price = $_REQUEST['sale_price'];
$category = $_REQUEST['category'];
$description = $_REQUEST['description'];
$in_stock = $_REQUEST['in_stock'];
$shipping_charge = $_REQUEST['shipping_charge'];


if ($name ==  '') {
	header('Location:product_edit.php?msg=product Name is required.!');
} 
else if ($price ==  '') {
	header('Location:product_edit.php?msg=price is required.!');
} 
else if ($sale_price ==  '') {
	header('Location:product_edit.php?msg=sale price is required.!');
} 
else if ($category ==  '') {
	header('Location:product_edit.php?msg=category is required.!');
} 
else if ($description ==  '') {
	header('Location:product_edit.php?msg=description is required.!');
} 
else if ($in_stock ==  '') {
	header('Location:product_edit.php?msg=in stock is required.!');
} 
else if ($shipping_charge ==  '') {
	header('Location:product_edit.php?msg=shipping charge is required.!');
} 
else {
	// code to save data in database table
	if (isset($_REQUEST['edit_id'])) {
		$sql = "UPDATE product SET name='$name', price = '$price', sale_price = '$sale_price',  category = '$category', description = '$description', in_stock = '$in_stock', shipping_charge = '$shipping_charge' WHERE id='" . $_REQUEST['edit_id'] . "'";
		if ($conn->query($sql) === TRUE) {
			header('Location:product.php?msg=Data Updated Successfully.!');
		} else {
			header('Location:product.php?msg=Error in Data Updation.!');
		}
	} else {
		$sql = "INSERT INTO product (name,image,price,sale_price,category,description,in_stock,shipping_charge) VALUES ('$name', '../assets/images/products/no_image.jpg','$price','$sale_price','$category','$description','$in_stock','$shipping_charge')";
		// var_dump($sql);exit;
		if ($conn->query($sql) === TRUE) {
			header('Location:product.php?msg=Data Saved Successfully.!');
		} else {
			header('Location:product.php?msg=Error in Data Insertion.!');
		}
	}
}
?>