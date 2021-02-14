<template>
  <div class="container" id="app">
    <div class="background">
      <div class="column mt-3 ">
        <h3>CALCULATE THE IMPACT</h3>
        <h5 class="mb-4">OF YOUR INVESTMENT</h5>
      </div>
      <div class="row d-flex justify-content-center text-center">
        <div class="card" id="card" style="width: 49rem;background-color:rgba(255, 255, 255, 0.26);">
          <div class="card-body">

            <span class="pr-2">If I invest</span>
            <input type="text"  v-model="amount" class="top-input">
            <span class="pr-1 pl-1 in">in</span>
            <input type="text" class="top-input" placeholder="5 yrs" v-model.lazy="years">
            <button class="btn btn-untapped shadow ml-3 mb-3"
                    @click="calculateUntappedResults">=
            </button>
          </div>
        </div>
      </div>
      <br/>
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="card mb-4" style="width: 24rem; height:42rem; background-color:rgba(255, 255, 255, 0.26);">
            <div class="card-body text-center">
              <img src="assets/1x/rocket.png" alt="" height="20px">
              <!--                        <i class="fa fa-rocket fa-3x" style="color: rgba(0, 0, 0, 0.664);" ;></i>-->
              <P class="card-title ">I WILL HELP CREATE</P>
              <input type="text " placeholder="$1.33 M " v-model="revenue" class="input" disabled>
              <!-- <input type="text " name="display " id="display " disabled> -->
              <br/>
              <br/>
              <p>in REVENUE for</p>
              <input type="text " placeholder="310 " class="input " v-model="numberofEntreprenuarsImpacted" disabled>
              <br>
              <img class="mt-3" src="assets/1x/people.png" alt="" height="20px">
              <!--                        <i class="mt-3 fa fa-users fa-3x" style="color:rgba(0, 0, 0, 0.664);" ;></i>-->
              <p class="mt-3">ENTREPRENEURS <br>which is</p>
              <input type="text " placeholder="26.6 X " class="input " v-model="socialReturn.toLocaleString()" disabled>
              <p class="mt-2">(times) MY INVESTMENT</p>
            </div>
          </div>
          <div class="card mb-4 " style="width: 24rem; height:42rem;background-color:rgba(255, 255, 255, 0.26);">
            <div class="card-body ">
              <img src="assets/1x/dollarhand.png" alt="" height="50px">
              <P class="card-title ">MY RETURN</P>
              <input type="text " placeholder="$76,931 " v-model="returns" class="input " disabled>
              <!-- <input type="text " name="display " id="display " disabled> -->
              <br/>
              <br/>
              <p>PROFIT which is</p>

              <input type="text " placeholder="8% " class="input" disabled>
              <p class="mt-2">ANNUAL RETURN</p>
              <a target="_blank" href="/register" class="btn btn-cta">Register  your Interest</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>

export default {
  name: "impact-calculation",
  data() {
    return {
      amount: '$50,000',
      years: "15 yrs",
      timeToRepay: 1.5,
      batch: "",
      annualReturnForInvestors: 8,
      motorbikePrice: 1000,
      motorBikeAnnualRevenue: 3600,
      waterATMPrice: 10000,
      atmAnnualRevenue: 12000,
      trailerAnnualRevenue: 1800,
      trailerPrice: 500,
      numberofAssets: 3,
      revenue: 'loading ...',
      numberofEntreprenuarsImpacted: 'loading ...',
      socialReturn: 'loading ...',
      returns: 'loading ...'
    }
  },
  methods: {
    calculateUntappedResults() {

      let amount = this.parseAmount();
      if (isNaN(amount)) {
        this.amount = "$50,000";
      } else {
        this.amount = `$${new Intl.NumberFormat().format(amount)}`;
      }

      let numberOfYears = parseInt(this.parseYears());
      if (isNaN(numberOfYears) || numberOfYears === 0) {
        this.years = "1 yr";
      } else {
        this.years = `${numberOfYears} yrs`;
      }

      let batchYears = Math.round(numberOfYears / this.timeToRepay);
      let numberOfMotorbikes = this.calculateNumberofMotorbikes(amount, batchYears);
      let numberOfATms = this.calculateNumberofAtms(amount, batchYears);
      let numberOfTrailers = this.calculateNumberofTrailers(amount, batchYears);

      let numberOfMotorbikesPeryear = Math.round(((amount / this.numberofAssets) / this.motorbikePrice));
      let numberOfAtmsPeryear = Math.round(((amount / this.numberofAssets) / this.waterATMPrice));
      let numberOfTrailersPeryear = Math.round(((amount / this.numberofAssets) / this.trailerPrice));
      let totalRevenueMotorbike = numberOfMotorbikesPeryear * this.motorBikeAnnualRevenue * numberOfYears + numberOfMotorbikesPeryear
          * this.motorBikeAnnualRevenue * 3 + numberOfMotorbikesPeryear * this.motorBikeAnnualRevenue * this.timeToRepay;

      let totalATMRevenue = numberOfAtmsPeryear * this.atmAnnualRevenue * numberOfYears + numberOfAtmsPeryear
          * this.atmAnnualRevenue * 3 + numberOfAtmsPeryear * this.atmAnnualRevenue * this.timeToRepay;
      let trailerATMRevenue = numberOfTrailersPeryear * this.trailerAnnualRevenue * numberOfYears + numberOfTrailersPeryear
          * this.trailerAnnualRevenue * 3 + numberOfTrailersPeryear * this.trailerAnnualRevenue * this.timeToRepay;

      this.numberofEntreprenuarsImpacted = Math.round(numberOfMotorbikes + numberOfATms + numberOfTrailers).toLocaleString();
      this.revenue = "$"+this.nFormatter(Math.round(totalRevenueMotorbike + totalATMRevenue + trailerATMRevenue));
      this.socialReturn = `${(Math.round((totalRevenueMotorbike + totalATMRevenue + trailerATMRevenue) / amount))}x`;
      let amountEarned = Math.round(amount * (this.annualReturnForInvestors / 100) * numberOfYears);
      this.returns = `$${amountEarned.toLocaleString()}`;
    },
    calculateNumberofMotorbikes(amount, batchYears) {
      return Math.round(((amount / this.numberofAssets) / this.motorbikePrice) * batchYears);
    },
    calculateNumberofAtms(amount, batchYears) {
      return Math.round(((amount / this.numberofAssets) / this.waterATMPrice) * batchYears);
    }, calculateNumberofTrailers(amount, batchYears) {
      return Math.round(((amount / this.numberofAssets) / this.trailerPrice) * batchYears);
    },
    parseAmount() {
      let r = this.amount.replace(/\D/g, "")
      return r;
    },
    parseYears() {
      return this.years.replace('yrs', '');
    },
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
    }
  },
  watch: {
    amount() {
      let amount = this.parseAmount();
      if (isNaN(amount)) {
        this.amount = "$50,000";
      } else {
        this.amount = `$${new Intl.NumberFormat().format(amount)}`;
      }
      // this.calculateUntappedResults()
    },
    years() {
      // this.calculateUntappedResults()
    }
  },
  mounted() {
    this.calculateUntappedResults();
  }
}
</script>

<style scoped lang="scss">

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap');

html, html a {
  -webkit-font-smoothing: antialiased !important;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);

}

* {
  -webkit-font-smoothing: antialiased !important;
  /*font-family: 'M/ontserrat', sans-serif;*/
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility !important;
}

*:focus {
  outline: none;
}

body {
  font-family: 'Montserrat', sans-serif;

  font-weight: 500;
}

.background {
  /*background-image: url("assets/bg.png");*/
  /*background-repeat: no-repeat;*/
  /*background-position: center;*/
  /*background-size: cover;*/
  /*background-blend-mode: multiply;*/
  border-radius: 38px;
  padding: 10px;
}

P {
  color: white;
  text-align: center;
  font-weight: bold;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}

h3,
h5 {
  color: #fff;
  text-align: center;
}

.card {
  /* background-color: black;
  opacity: 0.4; */
  border-radius: 0.8rem;
  margin-left: 0.3rem;
}

.card-body {
  color: rgba(255, 255, 255, 0.911);
  opacity: 1;
  font-weight: bold;
}

input {
  /*background-color: transparent;*/
  color: #fff;
  text-align: center;
  padding: 5px;
  border-radius: 9px;
  border: solid #B8DAE9 1px;
  width: 10rem;
  font-size: larger;
  letter-spacing: 0.1em;
  background: rgba(0, 0, 0, .18);
  /*opacity: 0.18;*/
  background-blend-mode: difference;
  /* margin-left: 1.5rem; */
}

input.input {
  /*margin-left: 1.1rem;*/
  font-weight: 500;
  width: 100%;
  font-size: 170%;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #fff;
}

i {
  display: inline-block;
  background-color: skyblue;
  border-radius: 80px;
  border: 1px solid grey;
  padding: 10px;
}

.column {
  text-align: center;
}

.row {
  display: flex;
  align-items: center;
}

input::-webkit-input-placeholder {
  text-overflow: inherit;
  line-height: initial;
  white-space: pre;
  overflow-wrap: normal;
  -webkit-user-modify: read-only !important;
  overflow: hidden;
  color: white;
  z-index: 90;
}

@media (max-width: 768px) {
  #card {
    flex-direction: column;
    position: relative;
    max-width: 100%;
    width: 100%;
  }
}

.top-input {
  border: solid white 1px;
  font-weight: 500;
  font-size: 150%;
}

@media (max-width: 768px) {
  .top-input {
    margin-top: 1rem;
  }

  .in {

  }
}

.btn-untapped {
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 40px;
  padding-left: 40px;
  color: #fff;
  font-weight: bolder;
  //background-color: #b8dae9;
  background-color: rgba(184,218,233,0.3);
  border-color: #b3c6d0;
}

.cta-btn {
  background: #ED7D31;
  color: #fff;
  font-weight: 600;
  font-size: 18px;
  padding: 0 40px;
  margin-top: 16px;
  display: inline-flex;
}

.btn-cta {
  height: 50px;
  color: #fff;
  background-color: #ED7D31;
  border-color: #ED7D31;
  line-height: 50px;
  border-radius: 50px;
  position: relative;
  z-index: 2;
  padding: 0 40px;
  overflow: hidden;
  margin-top: 6rem;
}


</style>