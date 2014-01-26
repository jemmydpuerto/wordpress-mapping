var protoMap = {

	map: null,
	geocoder: null, 
	infowindow: null,
	myLocation: null,
	overlays: new Array(),
	listTemplate: null,
	outputListTpl: '',
	ratings: '0.0',
	tempVar: false,

	init: function() {

		protoMap.initListTemplate();

		protoMap.myLocation = new google.maps.LatLng(41.875696393231, -87.63313293457031);

		protoMap.loadMap();

		protoMap.findNearby( new Array('doctor') );

		$('#findMe').on('click', function(){

			protoMap.getLocation();

		});
		
	},


	loadMap: function() {
		
		var mapOptions = {
	          center: protoMap.myLocation,
	          zoom: 12
        };

        protoMap.map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	},


	findNearby: function( types ) {

		protoMap.outputListTpl = '';

		protoMap.clearOverlays();

		var request = {
					    location: protoMap.myLocation,
					    radius: 2000,
					    types: types
					  };

	 protoMap.infowindow = new google.maps.InfoWindow();

	 var service = new google.maps.places.PlacesService(protoMap.map);

	 service.nearbySearch(request, protoMap.searchCallback);

	},


	searchCallback: function( results, status ) {

		if (status == google.maps.places.PlacesServiceStatus.OK) {

			var ratingVal = '', indexHalf = 0, counter = 0;
			
			$.each( results, function( index, obj ) {

				counter++;

				if ( obj.rating ) {

					protoMap.ratings = obj.rating + '';

				} else {

					protoMap.ratings = '0.0';

				}

				var spl  		= 	protoMap.ratings.split('.'),
	       			fDigit		=	parseInt(spl[0]),
	       			len  		=	spl.length,
	       			indexHalf	= 	0;

	       			if ( len > 1 ) {

		       			indexHalf	=	fDigit + 1;

		       		} 


				protoMap.outputListTpl += protoMap.listTemplate.replace(/{{placeUrl}}/ig, obj.url)
															   .replace(/{{placePhoto}}/ig, (obj.photos == undefined ? '' : obj.photos[0].getUrl({'maxWidth': 50, 'maxHeight': 50})) )
														       .replace(/{{placeName}}/ig, obj.name)
														       .replace(/{{placeRating}}/ig,  protoMap.ratings)
														       .replace(/{{placeDesc}}/ig, obj.vicinity)
														       .replace(/{{placeUrl}}/ig, obj.url)
															   .replace(/{{e}}/ig, ( indexHalf == 5 ? 'half-rated' : (fDigit == 5 ? 'rated' : '') ) )
															   .replace(/{{d}}/ig, ( indexHalf == 4 ? 'half-rated' : (fDigit >= 4 ? 'rated' : '') ) )
															   .replace(/{{c}}/ig, ( indexHalf == 3 ? 'half-rated' : (fDigit >= 3 ? 'rated' : '') ) )
															   .replace(/{{b}}/ig, ( indexHalf == 2 ? 'half-rated' : (fDigit >= 2 ? 'rated' : '') ) )
															   .replace(/{{a}}/ig,  (fDigit >= 1 ? 'rated' : '') );

														       

				protoMap.createMarker( obj );
				

			} );

			//protoMap.map.setCenter(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));

			google.maps.event.addListener(protoMap.map, 'idle', function(){

			    // do something only the first time the map is loaded
			    $('#map-canvas').css('margin-left','350px');

			    $('div.place-list ul').html( protoMap.outputListTpl );

				$('div.place-list').show();

				protoMap.map.setCenter(protoMap.myLocation);

			});


		}

	},

	createMarker: function( place ) {

		var image = {
	      url: place.icon,
	      size: new google.maps.Size(71, 71),
	      origin: new google.maps.Point(0, 0),
	      anchor: new google.maps.Point(17, 34),
	      scaledSize: new google.maps.Size(32, 32)
	    };

		var marker = new google.maps.Marker({
			map: protoMap.map,
			position: place.geometry.location,
			icon: image
		});

		protoMap.overlays.push(marker);

		google.maps.event.addListener(marker, 'click', function() {
			protoMap.infowindow.setContent(place.name);
			protoMap.infowindow.open(protoMap.map, this);
		});

	},


	getLocation: function() {

		if (navigator.geolocation) {

		    navigator.geolocation.getCurrentPosition( protoMap.getPosLatLng );

		} else {

			alert('Your browser doesn\'t support geolocation. Please use latest browser');

		} 

	},

	getPosLatLng: function( position ) {

		var lat 				= parseFloat(position.coords.latitude);
	    var lng 				= parseFloat(position.coords.longitude);
	    protoMap.myLocation 	= new google.maps.LatLng(lat,lng);

		protoMap.map.setCenter(protoMap.myLocation);

	},

	clearOverlays: function() {

		if ( protoMap.overlays[0] != null ) {

			while(protoMap.overlays[0])
			{
			  protoMap.overlays.pop().setMap(null);
			}

		}

	},

	initListTemplate: function() {

		protoMap.listTemplate = 

		'<li>' +
			'<a href={{placeUrl}} class="place-thumb">' +
			    '<img src={{placePhoto}} class = "thumbnail">' +
			'</a>' +
			'<span class="place-desc">' +
		        '<a class="place-name" href={{placeUrl}}>{{placeName}}</a>' +
		        '<div class="place-details">{{placeDesc}}</div>' +
		        '<div class="place-rating">' +
		        	'<ul class="rating-w-images">' +
		      			'<li class = "{{a}}"></li>'+
						'<li class = "{{b}}"></li>'+
						'<li class = "{{c}}"></li>'+
						'<li class = "{{d}}"></li>'+
						'<li class = "{{e}}"></li>'+
					'</ul>' +
		        	'<span class = "rating">{{placeRating}}</span>'+ 
		        '</div>' +
			'</span>' +
		'</li>';

	}


}





