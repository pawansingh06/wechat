var mymap = L.map('mapid').setView([18.9894, 73.1175], 16);

var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         mymap.addLayer(layer);

var marker = L.marker([18.9894, 73.1175]).addTo(mymap);
var marker = L.marker([23.9894, 74.1175]).addTo(mymap);
var marker = L.marker([29.9894, 75.1175]).addTo(mymap);
var marker = L.marker([20.9894, 74.3175]).addTo(mymap);
var marker = L.marker([22.065278, 75.80078]).addTo(mymap);
var marker = L.marker([27.137368, 78.041693]).addTo(mymap);

var circle = L.circle([18.9894, 73.1175], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 100
}).addTo(mymap);

marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);
