//Kwdikas gia tn anazitisi tou xarti
// function createMap() {
//   var options = {
//     center: { lat: 40.736851, lng: 22.920227 },
//     zoom: 10,
//     disableDefaultUI: true
//   };

//   var map = new google.maps.Map(document.getElementById('map'), options);

//   var input = document.getElementById('searchInput');
//   var searchBox = new google.maps.places.SearchBox(input);

//   map.addListener('bounds_changed', function () {
//     searchBox.setBounds(map.getBounds());
//   });

//   var markers = [];

//   btn.addEventListener('click', function () {
//     var places = searchBox.getPlaces();

//     if (places.lenght === 0) {
//       return;
//     }

//     markers.forEach(function (m) { m.setMap(null) });
//     markers = [];

//     var bounds = new google.maps.LatLngBounds();

//     places.forEach(function (p) {
//       if (!p.geometry)
//         return;

//       markers.push(new google.maps.Marker({
//         map: map,
//         title: p.name,
//         position: p.geometry.location
//       }));

//       if (p.geometry.viewport)
//         bounds.union(p.geometry.viewport);
//       else
//         bounds.extend(p.geometry.location);
//     });
//     map.fitBounds(bounds);
//   });
// }