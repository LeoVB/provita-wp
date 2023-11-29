(function ($) {
    mapboxgl.accessToken = 'pk.eyJ1IjoibGVvMTgwMDcwMiIsImEiOiJjbHBiaGJkbWkwZTZ2Mm1wYmw2bjc1dTNkIn0.fFE0ECjpaIwoqkWrlIJEAA';
    const centerOfPR = [-66.5901, 18.2208];
    const map = new mapboxgl.Map({
        container: 'map-dealers',
        center: centerOfPR,
        zoom: 15,
        style: 'mapbox://styles/leo1800702/clpbirnjn004o01qmfc625gr5',
    });

    const gj = {
        "type": "FeatureCollection",
        "features": []
    };

    $.each(dealers_locations, function (i) {
        gj.features.push({
            "type": "Feature",
            "properties": {
                "name": dealers_locations[i].title,
                "address": dealers_locations[i].address,
                "phone": dealers_locations[i].phone
            },
            "geometry": {
                "type": "Point",
                "coordinates": [dealers_locations[i].longitude, dealers_locations[i].latitude]
            }
        });
    });

    gj.features.forEach(function (store, i) {
        store.properties.id = i;
    });

    map.on('load', () => {
        map.loadImage(
            'http://provitapet.local/wp-content/uploads/2023/11/download-68.png',
            (error, image) => {
                if (error) throw error;
                map.addImage('custom-marker', image);
                loadMap(gj);
                setupEventListeners();
            }
        );
    });

    function setupEventListeners() {
        map.on('click', 'locations', handleClusterClick);
        map.on('click', 'unclustered-point', handleUnclusteredPointClick);
        map.on('mouseenter', 'clusters', handleClusterMouseEnter);
        map.on('mouseleave', 'clusters', handleClusterMouseLeave);
        map.on('mouseenter', 'unclustered-point', handleUnclusteredPointMouseEnter);
        map.on('mouseleave', 'unclustered-point', handleUnclusteredPointMouseLeave);
        map.on('click', 'unclustered-point', handleUnclusteredPointClick);
    }

    function handleClusterClick(e) {
        const features = map.queryRenderedFeatures(e.point, { layers: ['clusters'] });
        const clusterId = features[0].properties.cluster_id;
        map.getSource('places').getClusterExpansionZoom(clusterId, (err, zoom) => {
            if (err) return;
            map.easeTo({ center: features[0].geometry.coordinates, zoom: zoom });
        });
    }

    function handleClusterMouseEnter() {
        map.getCanvas().style.cursor = 'pointer';
    }

    function handleClusterMouseLeave() {
        map.getCanvas().style.cursor = '';
    }

    function handleUnclusteredPointMouseEnter() {
        map.getCanvas().style.cursor = 'pointer';
    }

    function handleUnclusteredPointMouseLeave() {
        map.getCanvas().style.cursor = '';
    }

    function handleUnclusteredPointClick(e) {
        const properties = e.features[0].properties;
        const coordinates = e.features[0].geometry.coordinates.slice();
    
        // Construir el contenido HTML del Popup dinámicamente
        const popupContent = `
            <h3>${properties.name}</h3>
            <h4>${properties.address}</h4>
            <h4>Phone: ${properties.phone}</h4>
            <h4><a href="https://www.waze.com/ul?ll=${coordinates[1]},${coordinates[0]}&navigate=yes" target="_blank">Open in Waze</a></h4>
        `;
    
        new mapboxgl.Popup()
            .setLngLat(coordinates)
            .setHTML(popupContent)
            .addTo(map);
    
        map.flyTo({
            center: coordinates,
            zoom: 20,
            speed: 1.5,
            essential: true,
        });
    }

    function loadMap(layer) {
        map.setZoom(6);
        map.addSource('places', {
            type: 'geojson',
            data: layer,
            cluster: true,
            clusterMaxZoom: 20,
            clusterRadius: 50
        });

        map.addLayer({
            id: 'clusters',
            type: 'circle',
            source: 'places',
            filter: ['has', 'point_count'],
            paint: {
                'circle-color': ['step', ['get', 'point_count'], '#ff3d47', 20, '#d72a34', 300, '#d72a34'],
                'circle-radius': ['step', ['get', 'point_count'], 20, 20, 30, 300, 40]
            }
        });

        map.addLayer({
            id: 'cluster-count',
            type: 'symbol',
            source: 'places',
            filter: ['has', 'point_count'],
            layout: {
                'text-field': '{point_count_abbreviated}',
                'text-font': ['DIN Offc Pro Medium', 'Arial Unicode MS Bold'],
                'text-size': 14
            },
            paint: { "text-color": "#ffffff" }
        });

        map.addLayer({
            id: 'unclustered-point',
            type: 'symbol',
            source: 'places',
            filter: ['!', ['has', 'point_count']],
            'layout': {
                'icon-image': 'custom-marker',
                'text-field': ['get', 'title'],
                'text-font': ['Open Sans Semibold', 'Arial Unicode MS Bold'],
                'text-offset': [0, 1.25],
                'text-anchor': 'top'
            }
        });
    }
})(jQuery);
