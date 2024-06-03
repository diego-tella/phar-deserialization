<?php 


$dir = "uploads/"; 
// recebendo o arquivo multipart 
$file = $_FILES["arquivo"]; 
$target_file = $dir . basename($_FILES["arquivo"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
  
}
if (move_uploaded_file($file["tmp_name"], "$dir/".$file["name"])) { 
    echo "File uploaded successfully! "; 
    echo "<a href='includeimg.php?file=".$dir.$file["name"]."'>Click here to see the file</a>";
} 
else { 
    echo "Error, the file could not be uploaded"; 
}           
?>
