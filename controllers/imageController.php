<?php
class imageController{

public function readExif($image){
	//$img	= "new.jpg";
	//The calculation is simply: Decimal degrees = whole number of degrees, plus minutes divided by 60, plus seconds divided by 3600
	print_r(exif_read_data($image, 0, true));

	}

public function addExif(){
	require_once('lib/pel/examples/gps.php');
	//addGpsInfo('test.jpg','new.jpg','description','comment-user','canon-550D',89.8765,-79.54,43.65,'06-09-2012');
	echo $_POST['latitude']."_".$_POST['longitude'];
	}

public function uploadImage(){
require_once('config.php');

$path		= "tmp/";
$wwwpath	= $config['wwwroot'];echo $wwwpath;
	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								//mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
								imageController::readExif($wwwpath."tmp/".$actual_image_name);
								echo "<img src='".$wwwpath."tmp/".$actual_image_name."'  class='preview'>";
								}
							else
								echo "failed";
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}else{
		echo "Invalid function access";
		}
	}

}
