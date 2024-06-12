  function initMap() {
    const location = {lat: -21.998281968699455, lng: -46.814180987884036};
    
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 18,
        center: location,
        mapTypeId: google.maps.MapTypeId.SATELLITE
        });
    
    const marker = new google.maps.Marker({
        position: location,
        map: map,
    });
}
