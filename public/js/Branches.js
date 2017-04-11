var Branches = (function () {
    var mapElemenId = 'map',
        latElement  = document.getElementById('lat'),
        lngElement  = document.getElementById('lng'),
        marker;

    return {
        'initMap': function () {
            var mapParams   = {
            zoom: 7,
            center: GoogleMap.latLng(41.409, 74.652)
        };
            GoogleMap.init(mapElemenId, mapParams);

            GoogleMap.addListener('click', Branches.setMarkerHandler);
        },

        'setMarker': function (lat, lng) {
            GoogleMap.setMarker([lat, lng]);
        },

        'set': function (items) {
            items        = JSON.parse(items);
            var branches = items.data;

            for (index in branches) {
                GoogleMap.setMarker([branches[index]['lat'], branches[index]['lng']]);
            }
        },

        'setMarkerHandler': function (event) {
            latElement.value = event.latLng.lat();
            lngElement.value = event.latLng.lng();

            GoogleMap.setMarker([event.latLng.lat(), event.latLng.lng()]);
        },

        'focus': function (lat, lng) {
            GoogleMap.setCenter(lat, lng);
        }
    };
})();

Branches.initMap();