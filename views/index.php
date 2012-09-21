<!DOCTYPE HTML>
<head>
<title>GeoTag U</title>
<link rel="stylesheet" href="../public/css/main.css">
<link rel="stylesheet" href="../lib/leaflet/dist/leaflet.css" />
<script src="../lib/leaflet/dist/leaflet.js"></script>
<script src="../public/js/main.js"></script>
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/jquery.form.js"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
	    
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="../public/images/loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        });

</script>

</head>
<body onload="getLocation()">
<?php
require_once('../config.php');
//TODO validate_user_session

//upload image
?>
<script type="text/javascript">
    var geoNamespace = {
       wwwroot : '<?php echo $config['wwwroot']; ?>'
    }
</script>
<div id="map" style="height: 300px;"></div>
<div style="width:600px">

<form id="imageform" method="post" enctype="multipart/form-data" action='http://localhost/tripipal/geotag/src/imageController/uploadImage'>
Upload your image <input type="file" name="photoimg" id="photoimg" />
</form>

<div id='preview'>
</div>


</div>
</body>
<footer></footer>
