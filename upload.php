<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
	<body>
	<?php
	include("database.php");
	if(!empty($_POST["nama"]) || !empty($_POST["instansi"]) || !empty($_FILES["noktp"]) || !empty($_FILES["notlp"]))
	{
	    $uploadedfile="";
	    if(!empty($_FILES["file"]["type"]))
	    {
	        $fileName=time().'_'.$_FILES["uploadfile"]["nama"];
	        $temporary = explode(".", $_FILES["uploadfile"]["nama"]);
	        
	        {
	            $sourcePath=$_FILES["uploadfile"]["nama"];
	            $targetPath="uploads/".$fileName;
	            if(move_uploaded_file($sourcePath,$targetPath))
	            {
	                $uploadedFile=$fileName;
	            }
	        }
	    }
	    
	    
	    
	    $noktp=$_POST["noktp"];
	    $notlp=$_POST["notlp"];
	    
	    $insert = $db->query("INSERT INTO `uploader` (`Noktp`,`Nama`,`Instansi`,`Notlp`,`Filename`) 
	    	VALUES 
		    	(
		    	'".$noktp."',
		    	'".mysqli_real_escape_string($con,$_POST["nama"]).",
		    	'".mysqli_real_escape_string($con,$_POST["instansi"]).",
		    	'".$notlp."',
		    	'".$uploadedfile."'
	    		)");
	    
	    echo "File uploaded successfuly";
	    header("location: index.html");
	}
	else
	{
		echo "File failed to upload";
	    header("location: UPLOAD.html");
	}
?>

</body>
</html>