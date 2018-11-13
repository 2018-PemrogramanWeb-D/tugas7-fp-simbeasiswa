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
	    
	    $nama=$_POST["nama"];
	    $instansi=$_POST["instansi"];
	    $noktp=$_POST["noktp"];
	    $notlp=$_POST["notlp"];
	    
	    $insert = $db->query("INSERT UPLOADER (noktp,nama,instansi,notlp,filename) VALUES ('".$noktp."','".$nama."','".$instansi."','".$notlp."','".$uploadedfile."')");
	    
	    echo "File uploaded successfuly";
	}
?>