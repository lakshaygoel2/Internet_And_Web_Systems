function initialize() {
    var myLatlng = new google.maps.LatLng(28.7041, 77.107645);
    var mapOptions = {
        zoom: 5,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

     //=====Initialise Default Marker    
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'marker'
     //=====You can even customize the icons here
    });

     //=====Initialise InfoWindow
    var infowindow = new google.maps.InfoWindow({
      content: "<B>Skyway Dr</B>"
  });

   //=====Eventlistener for InfoWindow
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
