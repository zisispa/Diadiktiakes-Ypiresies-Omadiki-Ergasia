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
// function createMap() {
//   var options = {
//     center: { lat: 40.736851, lng: 22.920227 },
//     zoom: 10
//   };

//   var map = new google.maps.Map(document.getElementById('map'), options);

//   var input = document.getElementById('searchInput');
//   var searchBox = new google.maps.places.SearchBox(input);

//   map.addListener('bounds_changed', function () {
//     searchBox.setBounds(map.getBounds());
//   });

//   var markers = [];

//   searchBox.addListener('places_changed', function () {
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

//Markers solution

function initMap() {
  // Map options
  var options = {
    zoom: 8,
    center: { lat: 42.3601, lng: -71.0589 }
  }

  // New map
  var map = new google.maps.Map(document.getElementById('map'), options);

  // Listen for click on map
  // google.maps.event.addListener(map, 'click', function (event) {
  //   // Add marker
  //   addMarker({ coords: event.latLng });
  // });

  // Array of markers
  var markers = [
    {
      coords: { lat: 42.4668, lng: -70.9495 },
      iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
      content: '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h4 id="firstHeading" class="firstHeading">Μασούτης</h4>' +
        '<div id="bodyContent">' +
        '<ul><li>Γάλα 10 κ.</li></ul>' +
        '<ul><li>Αλεύρι 11 κ.</li></ul>' +
        '<ul><li>Μακαρόνια 15 κ.</li></ul>' +
        '<ul><li>Μακαρόνια 15 κ.</li></ul>' +
        '</div>' +
        '</div>'
    },
    {
      coords: { lat: 42.8584, lng: -70.9300 },
      content: '<h1>Amesbury MA</h1>'
    },
    {
      coords: { lat: 42.7762, lng: -71.0773 }
    }
  ];

  // Loop through markers
  for (var i = 0; i < markers.length; i++) {
    // Add marker
    addMarker(markers[i]);
  }

  // Add Marker Function
  function addMarker(props) {
    var marker = new google.maps.Marker({
      position: props.coords,
      map: map,
      //icon:props.iconImage
    });

    // Check for customicon
    if (props.iconImage) {
      // Set icon image
      marker.setIcon(props.iconImage);
    }

    // Check content
    if (props.content) {
      var infoWindow = new google.maps.InfoWindow({
        content: props.content
      });

      marker.addListener('click', function () {
        infoWindow.open(map, marker);
      });
    }
  }
}