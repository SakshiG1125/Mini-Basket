<?php
include("connect.php");
include("header.php");
?>

<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="supplier.css">
</head>
<body>

    <section>
    	<form onSubmit = "return checkPassword(this)" method="POST">
  <div class="container" style="width:850px; height: 510px; border:0.1px solid; padding-top: 2%; margin-top: 8%;"  >

  <h2>Add Supplier Details</h2>
    
   &nbsp;&nbsp;&nbsp;&nbsp;
<label for="category">Select Category</label>
    <select name="cars">
<?php
     $sql = ("SELECT name FROM category ");
     $result = mysqli_query($conn, $sql);
     //$row = mysqli_fetch_array($result);
    // print_r(mysqli_num_rows($result));exit;
 while ($row = mysqli_fetch_assoc($result)){
     echo "<option value=\"\">" . $row['name'] . "</option>";
    }
?>

  <label for="name" ><b>First Name:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Your Name" name="fname" required>
&nbsp;&nbsp;&nbsp;
    <label for="lname"><b>Last Name:</b></label>&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Last Name" name="lname" required>&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    <label for="address"><b>Address:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Address" name="address" required>

    
     <label for="mobile" style="padding-left: 2%"><b>Mobile No:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;

    <input type="text" placeholder="Mobile Number" name="mobile" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
    <label for="email"><b>Email:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="psw"  style="padding-left: 2%"><b>Password:</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" placeholder="Enter Password" name="password1" required><br> 
    
</select>
 
              <label><b>Profile Photo:</b></label>
&nbsp;&nbsp;
<img src="image/<?php echo $result['profile']?>" width="10%">

                <input id="image" type="file" name="profile" placeholder="Photo" required= "capture">
 <center><button type="submit"  class="registerbtn" name="btn"><b>Submit</b></button></center> 
</div>
</form>
    </section>
</body>
</html>
<?php
include("footer.php");
?>