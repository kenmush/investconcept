<template>
  <div>
    <div>
      <form action="">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="col-6 ml-4">
                <div class="part-amount mt-5">
                  <h4 class="title">Enter Amount</h4>
                  <form><span id="basic-addon1" class="currency-symbol">$</span>
                    <input type="text" v-model.number="amount"
                           :class="[errors.amount ? 'is-invalid': '',!errors.amount && Object.keys(errors).length > 1 ? 'is-valid': '']"
                           class="inputted-amount">
                    <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="dropdown-toggle displayed-selected-currency">
                      USD
                    </button>
                    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu currency-select-list">
                      <a href="#" data-currency="usd"
                         class="dropdown-item single-currency-select selected-currency active">USD</a>
                      <!--                      <a href="#" data-currency="eur" class="dropdown-item single-currency-select">EUR</a>-->
                    </div>
                  </form>
                </div>
              </div>
              <div class="d-inline-block cursor-not-allowed ml-5">
                <button class="calculate-all text-center">
                  <span>Calculate</span>
                </button>
              </div>
            </div>
          </div>

        </div>
      </form>
      <div class="row">
        <div class="col-12">
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
                <td>{{ Math.round(amount / 3).toLocaleString() }}</td>
                <td>{{ Math.round((amount / 3) / 1000).toLocaleString() }}</td>
                <td>{{ Math.round(((amount / 3) / 1000) * 80).toLocaleString() }}</td>
                <td>{{ Math.round(((amount / 3) / 1000) * 3600).toLocaleString() }}</td>
                <td>3.6</td>
              </tr>
              <tr style="background-color: white">
                <td scope="row">
                  <img src="/untapped/rawmeter.svg" alt="">
                </td>
                <td>Water ATM's</td>
                <td>{{ Math.round(amount / 3).toLocaleString() }}</td>
                <td>{{ Math.round((amount / 3) / 1000).toLocaleString() }}</td>
                <td>{{ Math.round(((amount / 3) / 1000) * 80).toLocaleString() }}</td>
                <td>{{ Math.round(((amount / 3) / 1000) * 12000).toLocaleString() }}</td>
                <td>12</td>
              </tr>
              <tr style="background-color: white">
                <td scope="row">
                  <img src="/untapped/irrigation.svg" alt="">
                </td>
                <td>Trailer</td>
                <td>{{ Math.round(amount / 3).toLocaleString() }}</td>
                <td>{{ Math.round((amount / 3) / 500).toLocaleString() }}</td>
                <td>{{ Math.round(((amount / 3) / 500) * 40).toLocaleString() }}</td>
                <td>{{ Math.round(((amount / 3) / 500) * 1800).toLocaleString() }}</td>
                <td>3.6</td>
              </tr>
              <tr style="border-top: 3px solid gray">
                <td></td>
                <td>Totals</td>
                <td>{{ Math.round(amount).toLocaleString() }}</td>
                <td>{{ totalUnits }}</td>
                <td>{{ totalNumbers }}</td>
                <td>{{ socialImpact }}</td>
                <td>{{ totalLeverage }}</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <line-chart :chart-data="datacollection" :options="chartoption"></line-chart>
          <!--        <chartist-->
          <!--            ratio="ct-square"-->
          <!--            type="Line"-->
          <!--            :data="chartData"-->
          <!--            :options="chartOptions">-->
          <!--        </chartist>-->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ctAxisTitle from 'chartist-plugin-axistitle'
import LineChart from './LineChart.js'

export default {
  props: {
    chartdata: {
      type: Object,
      default: null
    },
    options: {
      type: Object,
      default: null,

    }
  },
  name: "impact-calculation",
  data() {
    return {
      datacollection: null,
      errors: '',
      amount: 80000,
      chartoption: {
        responsive: true,
        low: 0,
        showArea: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            ticks: {
              maxRotation: 90,
              minRotation: 80
            }
          }],
          yAxes: [{
            ticks: {
              min: 0,
              max: 3000000,
              stepSize: 50000,
            }
          }]
        }
      },
    }
  },
  components: {
    LineChart
  },
  computed: {
    totalNumbers() {
      let i = (((this.amount / 3) / 1000) * 80) + (((this.amount / 3) / 1000) * 80) + (((this.amount / 3) / 500) * 40);
      return Math.round(i).toLocaleString();
    },
    totalUnits() {
      let i = ((this.amount / 3) / 1000) + ((this.amount / 3) / 500) + ((this.amount / 3) / 1000);
      return Math.round(i).toLocaleString();
    },
    socialImpact() {
      let i = (((this.amount / 3) / 500) * 1800) + (((this.amount / 3) / 1000) * 12000) + (((this.amount / 3) / 1000) *
          3600)
      return Math.round(i).toLocaleString();
    },
    totalLeverage() {
      this.fillData()
      let amountToUse = this.amount;
      let i = (((this.amount / 3) / 500) * 1800) + (((this.amount / 3) / 1000) * 12000) + (((this.amount / 3) / 1000) *
          3600)
      let socialImpact = (((this.amount / 3) / 500) * 1800) + (((this.amount / 3) / 1000) * 12000) +
          (((this.amount / 3) / 1000) *
              3600)
      let personalreturn = Math.round(((amountToUse / 3) / 1000) + ((amountToUse / 3) / 500) + ((amountToUse / 3) / 1000));
      return Math.round(i / this.amount).toLocaleString();
    }
  },
  mounted() {
    this.fillData()
  },
  methods: {
    fillData() {
      let amountToUse = this.amount;
      let i = (((this.amount / 3) / 500) * 1800) + (((this.amount / 3) / 1000) * 12000) + (((this.amount / 3) / 1000) *
          3600)
      let socialImpact = (((this.amount / 3) / 500) * 1800) + (((this.amount / 3) / 1000) * 12000) +
          (((this.amount / 3) / 1000) *
              3600)
      let personalreturn = Math.round(((amountToUse / 3) / 1000) + ((amountToUse / 3) / 500) + ((amountToUse / 3) / 1000));
      this.datacollection = {
        labels: ["18 Months", "2 Years", "3 Years", "5 Years", "10 Years"],
        datasets: [
          {
            label: 'Social Impact',
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
            borderWidth: 1,
            data:
                [socialImpact, socialImpact * 2, socialImpact * 3, socialImpact * 4,socialImpact * 10]
          },
          {
            label: 'Personal Return',
            backgroundColor: '#7995f8',
            data:
                [
                  personalreturn * 1000, personalreturn * 2 * 1000, personalreturn * 3 * 1000, personalreturn * 4 * 1000, personalreturn * 10 * 1000
                ]
          }]
      }
     let stepSize = 100000
      if (socialImpact * 10 > 1000000) {
        stepSize = 1000000;
      }
      if (socialImpact * 10 < 100000) {
        stepSize = 5000;
      }
      this.chartoption = {
        // low: 0,
        showArea: false,
        fullWidth: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            ticks: {
              // maxRotation: 90,
              // minRotation: 80
            }
          }],
          yAxes: [{
            ticks: {
              min: 0,
              max: (socialImpact * 10) + socialImpact,
              stepSize: stepSize,
            }
          }]
        }
      };
    },

  },
}
</script>

<style scoped>
.ct-series-a .ct-line {
  /* Set the colour of this series line */
  stroke: blue;
  /* Control the thikness of your lines */
  stroke-width: 5px;
  /* Create a dashed line with a pattern */
  stroke-dasharray: 10px 20px;
}

table {
  /* set your gradient code here */
  background: rgb(240, 183, 161);
  background: -moz-linear-gradient(-45deg, rgba(240, 183, 161, 1) 0%, rgba(140, 51, 16, 1) 50%, rgba(117, 34, 1, 1) 51%, rgba(191, 110, 78, 1) 100%);
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(240, 183, 161, 1)), color-stop(50%, rgba(140, 51, 16, 1)), color-stop(51%, rgba(117, 34, 1, 1)), color-stop(100%, rgba(191, 110, 78, 1)));
  background: -webkit-linear-gradient(-45deg, rgba(240, 183, 161, 1) 0%, rgba(140, 51, 16, 1) 50%, rgba(117, 34, 1, 1) 51%, rgba(191, 110, 78, 1) 100%);
  background: -o-linear-gradient(-45deg, rgba(240, 183, 161, 1) 0%, rgba(140, 51, 16, 1) 50%, rgba(117, 34, 1, 1) 51%, rgba(191, 110, 78, 1) 100%);
  background: -ms-linear-gradient(-45deg, rgba(240, 183, 161, 1) 0%, rgba(140, 51, 16, 1) 50%, rgba(117, 34, 1, 1) 51%, rgba(191, 110, 78, 1) 100%);
  background: linear-gradient(135deg, rgba(240, 183, 161, 1) 0%, rgba(140, 51, 16, 1) 50%, rgba(117, 34, 1, 1) 51%, rgba(191, 110, 78, 1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f0b7a1', endColorstr='#bf6e4e', GradientType=1);

}

.small {
  max-width: 600px;
  margin: 150px auto;
}
</style>