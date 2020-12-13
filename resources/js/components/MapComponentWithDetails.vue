<template>
  <div class="row" style="padding-top: 13px;min-height: 20rem">
    <div class="col-md-10">
      <div class="shadow"
           style="z-index:1 ;position: absolute;margin-top:80px; margin-left:26px; width:20rem;">

      </div>
      <div
          style="width:100%;height: 549px;background: white;border-radius: 20px;margin-bottom:61px"
          id="newmap">
      </div>
    </div>
    <div class="col-md-2">
      <div class="card shadow" style=";margin-left: -50px">
        <div class="card-body">
          <div>
            <div style="border-top: 57px">
              <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Asset</h3>
              <p style="font: Bold 20px/24px Roboto;color: #565C59;">{{ description}}</p>
            </div>
            <div style="border-top: 57px">
              <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Asset Owner Name</h3>
              <p style="font: Bold 20px/24px Roboto;color: #565C59;"></p>
            </div>
            <div style="border-top: 57px">
              <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Country</h3>
              <p style="font: Bold 20px/24px Roboto;color: #565C59;">Kenya</p>
            </div>
            <div style="border-top: 57px">
              <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Partner</h3>
              <p style="font: Bold 20px/24px Roboto;color: #565C59;"></p>
            </div>
            <div style="border-top: 57px">
              <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Activity</h3>
              <p style="font: Bold 20px/24px Roboto;color: #565C59;"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import 'mapbox-gl/src/css/mapbox-gl.css'
let mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
let map = '';
export default {
  data() {
    return {
      categoryId: 'All',
      errors: '',
      returns: '',
      country: 'Kenya',
      assets: '',
      loading: false,
      description: '',
      revenue: '',
      serial: '',
      category: '',
      selectedcategory: ''
    }
  },
  props: {
    categories: {
      type: Object | Array,
      default: {}
    },
    investorid: {
    }
  },
  methods: {
    getAssetCoordinates() {
      this.loading = true;
      // let url = 'http://localhost:3000';
      let url = process.env.MIX_APP_URL;
      let points = [];
      let Self = this;
      let categoryAsset = _.find(this.categories, function (o) {
        return o.id === Self.categoryId;
      });

      axios.get(`/api/getCoordinates`).then(resp => {
        this.assets = resp.data;
        let ds = Object.keys(resp.data).map(function (datareturned, index) {
          let assetURL = "";
          if (Self.assets[datareturned].brand === null || Self.assets[datareturned].brand === "null") {
            assetURL = Self.assets[datareturned].fullName
            console.log(Self.assets[datareturned].fullName)
          } else {
            assetURL = Self.assets[datareturned].fullName
          }
          let image = `${url}/untapped/twowheeler.png`;
          if (Self.assets[datareturned].category === 1
              || Self.assets[datareturned].category === 3
              || Self.assets[datareturned].category === 7
          ) {
            image = `${url}/untapped/twowheeler.png`
          }
          if (Self.assets[datareturned].category === 6) {
            image = `${url}/untapped/community.png`
          }
          if (Self.assets[datareturned].category === 5) {
            image = `${url}/untapped/mobileirrigation.png`
          }
          if (Self.assets[datareturned].category === 2) {
            image = `${url}/untapped/community.png`
          }

          points.push({
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [
                Self.assets[datareturned].longitude,
                Self.assets[datareturned].latitude
              ]
            },
            'properties': {
              'title': assetURL,
              'icon': image
            }
          });
        });


        if (map.getLayer('points')) map.removeLayer('points');
        if (map.getSource('points')) map.removeSource('points');
        if (map.hasImage('custom-marker')) map.removeImage('custom-marker');
        map.addSource('points', {
          'type': 'geojson',
          'data': {
            'type': 'FeatureCollection',
            'features': points
          }
        });

        map.on("styleimagemissing", e => {
          console.log("loading missing image: " + e.id);
          if (
              e.id === `${url}/untapped/twowheeler.png` ||
              e.id === `${url}/untapped/smartmeter.png` ||
              e.id === `${url}/untapped/community.png` ||
              e.id === `${url}/untapped/emotorbikes.png` ||
              e.id === `${url}/untapped/mobileirrigation.png` ||
              e.id === `${url}/untapped/irrigationmapicon.png`
          ) {
            map.loadImage(e.id, (error, image) => {
              if (error) throw error;
              if (!map.hasImage(e.id)) map.addImage(e.id, image);
            });
          }
        });
        map.addLayer({
          'id': 'points',
          'type': 'symbol',
          'source': 'points',
          'layout': {
            'icon-image': ['get', 'icon'],
            'text-field': ['get', 'title'],
            'text-font': [
              'Open Sans Semibold',
              'Arial Unicode MS Bold'
            ],
            'text-offset': [0, 1.25],
            'text-anchor': 'top'
          },

        });
        map.on('click', 'points', function (e) {
          let category = categoryAsset.categoryName;
          var coordinates = e.features[0].geometry.coordinates.slice();
          var description = e.features[0].properties.title;
          var revenue = e.features[0].properties.revenue;
          var serial = e.features[0].properties.serial;

          while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
          }

          Self.description = description;
          Self.category = category;
          Self.revenue = revenue;
          Self.serial = serial;
        });


// Change the cursor to a pointer when the mouse is over the places layer.
        map.on('mouseenter', 'places', function () {
          map.getCanvas().style.cursor = 'pointer';
        });

// Change it back to a pointer when it leaves.
        map.on('mouseleave', 'places', function () {
          map.getCanvas().style.cursor = '';
        });
        this.loading = false;
      }).catch(err => {
        this.loading = false;
      });
    }
  },
  mounted() {
    console.log(`${this.investorid}`)
    mapboxgl.accessToken = 'pk.eyJ1IjoibXV0aXN5YSIsImEiOiJja2JsN21kejExNjd5MnNvNThyYmNybTNhIn0.BmObv_gTFqLmuc-VObwKYw';
    map = new mapboxgl.Map({
      container: 'newmap',
      style: 'mapbox://styles/mapbox/light-v10',
      center: [-2.522805, 27.039787],
      zoom: 2,
      minZoom: 2,
    });
    var nav = new mapboxgl.NavigationControl({
      showCompass: false,
      showZoom: true
    });

    map.addControl(nav, 'top-right')
    // var biggerSmaller;
    //
    // map.on('load', function () {
    //   var mapCanvas = document.getElementsByClassName('mapboxgl-canvas')[0];
    //   var mapDiv = document.getElementById('newmap');
    //
    //   mapDiv.style.width = '100%';
    //   mapCanvas.style.width = '100%';
    //   mapCanvas.style.height = '100%';
    //   mapDiv.style.height = '100%';
    //   map.resize();
    // });
    this.categoryId = 1;
    this.getAssetCoordinates();
  },
  created() {
  }
}
</script>
