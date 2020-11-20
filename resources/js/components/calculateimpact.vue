<script src="../../../../../../Users/User/Downloads/login signup/login signup/Login.js"></script>
<template>
  <div class="">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <p class="invest">If I Invest <span class="orangeinput needstext"
                                              onkeypress="return (this.innerText.length <= 6)"
                                              contenteditable="true"
                                              @input="onInput">100000</span>
            $ on
            <span maxlength="2" class="orangeinput needstext" contenteditable="true"
                  onkeypress="return (this.innerText.length <= 1)"
                  @input="onYearUpdate">5</span> year.
          </p>
          <div>
            <svg v-if="loading" id="star"
                 xmlns="http://www.w3.org/2000/svg"
                 width="68.918" height="68.918"
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
          </div>
          <!--        <i class="fa fa-spin fa-spinner fa-2x" ></i>-->
        </div>
      </div>
      <div class="col-12">
        <div class="border"></div>
        <div v-if="calculations" style="margin-top: 31.5px !important;">
          <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-center text-center">
                <p class="impactheading">I CREATE</p>
              </div>
            </div>
          </div>
          <div class="container" style="max-width: 926px">
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                      <img src="./assets/monetization.svg" alt="">
                    </div>
                    <div class="text-center">
                      <p class="toptext">
                        <span class="inputfor">{{ impact }}$</span> of cumulated revenues
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                      <img src="./assets/person.svg" alt="" height="122px" width="122px">
                    </div>
                    <div class="text-center">
                      <p class="toptext">
                      <span class="inputfor">
                        {{ entreprenuars.toLocaleString() }}
                      </span> entrepreneurs </p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="d-flex justify-content-center text-center">
                <p class="impactheading">I MAKE</p>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="d-flex justify-content-center">
                    <img src="./assets/percent.svg" alt=""> <br>

                  </div>
                  <div class="text-center">
                    <p class="toptext">
                      <span class="inputfor">
                        {{ overallreturn }}%
                      </span> Overall Return
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex justify-content-center">
                    <img src="./assets/X.svg"
                         alt="">
                  </div>
                  <div class="text-center">
                    <p class="toptext">
                      <span class="inputfor" style="position: relative">
                        {{ socialReturn.toLocaleString() }}x
                      </span> Social return on money </p>
                  </div>
                </div>
              </div>
              <div style="margin-top: 3em;margin-bottom: 3em">
                <div class="d-flex justify-content-center">
                  <div>
                    <p class="more" @click.prevent="showmore">More details</p>
                    <div class="text-center cursor-pointer" style="cursor: pointer" @click.prevent="showmore">
                      <svg v-if="!showmores" xmlns="http://www.w3.org/2000/svg"
                           width="40"
                           height="24.7"
                           viewBox="0 0 40 24.7">
                        <path id="Path_338" data-name="Path 338" d="M10.7,8.59,26,23.857,41.3,8.59l4.7,4.7-20,20-20-20Z"
                              transform="translate(-6 -8.59)" fill="#48586a"/>
                      </svg>
                      <svg v-else style="transform: rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                           width="40"
                           height="24.7"
                           viewBox="0 0 40 24.7">
                        <path id="Path_338" data-name="Path 338" d="M10.7,8.59,26,23.857,41.3,8.59l4.7,4.7-20,20-20-20Z"
                              transform="translate(-6 -8.59)" fill="#48586a"/>
                      </svg>

                    </div>

                  </div>

                </div>
              </div>
              <transition name="fade">
                <div v-if="showmores" class="container" style="margin-top: 10px !important;">
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
                  <!--                <div class="row">-->
                  <!--                  <div class="container">-->
                  <!--                    <div class="table-responsive">-->
                  <!--                      <table class="table table-borderless part-result" style="background-color: transparent">-->
                  <!--                        <thead class="thead-light">-->
                  <!--                        <tr>-->
                  <!--                          <th></th>-->
                  <!--                          <th>Asset</th>-->
                  <!--                          <th>Amount ($)</th>-->
                  <!--                          <th>Number</th>-->
                  <!--                          <th>Return</th>-->
                  <!--                          <th>Social Impact</th>-->
                  <!--                          <th>Leverage</th>-->
                  <!--                        </tr>-->
                  <!--                        </thead>-->
                  <!--                        <tbody style="background-color: white">-->
                  <!--                        <tr style="background-color: white">-->
                  <!--                          <td scope="row">-->
                  <!--                            <img src="/untapped/twowheeler.svg" alt="">-->
                  <!--                          </td>-->
                  <!--                          <td>Motorcycle</td>-->
                  <!--                          <td>{{ Math.round(amountInvested / 3).toLocaleString() }}</td>-->
                  <!--                          <td>{{ motorbikes }}</td>-->
                  <!--                          <td>{{ Math.round(motorbikeReturn).toLocaleString() }}</td>-->
                  <!--                          <td>{{ impact / amountInvested }}</td>-->
                  <!--                          <td>3.6</td>-->
                  <!--                        </tr>-->
                  <!--                        <tr style="background-color: white">-->
                  <!--                          <td scope="row">-->
                  <!--                            <img src="/untapped/rawmeter.svg" height="32px" width="32px" alt="">-->
                  <!--                          </td>-->
                  <!--                          <td>Water ATM's</td>-->
                  <!--                          <td>{{ Math.round(amountInvested / 3).toLocaleString() }}</td>-->
                  <!--                          <td>{{ wateratm }}</td>-->
                  <!--                          <td>{{ Math.round(atmReturn).toLocaleString() }}</td>-->
                  <!--                          <td>{{ impact / amountInvested }}</td>-->
                  <!--                          <td>12</td>-->
                  <!--                        </tr>-->
                  <!--                        <tr style="background-color: white">-->
                  <!--                          <td scope="row">-->
                  <!--                            <img src="/untapped/irrigation.svg" height="32px" width="32px" alt="">-->
                  <!--                          </td>-->
                  <!--                          <td>Trailer</td>-->
                  <!--                          <td>{{ Math.round(amountInvested / 3).toLocaleString() }}</td>-->
                  <!--                          <td>{{ trailer }}</td>-->
                  <!--                          <td>{{ Math.round(trailerReturn).toLocaleString() }}</td>-->
                  <!--                          <td>{{ impact / amountInvested }}</td>-->
                  <!--                          <td>3.6</td>-->
                  <!--                        </tr>-->
                  <!--                        <tr style="border-top: 3px solid gray">-->
                  <!--                          <td></td>-->
                  <!--                          <td>Totals</td>-->
                  <!--                          <td>{{ Math.round(amountInvested).toLocaleString() }}</td>-->
                  <!--                          <td>{{ entreprenuars.toLocaleString() }}</td>-->
                  <!--                          <td>{{ impact.toLocaleString() }}</td>-->
                  <!--                          <td>{{ socialImpact }}</td>-->
                  <!--                          <td>{{ totalLeverage }}</td>-->
                  <!--                        </tr>-->
                  <!--                        </tbody>-->
                  <!--                      </table>-->
                  <!--                    </div>-->
                  <!--                  </div>-->
                  <!--                </div>-->
                </div>

              </transition>
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
      amountInvested: 100000,
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
      showmores: false,
      batch: '',
      loading: false
    }
  },
  mounted() {
    $("#myeditablediv").keypress(function (e) {

    });
    $("span[contenteditable]").keypress(function (evt) {
      var keycode = evt.charCode || evt.keyCode;
      var x = evt.charCode || evt.keyCode;
      if (isNaN(String.fromCharCode(evt.which)) && x != 46 || x === 32 || x === 13 || (x === 46 && evt.currentTarget.innerText.includes('.'))) evt.preventDefault();

      if (keycode == 13) { //Enter key's keycode
        this.calculateImpact();
        return false;
      }
    });
    this.amountInvested = 100000;
    this.years = 5;
    this.calculateImpact();
  },

  methods: {
    nFormatter(num, digits) {
      var si = [
        {value: 1, symbol: ""},
        {value: 1E3, symbol: "K"},
        {value: 1E6, symbol: "M"},
        {value: 1E9, symbol: "G"},
        {value: 1E12, symbol: "T"},
        {value: 1E15, symbol: "P"},
        {value: 1E18, symbol: "E"}
      ];
      var rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
      var i;
      for (i = si.length - 1; i > 0; i--) {
        if (num >= si[i].value) {
          break;
        }
      }
      return (num / si[i].value).toFixed(digits).replace(rx, "$1") + si[i].symbol;
    },
    showmore() {
      this.showmores = !this.showmores;
    },
    onInput(e) {
      this.amountInvested = e.target.innerText;
      this.calculateImpact();
    },
    onYearUpdate(e) {
      this.years = Math.round(e.target.innerText);

      this.calculateImpact();
    },
    calculateImpact() {
      let _self = this;
      this.loading = true;
      this.calculations = false;
      setTimeout(function () {
        _self.timeToRepay = 1.5;
        _self.batch = Math.round(_self.years / _self.timeToRepay);
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
        _self.impact = _self.nFormatter(totalRevenueMotorbike + totalATMRevenue + trailerATMRevenue, 2);
        _self.motorbikeReturn = totalRevenueMotorbike;
        _self.atmReturn = totalATMRevenue;
        _self.trailerReturn = trailerATMRevenue;
        _self.socialReturn = (totalRevenueMotorbike + totalATMRevenue + trailerATMRevenue) / _self.amountInvested;
        /* Overall Return*/
        _self.overallreturn = (_self.amountInvested * annualReturnForInvestors * _self.years) / _self.amountInvested;
        /* Overall Return*/
        _self.loading = false;
        _self.calculations = true;

        /* Total Numbers*/
        _self.motorbikes = Math.round((((_self.amountInvested / 3) / motorbikePrice) * _self.batch));
        _self.wateratm = Math.round((((_self.amountInvested / 3) / waterATMPrice) * _self.batch));
        _self.trailer = Math.round(((_self.amountInvested / 3) / trailerPrice) * _self.batch);
        console.log(`motorbikes:${_self.motorbikes}. wateratm:${_self.wateratm}.trailer:${_self.trailer}`)
        let socialImpact = (((_self.amountInvested / 3) / 500) * 1800) + (((_self.amountInvested / 3) / 1000) * 12000) +
            (((_self.amountInvested / 3) / 1000) *
                3600)
        let addition = (_self.motorbikes + _self.wateratm + _self.trailer);
        _self.entreprenuars = Math.round(addition);
      }, 1500);
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
  font-size: 40px;
  font-weight: bolder;
  border-bottom: solid #ED7D31 3px;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;

  &.needstext {
    //text-decoration: underline;
  }
}

.inputfor {
  color: #ED7D31;
  font-size: 35px;
  font-weight: bold;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;

  &.needstext {
    //text-decoration: underline;
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
  //text-align: center;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;
  font-size: 26px;
  font-weight: bold;
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

.impactheading {
  color: #48586A;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;
  font-weight: bold;
  font-size: 40px;
}

.more {
  color: #48586A;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;
  font-weight: bold;
  //letter-spacing: 37px;
  font-size: 30px;
  cursor: pointer;
}

.invest {
  color: #48586A;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;
  font-weight: bold;
  font-size: 40px;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 2s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
{
  opacity: 0;
}

/* Enter and leave animations can use different */
/* durations and timing functions.              */
.slide-fade-enter-active {
  transition: all .3s ease;
}

.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}

.slide-fade-enter, .slide-fade-leave-to
  /* .slide-fade-leave-active below version 2.1.8 */
{
  transform: translateX(10px);
  opacity: 0;
}


</style>