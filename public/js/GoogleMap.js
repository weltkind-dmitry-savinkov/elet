var GoogleMap = (function () {

    var marker, map;

    return {
        'init': function (id, params) {
            map = new google.maps.Map(document.getElementById(id), params);

            return map;
        },

        'getMap': function () {
            return map;
        },

        /**
         * Generate object of coordinates.
         * @param  double lat [description]
         * @param  double lng [description]
         * @return LatLng     [description]
         */
        'latLng': function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        },

        'marker': function(position) {
            var marker = new google.maps.Marker();

            if (position) {
                var latLng = GoogleMap.latLng(position[0], position[1]);

                marker.setPosition(latLng);
            }

            return marker;
        },

        'setMarker': function(position) {
            if (!marker) {
                marker = GoogleMap.marker(position);

                marker.setMap(map);
            } else {
                var position = GoogleMap.latLng(position[0], position[1]);

                marker.setPosition(position);
            }
        },

        'setCenter': function (lat, lng) {
            var coordinates = GoogleMap.latLng(lat, lng);

            map.setCenter(coordinates);
        },

        'addListener': function (eventName, callback) {
            google.maps.event.addListener(map, eventName, callback);
        }
    };
})();