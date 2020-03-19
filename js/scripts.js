/*!
    * Start Bootstrap - Creative v6.0.0 (https://startbootstrap.com/themes/creative)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-creative/blob/master/LICENSE)
    */
(function ($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function () {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function () {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Magnific popup calls
  $('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

})(jQuery); // End of use strict

//Kwdikas gia tn anazitisi tou xarti

function createMap() {

  var options = {
    center: { lat: 40.583518, lng: 22.960992 },
    zoom: 10
  };

  var map = new google.maps.Map(document.getElementById('map'), options);

  addMarker({ coords: { lat: 40.583518, lng: 22.960992 } })

  var infoWindow = new google.maps.InfoWindow({
    content: '<h1>Thessaloniki</h1>'
  });
  //Add Marker Function
  function addMarker(props) {
    var marker = new google.maps.Marker({
      position: props.coords,
      map: map
    });

    if (props.iconImage) {
      marker.setIcon(props.iconImage);
    }


  }






  marker.addListener('click', function () {
    infoWindow.open(map, marker);
  });

}


  // var input = document.getElementById('search');
  // var searchBox = new google.maps.places.SearchBox(input);

  // map.addListener('bounds_changed', function () {
  //   searchBox.setBounds(map.getBounds());
  // });

  // var markers = [];

  // searchBox.addListener('places_changed', function () {
  //   var places = searchBox.getPlaces();

  //   if (places.lenght === 0) {
  //     return;
  //   }

  //   markers.forEach(function (m) { m.setMap(null) });
  //   markers = [];

  //   var bounds = new google.maps.LatLngBounds();

  //   places.forEach(function (p) {
  //     if (!p.geometry)
  //       return;

  //     markers.push(new google.maps.Marker({
  //       map: map,
  //       title: p.name,
  //       position: p.geometry.location
  //     }));

  //     if (p.geometry.viewport)
  //       bounds.union(p.geometry.viewport);
  //     else
  //       bounds.extend(p.geometry.location);
  //   });
  //   map.fitBounds(bounds);
  // });




// addMarker({ coords: { lat: 40.583518, lng: 22.960992 } });

// function addMarker(coords) {
//   var marker = new google.maps.Marker({
//     position: props.coords,
//     map: map,
//     title: 'Hello World!'
//   });

//   if (props.iconImage) {
//     marker.setIcon(props.iconImage);
//   }

////Kwdikas gia na emfanizei kateuthian tn topothesia tou xristi
////////
///////

// var infoWindow;
// infoWindow = new google.maps.InfoWindow;

// if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(
//         function (p) {
//             var position = {
//                 lat: p.coords.latitude,
//                 lng: p.coords.longitude
//             };
//             infoWindow.setPosition(position);
//             infoWindow.setContent("Your location!");
//             infoWindow.open(map);
//         },
//         function () {
//             handleLocationError("Gelolaction service failed", map.center());
//         }
//     );
// } else {
//     handleLocationError("No geolocation available", map.center());
// }

// function handleLocationError(content, position) {
//     infoWindow.setPosition(position);
//     infoWindow.setContent(content);
//     infoWindow.open(map);
// }
