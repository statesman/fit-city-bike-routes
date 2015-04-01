// sets base layer. Choices: http://leaflet-extras.github.io/leaflet-providers/preview/
var layer = L.tileLayer('http://openmapsurfer.uni-hd.de/tiles/roads/x={x}&y={y}&z={z}',{
  attribution: 'Imagery from <a href="http://giscience.uni-hd.de/">GIScience Research Group @ University of Heidelberg</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

//default view.
var map = L.map('map', {
  center: [30.46998139622128,-98.18618774414062],
  zoom: 9,
  minZoom: 3,
  maxZoom: 17
});

//adding tileLayer to map
map.addLayer(layer);

//define routes as geojson
var routes = L.geoJson().addTo(map);

//get the geojson from file, which was created at geojson.io
$.getJSON( "dist/routes.json", function(data) {
  routes.addData(data); //add the routes
  map.fitBounds(routes.getBounds()); //get bounds of all the features
});

//change map focus based on bounding boxes. looks at the name property
// in the json, then finds bbox feature.
function mapFocus(routes,name) {
  routes.setStyle(function(feature){
    if (feature.properties.name === name){
      var bb = feature.bbox;
      map.fitBounds([[bb[1],bb[0]], [bb[3],bb[2]]]);
    }
  });
}

//click actions for buttons that affects classes, bounds and shows/hide descriptions
$('#route-toggle a').click(function(e){
  $('#route-toggle a').removeClass("active"); //removes active class all buttons
  $(this).addClass("active"); // adds active class on click
  e.preventDefault(); //keeps a tag from jumping page
  var text = $(this).text().trim(); //gets text from button
  if(text === "All"){
      map.fitBounds(routes.getBounds());
    } //sets bounds to default if all button clicked
  $(".descriptions .route-description").each(function(i,el){
    var name = $(el).data("name");
    if(text === name){
      $(el).show();
    }
    else {
      $(el).hide();
    } //shows and hids description divs
  });
  mapFocus(routes,text);
});
