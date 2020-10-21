<template>
  <div class="row" @mouseleave="disableCards">
    <div class="col-md-6 mb-4">
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
                        <button class="btn btn-custom btn-block btn-lg" @click="showMotorbike"
                                @mouseenter="showMotorbike"
                                @mouseleave="disableCards"
                        >
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
                  <a href="/register" class="btn btn-custom btn-block btn-lg"    @mouseleave="disableCards">Invest</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body ">
          <div class="row">
            <div class="col-md-4">
              <img class="rounded float-left img-thumbnail"
                   src="https://www.prepayment-meter.com/photo/pl14870579-smart_gprs_remote_water_meter_reading_muti_jet_residential_water_meter.jpg"
                   alt="">
            </div>
            <div class="col-md-8" v-if="!showSmartMeter">
              <p style="border-bottom: 3px solid #3e4494">
                Asset of leasing of Smart Meters to support.
                </p>
              <p>Company: Untapped</p>
              <p>Country: Kenya</p>
            </div>
            <div class="col-md-8" v-else>
              <p>Company: Untapped</p>
              <p>Country: Kenya</p>
              <p>Quality water walking distance form home</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card" v-if="!showSmartMeter">
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
                        <button class="btn btn-custom btn-block btn-lg"
                                @mouseenter="showSmartMeterCard"
                                @mouseleave="disableCards"
                                @click="showSmartMeterCard">
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
                  <a href="/register" class="btn btn-custom btn-block btn-lg" @mouseleave="disableCards">Invest</a>
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
      showMotorbikeDetails: false,
      showSmartMeter: false,
      showsSmartMeter: false
    }
  },
  methods: {
    disableCards() {
      this.showSmartMeter = false;
      this.showMotorbikeDetails = false;
    },
    showMotorbike() {
      this.showMotorbikeDetails = !this.showMotorbikeDetails;
      this.showSmartMeter = false;

    },
    showSmartMeterCard() {
      this.showMotorbikeDetails = false;
      this.showSmartMeter = !this.showSmartMeter;
    }
  },
}
</script>

<style scoped lang="scss">
.btn-custom {
  color: #fff;
  background-color: #FF8377;
  border-color: rgba(255, 131, 119, .8);
}

.btn-custom:hover {
  background-color: darken(#FF8377, 30%);
}
</style>