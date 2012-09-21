
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
  //alert("Your Current Location is Latitude: " + position.coords.latitude + "<br />Longitude: " + position.coords.longitude);
  var lat	= position.coords.latitude;
  var lon	= position.coords.longitude;
  
  var map = L.map('map').setView([lat, lon], 13);
  L.tileLayer('http://{s}.tile.cloudmade.com/d7cd577e54e1418aa26c96bbea3a4ecf/997/256/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    maxZoom: 18
}).addTo(map);

	var popup = L.popup();
	function onMapClick(e) {
   popup
        .setLatLng(e.latlng)
        .setContent("Your image geotagged at " + e.latlng.toString())
        .openOn(map);
        //TODO ajax call to geotag
        		var data = {};
				data['latitude'] = lat;
				data['longitude'] = lon;	
        			$.ajax({
		                url:geoNamespace.wwwroot+'imageController/addExif',
		                type:'POST',
		                data:data,
		                success:function(data){
		                	alert(data);
		                }
		        });
	}
	
	map.on('click', onMapClick);
	
  	}
