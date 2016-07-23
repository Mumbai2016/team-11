<?php
	$value1=$_POST['CODE'];
	$value2=$_POST['DOC_1'];
	$value3=$_POST['DOC_2'];
	$value4=$_POST['DOC_3'];
	$value5=$_POST['DOC_4'];
	$value6=$_POST['DOC_5'];
	$exception_var=0;


	//CODE TO CHK WHETHER THE EMPLOYEE CODE IS PRESENT IN THE DATABASE



	//file upload code for DOC1 starts
	if($value2=="yes")
	{
		//DYNAMIC GENERATION OF FOLDERS ACCORDING TO EMP CODE
		$target_dir = "uploads/";
		$newfilename = round(microtime(true));
		$target_file = $target_dir . ($newfilename) . basename($_FILES["UP_FILE_DOC1"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file with the same name already exists. Please change the filename and try again.";
		    $uploadOk = 0;
		}
		// Check file size if greater than 1 MB
		if ($_FILES["UP_FILE_DOC1"]["size"] > 100000000) {
		    echo "Sorry, your file is too large.(Make sure the file size is less than 1MB";
			    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "odt" && $imageFileType != "ott" && $imageFileType != "fodt" && $imageFileType != "uot" && $imageFileType != "docx" && $imageFileType != "xml" && $imageFileType != "doc" && $imageFileType != "html"  && $imageFileType != "rtf"  && $imageFileType != "txt" && $imageFileType != "pdf")
		{
		    echo "Sorry, only odt, ott, fodt, uot, docx, xml, doc, dot, html, rtf, txt & pdf files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
		    echo "Sorry, your file was not uploaded.";
		    $exception_var=1;
		    // if everything is ok, try to upload file
		} 
		else 
		{
		    	if (move_uploaded_file($_FILES["UP_FILE_DOC1"]["tmp_name"], $target_file)) {
		        	
			} 
			else 
			{
		    		echo "Sorry, there was an error uploading your file.";
		    		$exception_var=1;
		 	}
		}
	}


	//file upload code for DOC2 starts
	if($value3=="yes")
	{
		//DYNAMIC GENERATION OF FOLDERS ACCORDING TO EMP CODE
		$target_dir = "uploads/";
		$newfilename = round(microtime(true));
		$target_file = $target_dir . ($newfilename) . basename($_FILES["UP_FILE_DOC2"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file with the same name already exists. Please change the filename and try again.";
		    $uploadOk = 0;
		}
		// Check file size if greater than 1 MB
		if ($_FILES["UP_FILE_DOC2"]["size"] > 100000000) {
		    echo "Sorry, your file is too large.(Make sure the file size is less than 1MB";
			    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "odt" && $imageFileType != "ott" && $imageFileType != "fodt" && $imageFileType != "uot" && $imageFileType != "docx" && $imageFileType != "xml" && $imageFileType != "doc" && $imageFileType != "html"  && $imageFileType != "rtf"  && $imageFileType != "txt" && $imageFileType != "pdf")
		{
		    echo "Sorry, only odt, ott, fodt, uot, docx, xml, doc, dot, html, rtf, txt & pdf files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
		    echo "Sorry, your file was not uploaded.";
		    $exception_var=1;
		    // if everything is ok, try to upload file
		} 
		else 
		{
		    	if (move_uploaded_file($_FILES["UP_FILE_DOC2"]["tmp_name"], $target_file)) {
		        	
			} 
			else 
			{
		    		echo "Sorry, there was an error uploading your file.";
		    		$exception_var=1;
		 	}
		}
	}

	
	//file upload code for DOC3 starts
	if($value4=="yes")
	{
		//DYNAMIC GENERATION OF FOLDERS ACCORDING TO EMP CODE
		$target_dir = "uploads/";
		$newfilename = round(microtime(true));
		$target_file = $target_dir . ($newfilename) . basename($_FILES["UP_FILE_DOC3"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file with the same name already exists. Please change the filename and try again.";
		    $uploadOk = 0;
		}
		// Check file size if greater than 1 MB
		if ($_FILES["UP_FILE_DOC3"]["size"] > 100000000) {
		    echo "Sorry, your file is too large.(Make sure the file size is less than 1MB";
			    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "odt" && $imageFileType != "ott" && $imageFileType != "fodt" && $imageFileType != "uot" && $imageFileType != "docx" && $imageFileType != "xml" && $imageFileType != "doc" && $imageFileType != "html"  && $imageFileType != "rtf"  && $imageFileType != "txt" && $imageFileType != "pdf")
		{
		    echo "Sorry, only odt, ott, fodt, uot, docx, xml, doc, dot, html, rtf, txt & pdf files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
		    echo "Sorry, your file was not uploaded.";
		    $exception_var=1;
		    // if everything is ok, try to upload file
		} 
		else 
		{
		    	if (move_uploaded_file($_FILES["UP_FILE_DOC3"]["tmp_name"], $target_file)) {
		        	
			} 
			else 
			{
		    		echo "Sorry, there was an error uploading your file.";
		    		$exception_var=1;
		 	}
		}
	}


	//file upload code for DOC4 starts
	if($value5=="yes")
	{
		//DYNAMIC GENERATION OF FOLDERS ACCORDING TO EMP CODE
		$target_dir = "uploads/";
		$newfilename = round(microtime(true));
		$target_file = $target_dir . ($newfilename) . basename($_FILES["UP_FILE_DOC4"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file with the same name already exists. Please change the filename and try again.";
		    $uploadOk = 0;
		}
		// Check file size if greater than 1 MB
		if ($_FILES["UP_FILE_DOC4"]["size"] > 100000000) {
		    echo "Sorry, your file is too large.(Make sure the file size is less than 1MB";
			    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "odt" && $imageFileType != "ott" && $imageFileType != "fodt" && $imageFileType != "uot" && $imageFileType != "docx" && $imageFileType != "xml" && $imageFileType != "doc" && $imageFileType != "html"  && $imageFileType != "rtf"  && $imageFileType != "txt" && $imageFileType != "pdf")
		{
		    echo "Sorry, only odt, ott, fodt, uot, docx, xml, doc, dot, html, rtf, txt & pdf files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
		    echo "Sorry, your file was not uploaded.";
		    $exception_var=1;
		    // if everything is ok, try to upload file
		} 
		else 
		{
		    	if (move_uploaded_file($_FILES["UP_FILE_DOC4"]["tmp_name"], $target_file)) {
		        	
			} 
			else 
			{
		    		echo "Sorry, there was an error uploading your file.";
		    		$exception_var=1;
		 	}
		}
	}

	//file upload code for DOC5 starts
	if($value6=="yes")
	{
		//DYNAMIC GENERATION OF FOLDERS ACCORDING TO EMP CODE
		$target_dir = "uploads/";
		$newfilename = round(microtime(true));
		$target_file = $target_dir . ($newfilename) . basename($_FILES["UP_FILE_DOC5"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file with the same name already exists. Please change the filename and try again.";
		    $uploadOk = 0;
		}
		// Check file size if greater than 1 MB
		if ($_FILES["UP_FILE_DOC5"]["size"] > 100000000) {
		    echo "Sorry, your file is too large.(Make sure the file size is less than 1MB";
			    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "odt" && $imageFileType != "ott" && $imageFileType != "fodt" && $imageFileType != "uot" && $imageFileType != "docx" && $imageFileType != "xml" && $imageFileType != "doc" && $imageFileType != "html"  && $imageFileType != "rtf"  && $imageFileType != "txt" && $imageFileType != "pdf")
		{
		    echo "Sorry, only odt, ott, fodt, uot, docx, xml, doc, dot, html, rtf, txt & pdf files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
		    echo "Sorry, your file was not uploaded.";
		    $exception_var=1;
		    // if everything is ok, try to upload file
		} 
		else 
		{
		    	if (move_uploaded_file($_FILES["UP_FILE_DOC5"]["tmp_name"], $target_file)) {
		        	
			} 
			else 
			{
		    		echo "Sorry, there was an error uploading your file.";
		    		$exception_var=1;
		 	}
		}
	}

	if(exception_var==0)
	{
		$servername = "localhost";
		$username = "";
		$password = "";
		$dbname = "";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		//MAKE COLUMNS IN DATABASE ALL DOCUMNETS AND INSERT YES OR NO FOR EACH EMPLOYEE (EK QUERY EMP CODE KA AND WOH EMPLOYEE CODE PE DOUCUMENTS KA YES OR NO)

		$conn->close();
		//database code ends
	}
	else
	{
		echo "Your form details have been lost due to some error in saving the uploaded files.";
		echo "Please fill the form again with each file having file size below 1 MB.";
		echo "Only the following file formats are supported";
		echo "pdf,odt,docx,doc,txt,rtf,xml,html,uof,ott,fodt,dot";
	}
?>
