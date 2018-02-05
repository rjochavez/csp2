


 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<title>ComEx Online - Product Page - View </title>
</head>
<body>
	
	<?php include 'error_notification.php'; ?>
	 <?php   
 require 'connection.php'; 
 if(isset($_POST["add_to_cart"]))  
 {  
 	sleep(1);
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id' => $_GET["id"],  
                     'item_name' => $_POST["hidden_name"],  
                     'item_price' => $_POST["hidden_price"],  
                     'item_quantity' => $_POST["quantity"],
                     'item_images' => $_POST["hidden_image"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  ?>
                
				<script type="text/javascript">
					$(document).ready(function(){
							$('.error-notification').show();
							$('.error-notification').html('This item cannot be added again. Please remove from cart.')
						});
				</script>

       <?php    }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id' => $_GET["id"],  
                'item_name' => $_POST["hidden_name"],  
                'item_price' => $_POST["hidden_price"],  
                'item_quantity' => $_POST["quantity"], 
                'item_images' => $_POST["hidden_image"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     sleep(1);
                }  
           }  
      }  
 }  
 ?>  
	<?php if (($_SESSION['role'] == 'user')): ?>
	

<div class="product-overall-container" data-parallax="scroll" data-image-src="img/bg2.jpg">
	<div class="product-product-side">
		<div class="product-side-bar"></div>
	</div>
	<div class="product-product-title"><i class="fa fa-shopping-cart"></i> CART / VIEW CART</div>
	<div class="product-product-release">


		
		<?php   
		if(!empty($_SESSION["shopping_cart"]))  
		{  
		   $total = 0;
		   foreach($_SESSION["shopping_cart"] as $keys => $values)  
		   {  
		?>  
     	<div class="product-items-container" method="post" action=""> 
     		<div class="new release-comic1 product-image">
	               <?php echo "<img src='".$values["item_images"]."'>" ?>
			</div> 
			<div class="comic-title product-title"></div>
               <p class="product-comic-title"><?php echo $values["item_name"]; ?></p>        
               <p><?php echo "Item Quantity : ". $values["item_quantity"]; ?></p>            
               <p><?php echo "Item Price : ".$values["item_price"]; ?></p>

               <input type="hidden" name="hidden_image" value="<?php echo $row["images"]; ?>" />  
               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />   
                <?php echo "Item Total = " .number_format($values["item_quantity"] * $values["item_price"], 2); ?>
               <a href="profile.php?action=delete&id=<?php echo $values["item_id"]; ?>"><button class="delete-btn delete-btn-cart">Remove from Cart</button></a>
     	</div> 

     		

			<?php  
			       $total = $total + ($values["item_quantity"] * $values["item_price"]);  

			   }
			}else{
				echo '<p style="color:#fff;">Your cart is Empty!</p>';
			} 
			?> 

	</div>

	<div class="product-footer">
			<div class="product-footer-con"></div>
	</div>
</div>
<?php endif ?>

	<div class="product-overall-container" data-parallax="scroll" data-image-src="img/bg2.jpg">
		<div class="product-product-side">
			<div class="product-side-bar"></div>
		</div>
		<?php if (($_SESSION['role'] == 'user')): ?>
			<div class="product-product-title"><i class="fa fa-shopping-cart"></i> PRODUCT PAGE / ADD TO CART</div>
		<?php endif ?>
		<?php if (($_SESSION['role'] == 'admin')): ?>
			<div class="product-product-title"><i class="fa fa-unlock"></i> ADMIN / PRODUCT MANAGEMENT PAGE</div>
		<?php endif ?>
		<div class="product-product-release">


		<?php  
		$query = "SELECT * FROM comics ORDER BY id ASC";  
		$result = mysqli_query($conn, $query);  
		if(mysqli_num_rows($result) > 0)  
		{  
		     while($row = mysqli_fetch_array($result))  
		     {  
		     	$name = $row['name'];
				$price = $row['price'];
				$description = $row['description'];
				$author = $row['author'];
				$id = $row['id'];
				$image = $row['images'];
		?>  
			
			


		<?php if (($_SESSION['role'] == 'user')): ?>
			
	     	<form class="product-items-container" method="post" action="profile.php?action=add&id=<?php echo $row["id"]; ?>">  
				<div class="new release-comic1 product-image">
	               <?php echo  "<img src='".$image."''>"?>
				</div>
				<div class="comic-title product-title"></div>
	               <p class="product-comic-title"><?php echo $name; ?></p>
	               <p><?php echo "Author : " .$author ?></p>            
	               <p><?php echo "Description : ".$description ?></p>            
	               <p><?php echo "Price : Php " .$price ?></p>            
	               <input type="hidden" name="hidden_image" value="<?php echo $row["images"]; ?>" />  
	               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
	               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
	               <input type="text" name="quantity" class="form-control" value="1" />  
	               <?php if (($_SESSION['role'] == 'user')){
	               	echo " <input class='addtocart-btn' type='submit' name='add_to_cart' value='Add to Cart' />";
	               }else{
	               		echo "<div>";
	               		echo "<a href='edit_comics.php?editid=$id'><button class='edit-item-btn' name='edit_item'type='submit'><i class='fa fa-edit'></i> Edit Details</button></a>";
						echo "<a href='delete_comics.php?deleteid=$id'><button class='delete-btn' name='delete_item' type='submit'><i class='fa fa-trash'></i> Delete Comics</button></a>";
						echo "</div>";
	               }
	              ?>
			</form>  
		<?php endif ?>

		<?php if (($_SESSION['role'] == 'admin')): ?>
			
	     	<div class="product-items-container">  
				<div class="new release-comic1 product-image">
	                <?php echo  "<img src='".$image."''>"?>
				</div>
				<div class="comic-title product-title"></div>
	               <p class="product-comic-title"><?php echo $name; ?></p>
	               <p><?php echo "Author : " .$author ?></p>            
	               <p><?php echo "Description : ".$description ?></p>            
	               <p><?php echo "Price : Php " .$price ?></p>           
	               <input type="hidden" name="hidden_name" value="<?php echo $row["images"]; ?>" />  
	               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
	               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
	               <?php if (($_SESSION['role'] == 'user')){
	               	echo " <input class='addtocart-btn' type='submit' name='add_to_cart' value='Add to Cart' />";
	               }else{
	               		echo "<div>";
	               		echo "<a href='edit_comics.php?editid=$id'><button class='edit-item-btn' name='edit_item'type='submit'><i class='fa fa-edit'></i> Edit Details</button></a>";
						echo "<a href='delete_comics.php?deleteid=$id'><button class='delete-btn' name='delete_item' type='submit'><i class='fa fa-trash'></i> Delete Comics</button></a>";
						echo "</div>";
	               }
	              ?>
			</div>  
		<?php endif ?>


<?php  
     }  
}  
?>  
		</div>

		<div class="product-footer">
				<div class="product-footer-show">SHOW MORE</div>
				<div class="product-footer-con"></div>
		</div>
	</div>


<?php if (($_SESSION['role'] == 'user')): ?>
	<script type="text/javascript">
		$('.delete-btn-cart').click(function(event) {
			$('.error-message').show(300);
			$('.error-message').html('Removing Item from cart..');
		});

		$('.addtocart-btn').click(function(event) {
			$('.error-message').show(300);
			$('.error-message').html('Adding item to Cart..');
		});

	</script>
<?php endif ?>

<?php if (($_SESSION['role'] == 'admin')): ?>
	<script type="text/javascript">
		$('.delete-btn').click(function(){
			$('.error-message').show(300);
			$('.error-message').html('Deleting from Database...');
		});
	</script>
	<script type="text/javascript">
		$('.edit-item-btn').click(function(){
			$('.error-message').show(300);
			$('.error-message').html('Forwarding details for modification..');
		});
	</script>
<?php endif ?>


	<script type="text/javascript">
		$(document).ready(function() {
			$('.error-message').show();
			$('.error-message').html("Current Total : Php " + <?php echo $total;?>);
		});
	</script>
	
	<script type="text/javascript" src="js/parallax.min.js"></script>
</body>
</html>



