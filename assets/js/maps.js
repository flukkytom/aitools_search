if ($('#map_todo_listing').length > 0) {
(function(A) {
	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

		var
		mapObject,
		markers = [],
		markersData = {
			'Marker': [
			{
				name: 'Lagon Theme Park',
				location_latitude: 40.867258,
				location_longitude: -73.963286,
				map_image_url: 'assets/images/todo/map.jpg',
                map_marker: 'assets/images/icon/marker/5.png',
				rate: '4',
				name_point: 'Lagon Theme Park',
				url_point: 'listing-details.html',
				review: '12 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{
				name: 'Genji Restaurent',
				location_latitude: 40.834796, 
				location_longitude: -73.980836,
				map_image_url: 'assets/images/todo/map.jpg',
                map_marker: 'assets/images/icon/marker/4.png',
				rate: '5',
				name_point: 'Genji Restaurent',
				url_point: 'single-listing-two.html',
				review: '11 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{ 
				name: 'Lagon Theme Park',
				location_latitude: 40.804556,
				location_longitude: -74.035763,
				map_image_url: 'assets/images/todo/map.jpg',
                 map_marker: 'assets/images/icon/marker/1.png',
				rate: '3.5',
				name_point: 'Lagon Theme Park',
				url_point: 'listing-details.html',
				review: '10 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{ 
				name: 'Cafe Intermezzo',
				location_latitude: 40.846224,
				location_longitude: -74.111293,
				map_image_url: 'assets/images/todo/map.jpg',
                map_marker: 'assets/images/icon/marker/3.png',
				rate: '4.5',
				name_point: 'Cafe Intermezzo',
				url_point: 'single-listing-two.html',
				review: '9 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{
				name: 'Four Seasons Resort',
				location_latitude: 40.797121, 
				location_longitude: -74.152422,
				map_image_url: 'assets/images/todo/map.jpg',
                map_marker: 'assets/images/icon/marker/2.png',
				rate: '5',
				name_point: 'Four Seasons Resort',
				url_point: 'listing-details.html',
				review: '8 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
            {
				name: 'Kris Beauty Carnaval',
				location_latitude: 40.854556,
				location_longitude: -74.035763,
				map_image_url: 'assets/images/todo/map.jpg',
				map_marker: 'assets/images/icon/marker/1.png',
				rate: '4.5',
				name_point: 'Ocean Paradise',
				url_point: 'listing-details.html',
				review: '13 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{
				name: 'Lagon Theme Park',
				location_latitude: 40.821121, 
				location_longitude: -74.111111,
				map_image_url: 'assets/images/todo/map.jpg',
                map_marker: 'assets/images/icon/marker/5.png',
				rate: '4',
				name_point: 'Lagon Theme Park',
				url_point: 'listing-details.html',
				review: '12 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{
				name: 'Genji Restaurent',
				location_latitude: 40.822121, 
				location_longitude: -74.111111,
				map_image_url: 'assets/images/todo/map.jpg',
                map_marker: 'assets/images/icon/marker/4.png',
				rate: '5',
				name_point: 'Genji Restaurent',
				url_point: 'single-listing-two.html',
				review: '11 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{ 
				name: 'Lagon Theme Park',
				location_latitude: 40.821121, 
				location_longitude: -74.100111,
				map_image_url: 'assets/images/todo/map.jpg',
                 map_marker: 'assets/images/icon/marker/1.png',
				rate: '3.5',
				name_point: 'Lagon Theme Park',
				url_point: 'listing-details.html',
				review: '10 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{ 
				name: 'Cafe Intermezzo',
				location_latitude: 40.822121, 
				location_longitude: -74.100111,
				map_image_url: 'assets/images/todo/map.jpg',
                map_marker: 'assets/images/icon/marker/3.png',
				rate: '4.5',
				name_point: 'Cafe Intermezzo',
				url_point: 'single-listing-two.html',
				review: '9 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
			{
				name: 'Four Seasons Resort',
				location_latitude: 40.821321, 
				location_longitude: -74.101211,
				map_image_url: 'assets/images/todo/map.jpg',
                map_marker: 'assets/images/icon/marker/2.png',
				rate: '5',
				name_point: 'Four Seasons Resort',
				url_point: 'listing-details.html',
				review: '8 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			},
            {
				name: 'Kris Beauty Carnaval',
				location_latitude: 40.821021, 
				location_longitude: -74.101011,
				map_image_url: 'assets/images/todo/map.jpg',
				map_marker: 'assets/images/icon/marker/1.png',
				rate: '4.5',
				name_point: 'Ocean Paradise',
				url_point: 'listing-details.html',
				review: '13 ratings',
                address: 'Barcelona, ES',
                status: 'Open Now'
			}
			]

		};

			var mapOptions = {
				zoom: 12,
				center: new google.maps.LatLng(40.839500, -74.096002),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
				scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [
                    {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                    "color": "#444444"
                    }
                    ]
                    },
                    {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                    {
                    "color": "#f2f2f2"
                    }
                    ]
                    },
                    {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                    {
                    "visibility": "off"
                    }
                    ]
                    },
                    {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                    {
                    "saturation": -100
                    },
                    {
                    "lightness": 45
                    }
                    ]
                    },
                    {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                    {
                    "visibility": "simplified"
                    }
                    ]
                    },
                    {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                    {
                    "visibility": "off"
                    }
                    ]
                    },
                    {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                    {
                    "visibility": "off"
                    }
                    ]
                    },
                    {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                    {
                    "color": "#cfcfcf"
                    },
                    {
                    "visibility": "on"
                    }
                    ]}],
			};
			var marker;
			mapObject = new google.maps.Map(document.getElementById('map_todo_listing'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
                    marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: item.map_marker,
					});
					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
				  closeInfoBox();
				  getInfoBox(item).open(mapObject, this);
				  mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
				 }));

	});

	new MarkerClusterer(mapObject, markers[key]);
	
		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};
	
	

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info" id="marker_info">' +
				'<div class="thumb"><img src="' + item.map_image_url + '" alt=""/><a href="#" class="save"><i class="fa fa-heart"></i>save</a></div>' +
				'<div>'+ 
					'<h3><a href="'+item.url_point+'">'+ item.name_point +'</a></h3>' +
					'<div class="rating"><span class="infobox_rate">'+ item.rate +'</span>' +
					'<span class="btn_infobox_reviews">'+ item.review +'</span></div>' +
					'<div class="location-status"><div class="todo-location"><span class="icon-location"></span>'+ item.address +'</div>' +
                    '<div class="todo-status">'+ item.status +'</div></div>' +
					'</div>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 92),
				closeBoxMargin: '',
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});
		};
function onHtmlClick(location_type, key){
     google.maps.event.trigger(markers[location_type][key], "click");
}
}