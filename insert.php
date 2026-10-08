<?php 

include 'connect.php';

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];

	if(empty($name) && empty($email) && empty($contact))
	{
		echo "field is missing....";
	}
	else{
		echo " record inseted successfully...";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Insert Record</h2>
  <form method="post">
  	<div class="mb-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Contact:</label>
      <input type="number" class="form-control" id="contact" placeholder="Enter contact" name="contact">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
