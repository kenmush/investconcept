<template>
  <div>
    <table class="table">
      <thead style="padding-bottom: 0;margin-bottom: 0">
      <tr class="table-header-untapped">
        <th></th>
        <th>Asset Name</th>
        <th>Units</th>
        <th>Total Invested</th>
        <th>Balance</th>
        <th>Interest Generated</th>
        <th>Duration</th>
        <th>Impact Multiplier</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="asset in assets">
        <td scope="row">
          <img src="" alt="">
        </td>
        <td>
          <a href="/assets/mobile-irrigation" v-if="asset.categoryName === 'Mobile Irrigation'">{{
              asset.categoryName
            }}</a>
          <a href="/assets/raw-water-atm" v-if="asset.categoryName === 'Raw Water ATM'">{{ asset.categoryName }}</a>
          <a href="/assets/smartmeter" v-if="asset.categoryName === 'Smart Meter'">{{ asset.categoryName }}</a>
          <a href="/assets/motorbike" v-if="asset.categoryName === 'Motorbike'">{{ asset.categoryName }}</a>
        </td>
        <td>{{ asset.Numbers }}</td>
        <td>{{ asset.ticket }} $</td>
        <td></td>
        <td>{{ asset.return_percentage }}%</td>
        <td>{{ asset.duration }} Months</td>
        <td>{{ asset.socialGain }}</td>
      </tr>
      </tbody>
    </table>
    <canvas id="myChart" width="400px" height="200px"></canvas>
  </div>

</template>

<script>
export default {
  name: "AssetList",
  data() {
    return {
      assets: ''
    }
  },
  created() {
    this.getAssets();
  },
  mounted() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['0', '1', '2', '3', '6', '10'],
        datasets: [{
          label: 'Impact',
          data: [83333, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        },
          {
            label: 'Personal Return',
            data: [20, 23, 4, 9, 7, 12],
            backgroundColor: [
              'rgb(99,224,255)',
              'rgb(123,235,54)',
              'rgb(255,86,125)',
              'rgb(192,139,75)',
              'rgb(107,255,102)',
              'rgb(64,188,255)'
            ],
            borderColor: [
              'rgb(99,224,255)',
              'rgb(123,235,54)',
              'rgb(255,86,125)',
              'rgb(192,139,75)',
              'rgb(107,255,102)',
              'rgb(64,188,255)'
            ],
            borderWidth: 1
          }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  },
  methods: {
    getAssets() {
      let userId = document.querySelector('meta[name="user_id"]').content;
      axios.get(`/api/userAssets/${userId}`).then(resp => {
        this.assets = resp.data;
      });
    }
  },
}
</script>

<style scoped>

</style>