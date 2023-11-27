(function ($) {
    mapboxgl.accessToken = 'pk.eyJ1IjoibGVvMTgwMDcwMiIsImEiOiJjbHBiaGJkbWkwZTZ2Mm1wYmw2bjc1dTNkIn0.fFE0ECjpaIwoqkWrlIJEAA';


    // Obtiene la primera parte del path

    const map = new mapboxgl.Map({
        container: 'map-dealers',
        center: [-70.162651, 18.735693],
        zoom: 20,
        style: 'mapbox://styles/leo1800702/clpbirnjn004o01qmfc625gr5',
    });


    var gj = {
        "type": "FeatureCollection",
        "features": []
    };

    $.each(dealers_locations, function (i) {
        gj.features.push({
            "type": "Feature",
            "properties": {
                "name": "",
                "address": "",
                "phone": ""
            },
            "geometry": {
                "type": "Point",
                "coordinates": []
            }
        });
        gj.features[i].properties.name = dealers_locations[i].title;
        gj.features[i].properties.address = dealers_locations[i].address;
        gj.features[i].geometry.coordinates.push(dealers_locations[i].longitude, dealers_locations[i].latitude);
    });


    gj.features.forEach(function (store, i) {
        store.properties.id = i;
    });

    map.on('load', () => {
        loadmap(gj);
        addMarkers();

        function addMarkers() {
            /* For each feature in the GeoJSON object above: */
            for (const marker of gj.features) {
                /* Create a div element for the marker. */
                const el = document.createElement('div');
                /* Assign a unique `id` to the marker. */
                el.id = `marker-${marker.properties.id}`;
                /* Assign the `marker` class to each marker for styling. */
                el.className = 'marker';

                /**
                 * Create a marker using the div element
                 * defined above and add it to the map.
                 **/
                new mapboxgl.Marker(el, { offset: [0, -23] })
                    .setLngLat(marker.geometry.coordinates)
                    .addTo(map);
                el.addEventListener('click', (e) => {
                    /* Fly to the point */
                    flyToStore(marker);
                    /* Close all other popups and display popup for clicked store */
                    createPopUp(marker);
                    /* Highlight listing in sidebar */
                    const activeItem = document.getElementsByClassName('active');
                    e.stopPropagation();
                    if (activeItem[0]) {
                        activeItem[0].classList.remove('active');
                    }
                    // const listing = document.getElementById(`listing-${marker.properties.id}`);
                    // listing.classList.add('active');
                });
            }
        }


    });

    map.on('click', (event) => {
        /* Determine if a feature in the "locations" layer exists at that point. */
        // const features = map.queryRenderedFeatures(event.point, {
        //     layers: ['locations']
        // });

        // /* If it does not exist, return */
        // if (!features.length) return;

        // const clickedPoint = features[0];

        // /* Fly to the point */
        // flyToStore(clickedPoint);

        // /* Close all other popups and display popup for clicked store */
        // createPopUp(clickedPoint);




    });


    function flyToStore(currentFeature) {
        map.flyTo({
            center: currentFeature.geometry.coordinates,
            zoom: 10
        });
    }

    function createPopUp(currentFeature) {
        const popUps = document.getElementsByClassName('mapboxgl-popup');
        /** Check if there is already a popup on the map and if so, remove it */
        if (popUps[0]) popUps[0].remove();

        const popup = new mapboxgl.Popup({ closeOnClick: true })
            .setLngLat(currentFeature.geometry.coordinates)
            .setHTML(`<h3>Sweetgreen</h3><h4>${currentFeature.properties.address}</h4><h4>Waze: </h4>`)
            .addTo(map);


    }


    function loadmap(layer) {
        map.setZoom(6);
        map.addSource('places', {
            type: 'geojson',
            data: layer
        });

        // map.addLayer({
        //     id: 'locations',
        //     type: 'geojson',
        //     /* Add a GeoJSON source containing place coordinates and information. */
        //     source: {
        //         type: 'geojson',
        //         data: layer
        //     }
        // });


    }
})(jQuery);