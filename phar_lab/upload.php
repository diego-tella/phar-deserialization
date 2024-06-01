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
    echo "Arquivo enviado com sucesso!"; 
    echo "<a href='includeimg.php?file=".$dir.$file["name"]."'>Clique aqui para ver</a>";
} 
else { 
    echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
}           
?>