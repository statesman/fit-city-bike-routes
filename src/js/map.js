var layer = L.tileLayer('http://openmapsurfer.uni-hd.de/tiles/roads/x={x}&y={y}&z={z}',{
  attribution: 'Imagery from <a href="http://giscience.uni-hd.de/">GIScience Research Group @ University of Heidelberg</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

/*
var layer = L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',{
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'
});

*/

var map = L.map('map', {
  center: [30.46998139622128,-98.18618774414062],
  zoom: 9,
  minZoom: 3,
  maxZoom: 17
});

map.addLayer(layer);

var routes = L.geoJson().addTo(map);

$.getJSON( "dist/routes.json", function( data ) {
  routes.addData(data);
  map.fitBounds(routes.getBounds());
});



function mapFocus(routes,name) {
  routes.setStyle(function(feature){
    console.log(name);
    console.log(feature);
    if (feature.properties.name === name){
      var bb = feature.bbox;
      map.fitBounds([[bb[1],bb[0]], [bb[3],bb[2]]]);
      return {color: "#FF0000"};
    }
    else {
      return {color: "black"};
    }
  });
}

$('#route-toggle a').click(function(e){
  e.preventDefault();
  var text = $(this).find("h4").text().trim();
  console.log("from h4",text);
  mapFocus(routes,text);
});