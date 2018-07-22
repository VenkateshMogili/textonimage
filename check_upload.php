<?php
$text=$_POST['text'];
//image uploading...
     $filename =$_FILES['upload']['name'];
    $tmpname  = $_FILES['upload']['tmp_name'];
    $filesize = $_FILES['upload']['size'];
    $ftype = $_FILES['upload']['type'];
    $extension=strpbrk($_FILES['upload']['name'],".");
     $vpb_file_extensions = pathinfo($filename, PATHINFO_EXTENSION); // File Extension
    $vpb_allowed_file_extensions = array("png","jpg","jpeg","gif");
    $fp = fopen($tmpname, 'r');
    fclose($fp);
    $uploadDir = 'images/';
        
          if (!in_array($vpb_file_extensions, $vpb_allowed_file_extensions)) 
    {
        //Display file type error error
        echo "<script>alert('only .png or .jpg or .jpeg or .gif formats files are allowed');</script>";
    }
    else 
    {
            $filePath = $uploadDir . $filename;
$result = move_uploaded_file($tmpname, $filePath);
if (!$result) {
echo "<script>alert('Error uploading file..File is too large');window.location='index.php';</script>";
exit;
}
else{
	header("Content-type: image/jpg");
    $imgPath = "images/".$filename;
    $image = imagecreatefromjpeg($imgPath);
    $color = imagecolorallocate($image, 255,255,0);
    $string = $text;
    $fontSize = 10;
    $x = 10;
    $y = 100;
    imagestring($image, $fontSize, $x, $y, $string, $color);
    imagejpeg($image);

}
}

?>
