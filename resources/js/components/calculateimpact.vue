<template>
  <div class="">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h2>If I Invest <span class="orangeinput needstext" contenteditable="true" @input="onInput">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            $ on
            <span class="orangeinput needstext" contenteditable="true" @input="onYearUpdate">{{ years }}</span> year.
          </h2>
          <svg v-if="loading" id="star" xmlns="http://www.w3.org/2000/svg" width="68.918" height="68.918"
               viewBox="0 0 68.918 68.918">
            <g
                transform="translate(25.047 -0.668) rotate(30)" opacity="0.5">
              <g transform="translate(0.489 0.489)">
                <rect width="50.452" height="50.452" fill="none"/>
              </g>
              <g transform="translate(6.664 6.663)">
                <path
                    d="M36.869,3H7.234A4.246,4.246,0,0,0,3,7.234V36.869A4.246,4.246,0,0,0,7.234,41.1H36.869A4.246,4.246,0,0,0,41.1,36.869V7.234A4.246,4.246,0,0,0,36.869,3ZM24.232,11.594l2.244-2.244,2.985,2.985,2.985-2.985,2.244,2.244L31.7,14.579l2.985,2.985-2.244,2.244-2.985-2.964-2.985,2.985-2.244-2.244L27.217,14.6ZM9.88,12.991H20.464v3.175H9.88ZM20.993,30.519H16.759v4.234H13.584V30.519H9.351V27.344h4.234V23.11h3.175v4.234h4.234Zm13.759,2.646H24.168V29.99H34.753Zm0-5.292H24.168V24.7H34.753Z"
                    transform="translate(-3 -3)" fill="#868780"/>
              </g>
            </g>
          </svg>
          <!--        <i class="fa fa-spin fa-spinner fa-2x" ></i>-->
          <div v-if="calculations" style="margin-top: 31.5px !important;">
            <div class="row">
              <!--              <div class="d-flex justify-content-center text-center">-->
              <!--                <h3>I CREATE:</h3>-->
              <!--              </div>-->
            </div>
            <div class="row">
              <div class="col-12">
                <div class="border"></div>
                <div class="row" style="margin-top: 46.53px">
                  <div class="col-md-6" style="position: relative;z-index: 10">
                    <img style="z-index: 1; margin-bottom: -60px;" src="./assets/monetization.svg" alt="">
                    <p class="toptext">
                <span class="orangeinput">
                {{ impact.toLocaleString() }} $ <br>
              </span> of cumulated revenues
                    </p>
                  </div>
                  <div class="col-md-6" style="position: relative;z-index: 10">
                    <img style="z-index: 1;margin-bottom: -87px;" src="./assets/person.svg"
                         alt="">
                    <p class="toptext">
                      <span class="orangeinput" style="position: relative">
                            {{ entreprenuars.toLocaleString() }} <br>
                              </span> entrepreneurs </p>
                  </div>
                </div>
                <div class="row" style="margin-top: 46.53px">
                  <div class="col-md-6" style="position: relative;z-index: 10">
                    <img style="z-index: 1; margin-bottom: -60px;" src="./assets/monetization.svg" alt="">
                    <p class="toptext">
                <span class="orangeinput">
                {{ overallreturn }} % <br>
              </span> Overall Return
                    </p>
                  </div>
                  <div class="col-md-6" style="position: relative;z-index: 10">
                    <img style="z-index: 1;margin-bottom: -87px;" src="./assets/person.svg"
                         alt="">
                    <p class="toptext">
                      <span class="orangeinput" style="position: relative">
                            {{ socialReturn.toLocaleString() }}x <br>
                              </span> Social return on money </p>
                  </div>
                </div>
                <div style="margin-top: 3em;margin-bottom: 3em">
                 <button class="btn btn-secondary"> <i class="fa fa-arrow-down"></i> More</button>
                </div>
                <div class="container" style="margin-top: 10px !important;">
                  <div class="d-flex justify-content-between">
                    <div>
                      <img style="z-index: 1; margin-bottom: -19px;" src="./assets/motorbike.svg" alt="">
                      <p class="supportingtext"><span class="orangeinput ">{{ motorbikes.toLocaleString() }}</span>
                        Motorbikes</p>
                    </div>
                    <div>
                      <img style="z-index: 1; margin-bottom: -19px;" src="./assets/pump.svg" alt="">
                      <p class="supportingtext"><span class="orangeinput ">{{ wateratm.toLocaleString() }}</span>
                        Water
                        ATM</p>
                    </div>
                    <div>
                      <img style="z-index: 1; margin-bottom: -19px;" src="./assets/purification.svg" alt="">
                      <p class="supportingtext"><span class="orangeinput ">{{ trailer.toLocaleString() }}</span>
                        Irrigation Trailer</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="container">
                      <div class="table-responsive">
                        <table class="table table-borderless part-result" style="background-color: transparent">
                          <thead class="thead-light">
                          <tr>
                            <th></th>
                            <th>Asset</th>
                            <th>Amount ($)</th>
                            <th>Number</th>
                            <th>Return</th>
                            <th>Social Impact</th>
                            <th>Leverage</th>
                          </tr>
                          </thead>
                          <tbody style="background-color: white">
                          <tr style="background-color: white">
                            <td scope="row">
                              <img src="/untapped/twowheeler.svg" alt="">
                            </td>
                            <td>Motorcycle</td>
                            <td>{{ Math.round(amountInvested / 3).toLocaleString() }}</td>
                            <td>{{ motorbikes }}</td>
                            <td>{{ Math.round(motorbikeReturn).toLocaleString() }}</td>
                            <td>{{ impact / amountInvested }}</td>
                            <td>3.6</td>
                          </tr>
                          <tr style="background-color: white">
                            <td scope="row">
                              <img src="/untapped/rawmeter.svg" height="32px" width="32px" alt="">
                            </td>
                            <td>Water ATM's</td>
                            <td>{{ Math.round(amountInvested / 3).toLocaleString() }}</td>
                            <td>{{ wateratm }}</td>
                            <td>{{ Math.round(atmReturn).toLocaleString() }}</td>
                            <td>{{ impact / amountInvested }}</td>
                            <td>12</td>
                          </tr>
                          <tr style="background-color: white">
                            <td scope="row">
                              <img src="/untapped/irrigation.svg" height="32px" width="32px" alt="">
                            </td>
                            <td>Trailer</td>
                            <td>{{ Math.round(amountInvested / 3).toLocaleString() }}</td>
                            <td>{{ trailer }}</td>
                            <td>{{ Math.round(trailerReturn).toLocaleString() }}</td>
                            <td>{{ impact / amountInvested }}</td>
                            <td>3.6</td>
                          </tr>
                          <tr style="border-top: 3px solid gray">
                            <td></td>
                            <td>Totals</td>
                            <td>{{ Math.round(amountInvested).toLocaleString() }}</td>
                            <td>{{ entreprenuars.toLocaleString() }}</td>
                            <td>{{ impact.toLocaleString() }}</td>
                            <td>{{ socialImpact }}</td>
                            <td>{{ totalLeverage }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
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
  name: "calculateimpact",
  data() {
    return {
      calculations: false,
      years: 5,
      amountInvested: '',
      motorbikes: '',
      overallreturn: '',
      trailer: '',
      wateratm: '',
      totalNumberofBikes: '',
      socialReturn: '',
      entreprenuars: '',
      motorbikeReturn: '',
      atmReturn: '',
      trailerReturn: '',
      impact: '',
      batch: '',
      loading: false
    }
  },
  methods: {
    onInput(e) {
      this.amountInvested = e.target.innerText;
      this.calculateImpact();
    },
    onYearUpdate(e) {
      this.years = e.target.innerText;
      this.calculateImpact();
    },
    calculateImpact() {
      let _self = this;
      this.loading = true;
      this.calculations = false;
      setTimeout(function () {
        _self.timeToRepay = 1.5;
        _self.batch = 4;
        let annualReturnForInvestors = 8;

        let motorbikePrice = 1000;
        let waterATMPrice = 10000;
        let trailerPrice = 500;
        let numberofAssets = 3;

        let motorBikeLeverage = 3.6;
        let ATMLeverage = 1.2;
        let trailerLeverage = 3.6;

        let motorBikeAnnualRevenue = 3600;
        let atmAnnualRevenue = 12000;
        let trailerAnnualRevenue = 1800;

        let motorbikesPerYear = ((_self.amountInvested / numberofAssets) / motorbikePrice);
        let atmPerYear = ((_self.amountInvested / numberofAssets) / waterATMPrice);
        let trailerperYear = ((_self.amountInvested / numberofAssets) / trailerPrice);

        let totalRevenueMotorbike = motorbikesPerYear * motorBikeAnnualRevenue * _self.years + motorbikesPerYear
            * motorBikeAnnualRevenue * 3 + motorbikesPerYear * motorBikeAnnualRevenue * _self.timeToRepay;
        let totalATMRevenue = atmPerYear * atmAnnualRevenue * _self.years + atmPerYear
            * atmAnnualRevenue * 3 + atmPerYear * atmAnnualRevenue * _self.timeToRepay;
        let trailerATMRevenue = trailerperYear * trailerAnnualRevenue * _self.years + trailerperYear
            * trailerAnnualRevenue * 3 + trailerperYear * trailerAnnualRevenue * _self.timeToRepay;

        /* Total Revenue*/
        _self.impact = totalRevenueMotorbike + totalATMRevenue + trailerATMRevenue;
        _self.motorbikeReturn = totalRevenueMotorbike;
        _self.atmReturn = totalATMRevenue;
        _self.trailerReturn = trailerATMRevenue;
        _self.socialReturn = (totalRevenueMotorbike + totalATMRevenue + trailerATMRevenue) / _self.amountInvested;
        /* Overall Return*/
        _self.overallreturn = (_self.amountInvested * annualReturnForInvestors * _self.years) / _self.amountInvested;
        /* Overall Return*/
        _self.loading = false;
        _self.calculations = true;
        _self.motorbikes = Math.round(((_self.amountInvested / 3) / motorbikePrice) * _self.batch);
        _self.wateratm = Math.round(((_self.amountInvested / 3) / waterATMPrice) * _self.batch);
        _self.trailer = Math.round(((_self.amountInvested / 3) / trailerPrice) * _self.batch);
        let socialImpact = (((_self.amountInvested / 3) / 500) * 1800) + (((_self.amountInvested / 3) / 1000) * 12000) +
            (((_self.amountInvested / 3) / 1000) *
                3600)
        let addition = (_self.motorbikes + _self.wateratm + _self.trailer);
        _self.entreprenuars = Math.round(addition);
      }, 500);
    }
  }
}
</script>

<style scoped lang="scss">
.large-text {
  z-index: 3;
  font: normal normal bold 40px/53px Roboto;
  letter-spacing: 0px;
  color: #48586A;
}

.orangeinput {
  color: #ED7D31;
  font-size: 32px;
  font-weight: bolder;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;

  &.needstext {
    text-decoration: underline;
  }
}

.monetizatoin {
  position: absolute;
  z-index: 1;
  top: -67px;
  left: -40px;
}

.person {
  position: absolute;
  z-index: 1;
}

.supportingtext {
  font: normal normal bold 20px/26px Roboto;
  color: #48586A;

}

.toptext {
  text-align: center;
  font: normal normal bold 26px/34px Roboto;
  letter-spacing: 0px;
  color: #48586A;
}

.border {
  border-top: #E2EFF5 2px solid !important;
  border-bottom: none !important;
  border-right: none !important;
  border-left: none !important;
}

[contenteditable] {
  outline: 0 solid transparent;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}

#star {
  animation: spin 2s linear infinite;

}
</style>