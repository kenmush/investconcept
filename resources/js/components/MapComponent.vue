<template>
  <div>
    <div class="shadow" style="z-index:9999 ;position: absolute;margin-top:80px;
                            margin-left:26px;height:
                            160px;
            width:20rem;">
      <div class="card">
        <div class="card-body">
          <!--Label: Type, Attributes:type -->
          <div class="form-group">
            <label for="type">Type</label>
            <select type="text" class="form-control form-control-sm" id="type"
                    v-model="categoryId"
                    aria-describedby="type-help"
                    @change="getAssetCoordinates"
                    required>
              <option value="type">Type</option>
              <option :value="type.id" v-for="type in categories">{{ type['categoryName'] }}</option>
            </select>

          </div>
        </div>
      </div>
    </div>
    <div
        style="width:100%;height: 549px;background: white;border-radius: 20px;margin-bottom:61px"
        id="maps">
    </div>
  </div>
</template>

<script>
let mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
let map = '';
export default {
  data() {
    return {
      categoryId: '',
      assets: ''
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
      let points = [];
      let Self = this;
      axios.get(`/api/getAllAssets/${this.categoryId}`).then(resp => {
        this.assets = resp.data;

        let ds = Object.keys(resp.data).map(function (datareturned, index) {
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
              'title': Self.assets[datareturned].brand
            }
          })
        });

        let image = 'http://localhost:3000/untapped/twowheeler.png';
        if (this.categoryId === 1) {
          image = 'http://localhost:3000/untapped/twowheeler.png'
        }

        let images = map.listImages()
        Object.keys(images).forEach(function (showimage) {
          if (map.hasImage(images[showimage])) {
            map.removeImage(images[showimage])
          }
        });

        map.loadImage(
            image,
            function (error, image) {
              if (error) throw error;
              map.addImage('custom-marker', image);
              map.addSource('points', {
                'type': 'geojson',
                'data': {
                  'type': 'FeatureCollection',
                  'features': points
                }
              });

// Add a symbol layer
              map.addLayer({
                'id': 'points',
                'type': 'symbol',
                'source': 'points',
                'layout': {
                  'icon-image': 'custom-marker',
// get the title name from the source's "title" property
                  'text-field': ['get', 'title'],
                  'text-font': [
                    'Open Sans Semibold',
                    'Arial Unicode MS Bold'
                  ],
                  'text-offset': [0, 1.25],
                  'text-anchor': 'top'
                }
              });
            }
        );
      }).catch(err => {
        console.log(err)
      });
    }
  },
  mounted() {
    mapboxgl.accessToken = 'pk.eyJ1IjoibXV0aXN5YSIsImEiOiJja2JsN21kejExNjd5MnNvNThyYmNybTNhIn0.BmObv_gTFqLmuc-VObwKYw';
    map = new mapboxgl.Map({
      container: 'maps',
      style: 'mapbox://styles/mapbox/light-v10',
      center: [-2.522805, 27.039787],
      zoom: 2
    });

  },
  created() {
  }
}
</script>
