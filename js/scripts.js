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

/////////////////////////////////////////////////////
/////////////////////////////////////////////////
/////////////////////////////

//Προιοντα πρωτης αναγκης
// //αλευρι
// νερο
// ζυμαρικα
// γαλα
// αντισειπτικα
// μασκες
// γαντια
// χαρτι υγειας
// λαδι
// οινοπνευμα

var btn = document.getElementById('btnSearch');
var option = document.getElementById('selectProduct').value;
var supermarketName, productName, productQuantity, livePerson;
//Markers solution

function initMap() {
  // Map options
  var options = {
    zoom: 15,
    center: { lat: 40.5853602, lng: 22.9577405 }
  }

  // New map
  var map = new google.maps.Map(document.getElementById('map'), options);

  var foods = [];
  // Array of markers
  var markers = checkProduct();

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
      animation: google.maps.Animation.DROP
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

//Functions for Content InfoWindow
//
function addConent(supermarketName, productName, productQuantity, livePerson) {

  var content = '<div id="content" onmouseover="alertMessage(' + livePerson + ')">' +
    '<h4 id="firstHeading" class="firstHeading"> ' + supermarketName + '</h4>' +
    '<hr>' +
    '<table>' +
    '<tr>' +
    '<th>Προϊόν</th>' +
    '<th>Ποσότητα</th>' +
    '</tr>' +
    '<tr>' +
    '<td> ' + productName[0] + '</td>' +
    '<td> ' + productQuantity[0] + ' κιβ.</td>' +
    '</tr>' +
    '<tr>' +
    '<td>' + productName[1] + '</td>' +
    '<td> ' + productQuantity[1] + ' κιβ.</td>' +
    '</tr>' +
    '<tr>' +
    '<td>' + productName[2] + '</td>' +
    '<td> ' + productQuantity[2] + ' κιβ.</td>' +
    '</tr>' +
    '</table>' +
    '<div>' +
    '<hr>' +
    '<p> <strong style="color:red;">Live</strong>: ' + livePerson + ' επισκέπτες </p>' +
    '</div>' +
    '</div>';

  return content;
}

function alertMessage(livePerson) {
  if (livePerson >= 40) {
    alert('Opps, το κατάστημα που επέλεξες φαίνεται να είναι γεμάτο, για την πιο γρήγορη εξυπηρέτηση σου μπορείς να επισκεφτείς κάποιο άλλο κατάστημα!');
  }
}

//nero
// zymarika
// gala
// aleuri
// ladi
// antiseiptika
// maskes
// xarti
// ygeias
// oinopneuma

function checkProduct() {

  switch (option) {
    case 'nero':
      break;
    case 'zymarika':
      break;
    case 'gala':
      break;
    case 'aleuri':
      break;
    case 'ladi':
      break;
    case 'antiseiptika':
      break;
    case 'maskes':
      break;
    case 'xarti':
      break;
    case 'ygeias':
      break;
    case 'oinopneuma':
      break;
  }

  var markers = [
    {
      coords: { lat: 40.5856899, lng: 22.9588858 },
      iconImage: '../assets/img/supermarket.png',
      content: addConent("Lidl", ["Γάλα", "Αλεύρι", "Οινόπνευμα"], [15, 20, 25], 40)
    },
    {
      coords: { lat: 40.5881467, lng: 22.9596181 },
      iconImage: '../assets/img/supermarket.png',
      content: addConent("Σκλαβενίτης", ["Γάλα", "Αλεύρι", "Οινόπνευμα"], [15, 20, 25], 10)
    },
    {
      coords: { lat: 40.5882771, lng: 22.9534168 },
      iconImage: '../assets/img/supermarket.png',
      content: addConent("Ελληνικά Μάρκετ", ["Γάλα", "Αλεύρι", "Οινόπνευμα"], [15, 20, 25], 20)
    },
    {
      coords: { lat: 40.582378, lng: 22.956753 },
      iconImage: '../assets/img/supermarket.png',
      content: addConent("Μασούτης", ["Γάλα", "Αλεύρι", "Οινόπνευμα"], [15, 20, 25], 20)
    },
    {
      coords: { lat: 40.585711, lng: 22.946956 },
      iconImage: '../assets/img/supermarket.png',
      content: addConent("Μίνι Μάρκετ", ["Γάλα", "Αλεύρι", "Οινόπνευμα"], [15, 20, 25], 30)
    },
    {
      coords: { lat: 40.587677, lng: 22.964766 },
      iconImage: '../assets/img/supermarket.png',
      content: addConent("Shop", ["Γάλα", "Αλεύρι", "Οινόπνευμα"], [15, 20, 25], 15)
    }
    , {
      coords: { lat: 40.5878228, lng: 22.9563379 },
      iconImage: '../assets/img/pin.png',
      content: '<h4>Σπίτι</h4>'
    },
  ];

  return markers
}


