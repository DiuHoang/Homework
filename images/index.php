<?php
    require "db.php";
    if(isset($_POST["submit"])) {
        
        $target_file = basename($_FILES["fileToUpload"]["name"]);
        echo $target_file;
        echo "</br>";
        $uploadOk = 1; // kiem tra loi
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
        $sql = "INSERT INTO image VALUES (null,'$target_file')";
        $db->query($sql);
        echo '<script type="text/javascript"> alert("Successful")</script>';
    }
?>
<!DOCTYPE html>
<html>
<body>
    <form action="" method="post" enctype="multipart/form-data">  
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>
