<template>
  <div class="App"/>
</template>

<script>
import MarkerClusterer from '@google/markerclusterer';
import gmapsInit from './utils/gmaps';

const locations = [
  {
    position: {
      lat: 48.160910,
      lng: 16.383330,
    },
  },
  {
    position: {
      lat: 48.174270,
      lng: 16.329620,
    },
  },
  {
    position: {
      lat: 48.146140,
      lng: 16.297030,
    },
  },
  {
    position: {
      lat: 48.135830,
      lng: 16.194460,
    },
  },
  {
    position: {
      lat: 48.306091,
      lng: 14.286440,
    },
  },
  {
    position: {
      lat: 47.503040,
      lng: 9.747070,
    },
  },
];
export default {
  name: "GoogleMapComponent",

  async mounted() {
    let coordinates = [];
    await axios.get(`/api/allAssets`).then(resp => {
      let iconBase = process.env.MIX_APP_URL;
      const icons = {
        community: {
          icon: iconBase + "untapped/community.png",
        },
        mobileirrigation: {
          icon: iconBase + "untapped/mobileirrigation.png",
        },
        motorbike: {
          icon: iconBase + "untapped/twowheeler.png",
        },
      };
      resp.data.map(function (datareturned, index) {
        let iconToDisplay = '';
        if (datareturned.category === 1
            || datareturned.category === 3
            || datareturned.category === 7
        ) {
          iconToDisplay = icons.motorbike.icon
        }
        if (datareturned.category === 2) {
          iconToDisplay = icons.community.icon
        }
        if (datareturned.category === 5) {
          iconToDisplay = icons.mobileirrigation.icon
        }
        if (datareturned.category === 6) {
          iconToDisplay = icons.mobileirrigation.icon
        }
        coordinates.push({
          position: {
            lat: datareturned.latitude,
            lng: datareturned.longitude,
          },
          icon: iconToDisplay
        })
      });
    })
    try {
      const google = await gmapsInit();
      const bounds = new google.maps.LatLngBounds(
          {lat: 3.159339, lng: 36.875788}
      );
      const map = new google.maps.Map(this.$el, {
        zoom: 5,
      });
      map.setCenter({
        lat: 3.159339,
        lng: 12.801858
      })
      // map.fitBounds(bounds);

      const markerClickHandler = (marker) => {
        map.setZoom(13);
        map.setCenter(marker.getPosition());
      };
      const markers = coordinates
          .map((location) => {
            const marker = new google.maps.Marker({...location, map});
            marker.addListener(`click`, () => markerClickHandler(marker));
            return marker;
          });
      const mc = new MarkerClusterer(map, markers, {
        zoom: 4,
        maxZoom: 15,
        imagePath: `https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m`,
        textColor: "red",
      });
      mc.setStyles(mc.getStyles().map(function (style) {
        style.textColor = '#fff';
        return style;
      }));
    } catch (error) {
      console.error(error);
    }
  },
  methods: {}
}
</script>

<style scoped>
html,
body {
  margin: 0;
  padding: 0;
}

.App {
  width: 100%;
  height: 100vh;
}
</style>