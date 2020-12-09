<template>
  <div>
    <div
        style="z-index:1 ;position: absolute;margin-top:80px;
                            margin-left:26px;height:
                            160px; width:20rem;">
      <div class="card ml-5">
        <div class="card-title">
        </div>
        <div class="card-body">
          <!--Label: Type, Attributes:type -->
          <div class="form-group">
            <label for="type">Type </label>
            <select type="text" class="form-control form-control-sm" id="type"
                    v-model="categoryId"
                    aria-describedby="type-help"
                    @change="getAssetCoordinates"
                    required>
              <option value="type">All</option>
              <option :value="type.id" v-for="type in categories">{{ type['categoryName'] }}</option>
            </select>
            <!--Label: Country, Attributes:country -->
            <div class="form-group mt-3">
              <label for="country">Country </label>
              <select type="text" class="form-control" id="country" v-model="country"
                      aria-describedby="country-help"
                      :class="[errors.country ? 'is-invalid': '',!errors.country && Object.keys(errors).length > 1 ? 'is-valid': '']"
                      required>
                <option value="Kenya" selected>Kenya</option>
              </select>
              <div class="invalid-feedback" v-if="errors.country">
                {{ errors.country.toString() }}
              </div>
            </div>
            <!--Label: Return, Attributes:return -->
            <!--Label: Returns, Attributes:returns -->
            <!--            <div class="form-group">-->
            <!--              <label for="returns">Return </label>-->

            <!--              <select type="text" class="form-control" id="returns" v-model="returns"-->
            <!--                     aria-describedby="returns-help"-->
            <!--                     :class="[errors.returns ? 'is-invalid': '',!errors.returns && Object.keys(errors).length > 1 ? 'is-valid': '']"-->
            <!--                     placeholder="Returns" required>-->
            <!--                <option value="returns" selected>10% Return</option>-->
            <!--              </select>-->
            <!--              <div class="invalid-feedback" v-if="errors.returns">-->
            <!--                {{ errors.returns.toString()}}-->
            <!--              </div>-->
            <!--            </div>-->
          </div>
        </div>
      </div>
    </div>
    <div
        style="width:100%;height: 549px;background: white;margin-bottom:61px"
        id="maps">
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
      categoryId: 'type',
      errors: '',
      country: 'Kenya',
      returns: '',
      assets: '',
      loading: false
    }
  },
  props: {
    categories: {
      type: Object | Array,
      default: {}
    },
  },
  methods: {
    getAssetCoordinates() {
      this.loading = true;
      let url = process.env.MIX_APP_URL;
      let points = [];
      let Self = this;
      axios.get(`/api/allAssets`).then(resp => {
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

        this.loading = false;
      }).catch(err => {
        this.loading = false;
      });
    },
    getCoordinates() {
      var geojson = [
        {
          type: 'Feature',
          geometry: {
            type: 'Point',
            coordinates: [-77.031952, 38.913184]
          },
          properties: {
            icon: {
              iconUrl: 'https://www.mapbox.com/mapbox.js/assets/images/astronaut1.png',
              iconSize: [50, 50], // size of the icon
              iconAnchor: [25, 25], // point of the icon which will correspond to marker's location
              popupAnchor: [0, -25], // point from which the popup should open relative to the iconAnchor
              className: 'dot'
            }
          }
        },
        {
          type: 'Feature',
          geometry: {
            type: 'Point',
            coordinates: [-122.413682, 37.775408]
          },
          properties: {
            icon: {
              iconUrl: 'https://www.mapbox.com/mapbox.js/assets/images/astronaut2.png',
              iconSize: [50, 50], // size of the icon
              iconAnchor: [25, 25], // point of the icon which will correspond to marker's location
              popupAnchor: [0, -25], // point from which the popup should open relative to the iconAnchor
              className: 'dot'
            }
          }
        }
      ];
      map.on('layeradd', function (e) {
        var marker = e.layer,
            feature = marker.feature;
        marker.setIcon(L.icon(feature.properties.icon));
      });
      map.setGeoJSON(geojson);
      map.scrollWheelZoom.disable();
    }
  },
  mounted() {
    this.getAssetCoordinates();
    mapboxgl.accessToken = 'pk.eyJ1IjoibXV0aXN5YSIsImEiOiJja2JsN21kejExNjd5MnNvNThyYmNybTNhIn0.BmObv_gTFqLmuc-VObwKYw';
    map = new mapboxgl.Map({
      container: 'maps',
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
  },
  created() {
  }
}
</script>
