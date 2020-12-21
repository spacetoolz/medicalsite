<html>

<head>



</head>


<body >


<html>

<head>



</head>


<body >

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


<form class="form-horizontal"  action="nurse.php" method="POST"  enctype="multipart/form-data">

<input type="text" name="fname" placeholder="ENTER FIRSTNAME" /><br><br>
<input type="text" name="lname" placeholder="ENTER LASTNAME" /><br><br>
<h4>Gender:</h4><br>
<input type="radio" name="gender" value="female"/>Female
<input type="radio" name="gender" value="male"/>Male
<br><br>
<h4>Date Of Birth:</h4><br><input type="date" name="bday" class="form-control"/><br><br>
<input type='text' name='street' placeholder='ENTER STREET'  /><br><br>
<input type='text' name='address' placeholder='ENTER ADDRESS' /><br><br>
<input type='text' name='city' placeholder='ENTER CITY'/><br><br>
<input type='tel' name='htel' placeholder='ENTER HOME NUMBER' /><br><br>
<input type='tel' name='htel' placeholder='ENTER CELL NUMBER' /><br><br>
<input type='tel' name='htel' placeholder='ENTER WORK NUMBER' /><br><br>
<h5>Country:</h5>
    <select name='country'>
    <option value='#' placeholder='Select Option....' >Select Option.....</option>
    <option value='jamaica'>Jamaica</option>
    <option value='usa'>USA</option>
    <option value='canada'>Canada</option>
    <option value='china'>China</option>
    </select>
	<br><br>

<h4>Current level f Qualification:</h4><br>
    <select name='qual'>
    <option value='' placeholder='Select Option....' >Select Option.....</option>
    <option value='Diploma in Nursing'>Diploma in Nursing</option>
    <option value='Associate of Science in Nursing'>Associate of Science in Nursing</option>
    <option value='Bachelor of Science in Nursing'>Bachelor of Science in Nursing</option>
    <option value=' Master of Science in Nursing'> Master of Science in Nursing</option>
    </select>

	
	<h4>Upload an image of Yourself:</h4><br>
	 <input type="file" name="fileToUpload" id="fileToUpload">
	 <br><br>
	
<button name='btn_submit' class='btn btn-success' type='submit'> Submit </button>
</form>



<?php include 'bootcss.php'?>
</body>
</html>

</form>




</body>
</html>