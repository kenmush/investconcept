<template>
  <table class="table">
    <thead style="padding-bottom: 0;margin-bottom: 0">
    <tr class="table-header-untapped">
      <th></th>
      <th>Asset Name</th>
      <th>Numbers</th>
      <th>Total Invested</th>
      <th>Balance</th>
      <th>Return</th>
      <th>Duration</th>
      <th>Social Impact</th>
    </tr>
    </thead>
    <tbody>
    <tr v-for="asset in assets">
      <td scope="row">
        <img src="" alt="">
      </td>
      <td>
        <a href="">{{ asset.categoryName }}</a>
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
  methods: {
    getAssets() {
      let userId = document.querySelector('meta[name="user_id"]').content;
      axios.get(`/api/userAssets/${userId}`).then(resp=>{
        this.assets = resp.data;
      });
    }
  },
}
</script>

<style scoped>

</style>