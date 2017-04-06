var Branches = (function () {
    var mapElemenId = 'map',
        latElement  = document.getElementById('lat'),
        lngElement  = document.getElementById('lng'),
        marker;

    return {
        initMap: function () {
            var mapParams   = {
            zoom: 7,
            center: GoogleMap.latLng(41.409, 74.652)
        };
            GoogleMap.init(mapElemenId, mapParams);

            GoogleMap.addListener('click', Branches.setMarkerHandler);
        },

        setMarker: function (lat, lng) {
            GoogleMap.setMarker([lat, lng]);
        },

        setMarkerHandler: function (event) {
            latElement.value = event.latLng.lat();
            lngElement.value = event.latLng.lng();

            GoogleMap.setMarker([event.latLng.lat(), event.latLng.lng()]);
        }
    };
})();

Branches.initMap();