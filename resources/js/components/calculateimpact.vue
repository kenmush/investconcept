<template>
  <div class="d-flex justify-content-center">
    <div class="row">
      <div class="text-center">
        <h2>If I Invest <span class="orangeinput needstext" contenteditable="true" @input="onInput">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          $ on
          <span class="orangeinput needstext" contenteditable="true" @input="onYearUpdate">{{  years }}</span> year,
        </h2>
        <i class="fa fa-spin fa-spinner fa-2x" v-if="loading"></i>
        <div v-if="calculations" style="margin-top: 31.5px !important;">
          <div class="border"></div>
          <div class="d-flex justify-content-between" style="margin-top: 46.53px">
            <div style="position: relative;z-index: 10">
              <img style="z-index: 1; margin-bottom: -60px;" src="./assets/monetization.svg" alt="">
              <p class="toptext">
                I generate
                <span class="orangeinput">
                {{ impact.toLocaleString() }} $
              </span> for them,
              </p>
            </div>
            <div style="position: relative;z-index: 10">
              <img style="z-index: 1;     margin-bottom: -87px; margin-left: -186px;" src="./assets/person.svg" alt="">
              <p class="toptext">
                &nbsp;&nbsp;&nbsp;
                support
                <span class="orangeinput" style="position: relative">{{ entreprenuars.toLocaleString() }}
                              </span> entrepreneurs and create:
              </p>
            </div>
          </div>
          <div>
            <h2 style="margin-top: 113.5px !important;"></h2>
          </div>

          <div style="margin-top: 97px !important;" class="d-flex justify-content-between">
            <div style="position: relative">
              <img style="z-index: 1; margin-bottom: -19px;" src="./assets/motorbike.svg" alt="">
              <p class="supportingtext"><span class="orangeinput ">{{ motorbikes.toLocaleString() }}</span> Motorbikes</p>
            </div>
            <div>
              <img style="z-index: 1; margin-bottom: -19px;" src="./assets/pump.svg" alt="">
              <p class="supportingtext"><span class="orangeinput ">{{ wateratm.toLocaleString() }}</span> Water ATM</p>
            </div>

<!--            <div>-->
<!--              <img style="z-index: 1; margin-bottom: -19px;" src="./assets/bottles.svg" alt="">-->
<!--              <p class="supportingtext"><span class="orangeinput ">70</span> Bottles</p>-->
<!--            </div>-->
            <div>
              <img style="z-index: 1; margin-bottom: -19px;" src="./assets/purification.svg" alt="">
              <p class="supportingtext"><span class="orangeinput ">{{  trailer.toLocaleString() }}</span> Irrigation Trailer</p>
            </div>

          </div>
          <div style="margin-top: 34.5px !important;" class="border"></div>
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
      years: 1,
      amountInvested: '',
      motorbikes: '',
      trailer: '',
      wateratm: '',
      entreprenuars: '',
      impact: '',
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
        _self.loading = false;
        _self.calculations = true;
        _self.motorbikes = Math.round((_self.amountInvested / 3) / 1000) * _self.years;
        _self.wateratm = Math.round((_self.amountInvested / 3) / 1000) * _self.years;
        _self.trailer = Math.round((_self.amountInvested / 3) / 500) * _self.years;
        let socialImpact = (((_self.amountInvested / 3) / 500) * 1800) + (((_self.amountInvested / 3) / 1000) * 12000) +
            (((_self.amountInvested / 3) / 1000) *
                3600)
        let addition = (_self.motorbikes + _self.wateratm + _self.trailer);
        _self.entreprenuars = Math.round(addition);
        _self.impact = socialImpact * _self.years;
      },1000);
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
  border-top: 2px solid #E2EFF5;
}

[contenteditable] {
  outline: 0px solid transparent;
}
</style>