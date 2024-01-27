<html>
<?php require '../inc/core.inc.php';
      require '../inc/connect.inc.php'; 
      include 'admin_head.php' ?>
	    
<div class="clear">
<fieldset>
	<legend><h1>Add Book</h1></legend>
<?php
if(!admin_loggedin()) {
header('Location: index.php');
		} else {
			if(isset($_POST['category'])&&isset($_POST['price'])&&isset($_POST['isbn'])&&isset($_POST['author'])&&isset($_POST['title'])&&isset($_POST['description'])) {
				$category = $_POST['category'];
				$price = $_POST['price'];
				$isbn = $_POST['isbn'];
				$author = $_POST['author'];
				$title = $_POST['title'];
				$description = $_POST['description'];
				$image = addslashes (file_get_contents($_FILES['image']['tmp_name']));
				
				$query = "INSERT INTO books VALUES('".$category."',".$price.",".$isbn.",'".$author."','".$title."','".$description."','".$image."')";
				if($query_run = mysqli_query($link,$query)) {
				    echo "Book Added Successfully";
				} else {
					echo "Failed";
				}
			}
		}
		?>
		<table>
<form action="add_book.php" method="POST" enctype="multipart/form-data">
<tr><td>Category</td><td> :<input type="text" name="category" required/></td></tr>
<tr><td>Price</td><td> :<input type="text" name="price" required/></td></tr>
<tr><td>ISBN</td><td> :<input type="text" name="isbn" required/></td></tr>
<tr><td>Author</td><td> :<input type="text" name="author" required/></td></tr>
<tr><td>Title</td><td> :<input type="text" name="title" required/></td></tr>
<tr><td>Description :</td><td><textarea name="description" rows="10" cols="80" required></textarea></td></tr>
<tr><td>Image :</td><td> <input type="file" name="image" required/></td></tr></table>
<br>
<input type="submit" value="Add Book"/>
</form>
		</fieldset>

</div>