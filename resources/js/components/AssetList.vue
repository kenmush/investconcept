<template>
  <table class="table">
    <thead style="padding-bottom: 0;margin-bottom: 0">
    <tr class="table-header-untapped">
      <th></th>
      <th>Asset Name</th>
      <th>Numbers</th>
      <th>Ticket</th>
      <th>Return</th>
      <th>Duration</th>
      <th>Social Gain</th>
    </tr>
    </thead>
    <tbody>
<!--    Numbers: 1-->
<!--    categoryName: "Mobile Irrigation"-->
<!--    details: "Data was found"-->
<!--    duration: 12-->
<!--    id: 4-->
<!--    image: "/media/assets/categories/2020/08/09/Irrigation.png"-->
<!--    return_percentage: 10-->
<!--    socialGain: 0-->
<!--    ticket: 1000-->
    <tr v-for="asset in assets">
      <td scope="row">
        <img src="" alt="">
      </td>
      <td>
        <a href="">{{ asset.categoryName }}</a>
      </td>
      <td>{{ asset.Numbers }}</td>
      <td>{{ asset.ticket }} $</td>
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