<template>
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body ">
          <div class="row">
            <div class="col-md-4">
              <img class="rounded float-left img-thumbnail"
                   src="https://image.made-in-china.com/202f0j00CysEiJcznHgr/125cc-150cc-off-Road-Motorbike-TM125-2.jpg"
                   alt="">
            </div>
            <div class="col-md-8" v-if="!showMotorbikeDetails">
              <p style="border-bottom: 3px solid #3e4494">Asset of leasing of motorbikes to support
                mototaxis in Uganda.</p>
              <p>Company: Zembo</p>
              <p>Country: Uganda</p>
            </div>
            <div class="col-md-8" v-else>
              <p>Company: Zembo</p>
              <p>Country: Uganda</p>
              <p>Zembo provides affordable electric motorcycles for motorcycle taxi drivers in Africa, the Company
                has already 100 motorbikes on site in Kampala, Uganda. The Company leases its motorbikes to taxi
                drivers in a lease-to-own contract over 24 months for 60000 UGX per week.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card" v-if="!showMotorbikeDetails">
                <div class="card-body">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-4">
                        <p>$500</p>
                        <p>Minimum Investment</p>
                      </div>
                      <div class="col-md-4">
                        <p>9%</p>
                        <p>APY</p>
                      </div>
                      <div class="col-md-4">
                        <p>18</p>
                        <p>18 Month term</p>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg" @click="showMotorbike">
                          See Details
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div v-else>
                <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse">
                  <thead class="thead-default">
                  <tr>
                    <th>For the Entrepreneur</th>
                    <th>$700 <br>Moto</th>
                    <th>$120/Month <br>Avg. Income</th>
                    <th>$45/Month <br>Lease Payments</th>
                  </tr>
                  <tr>
                    <th>For You:</th>
                    <th>$500 <br>Minimum Investment</th>
                    <th>9% <br>APY</th>
                    <th>18 Month <br>Term</th>
                  </tr>
                  </thead>

                </table>
                <div class="row">
                  <a href="/register" class="btn btn-primary btn-block">Invest</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "assets",
  data() {
    return {
      showMotorbikeDetails: false
    }
  },
  methods: {
    showMotorbike() {
      this.showMotorbikeDetails = !this.showMotorbikeDetails;
    }
  },
}
</script>

<style scoped>

</style>