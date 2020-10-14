<template>
  <div>
    <form action="">
      <div class="row">
        <div class="col-md-12">
          <!--Label: How much would you like to invest, Attributes:investmentamount -->
          <div class="form-group">
            <h2 for="investmentamount" class="section-title text-center mb-5">Calculate your return
              and impact</h2>
            <div class="col-md-6">
              <!--Label: Amount, Attributes:amount -->
              <div class="form-group">
                <label for="amount" style="  line-height: 1.2;
  margin-top: 0;
  color: #0c2156;
  font-weight: 700;">Enter the Amount you would like to invest.</label>
                <input type="number" class="form-control" id="amount" v-model.number="amount"
                       aria-describedby="amount-help"
                       :class="[errors.amount ? 'is-invalid': '',!errors.amount && Object.keys(errors).length > 1 ? 'is-valid': '']"
                       placeholder="Amount" required>
                <div class="invalid-feedback" v-if="errors.amount">
                  {{ errors.amount.toString() }}
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </form>
    <table class="table table-borderless">
      <thead class="table-header-dark">
      <tr>
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
        <td scope="row">Motorcycle</td>
        <td>{{ Math.round(amount / 3).toLocaleString() }}</td>
        <td>{{ Math.round((amount / 3) / 1000).toLocaleString() }}</td>
        <td>{{ Math.round(((amount / 3) / 1000) * 80).toLocaleString() }}</td>
        <td>{{ Math.round(((amount / 3) / 1000) * 3600).toLocaleString() }}</td>
        <td>3.6</td>
      </tr>
      <tr style="background-color: white">
        <td scope="row">Water ATM's</td>
        <td>{{ Math.round(amount / 3).toLocaleString() }}</td>
        <td>{{ Math.round((amount / 3) / 1000).toLocaleString() }}</td>
        <td>{{ Math.round(((amount / 3) / 1000) * 80).toLocaleString() }}</td>
        <td>{{ Math.round(((amount / 3) / 1000) * 12000).toLocaleString() }}</td>
        <td>12</td>
      </tr>
      <tr style="background-color: white">
        <td scope="row">Trailer</td>
        <td>{{ Math.round(amount / 3).toLocaleString() }}</td>
        <td>{{ Math.round((amount / 3) / 500).toLocaleString() }}</td>
        <td>{{ Math.round(((amount / 3) / 500) * 40).toLocaleString() }}</td>
        <td>{{ Math.round(((amount / 3) / 500) * 1800).toLocaleString() }}</td>
        <td>3.6</td>
      </tr>
      <tr style="border-top: 3px solid gray">
        <td>Totals</td>
        <td>{{ Math.round(amount).toLocaleString() }}</td>
        <td>{{ totalUnits }}</td>
        <td>{{ totalNumbers }}</td>
        <td>{{ socialImpact }}</td>
        <td>{{ totalLeverage }}</td>
      </tr>
      </tbody>
    </table>
    <hr>
    <div class="mt-4">
      <chartist
          ratio="ct-major-twelfth"
          type="Line"
          :data="chartData"
          :options="chartOptions">
      </chartist>
    </div>
<!--    <div>-->
<!--      <table class="table table-sm text-sm">-->
<!--        <tbody>-->
<!--        <tr>-->
<!--          <th>Impact</th>-->
<!--          <td>-->
<!--            <div class="border-bottom:5px solid #ACD5E7">sadasdasdasda</div>-->
<!--          </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <th>Personal Return</th>-->
<!--          <td></td>-->
<!--        </tr>-->
<!--        </tbody>-->
<!--      </table>-->
<!--    </div>-->
  </div>
</template>

<script>
import ctAxisTitle from 'chartist-plugin-axistitle'

export default {
  name: "impact-calculation",
  data() {
    return {
      errors: '',
      amount: 250000,
      chartData: {
        labels: ["18 Months", "2 Years", "3 Years", "5 Years", "10 Years"],
        series: [
          [400000, 500000, 600000, 700000, 800000],
          [500000, 600000, 700000, 800000, 900000]]
      },
      chartOptions: {
        lineSmooth: true,
        chartPadding: {
          top: 20,
          right: 0,
          bottom: 0,
          left: 30
        },
        axisY: {
          onlyInteger: true
        },
        plugins: []       // width: 300,
        // height: 200
      }
    }
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
      let amountToUse = this.amount;
      let i = (((this.amount / 3) / 500) * 1800) + (((this.amount / 3) / 1000) * 12000) + (((this.amount / 3) / 1000) *
          3600)
      let socialImpact = (((this.amount / 3) / 500) * 1800) + (((this.amount / 3) / 1000) * 12000) +
          (((this.amount / 3) / 1000) *
              3600)
      let personalreturn = Math.round(((amountToUse / 3) / 1000) + ((amountToUse / 3) / 500) + ((amountToUse / 3) / 1000));
      console.log("Logging");
      console.log(personalreturn);
      this.$nextTick(function () {
        this.chartData = {
          labels: ["18 Months", "2 Years", "3 Years", "5 Years", "10 Years"],
          series: [
            [socialImpact, socialImpact * 2, socialImpact * 3, socialImpact * 4,
              socialImpact * 6,
              socialImpact * 10], [
              personalreturn * 1000, personalreturn * 2 * 1000, personalreturn * 3 * 1000, personalreturn * 4 * 1000,
              personalreturn * 6 * 1000,
              personalreturn * 10 * 1000
            ],

          ]
        };
        this.chartOptions = {
          lineSmooth: true,
          chartPadding: {
            top: 20,
            right: 0,
            bottom: 0,
            left: 60
          },
          axisY: {
            onlyInteger: true
          },
          plugins: [
            Vue.chartist.plugins.ctAxisTitle({
              axisX: {
                axisTitle: 'Years',
                axisClass: 'ct-axis-title',
                offset: {
                  x: 0,
                  y: 30
                },
                textAnchor: 'middle'
              },
              axisY: {
                axisTitle: 'Amount in Dollars',
                axisClass: 'ct-axis-title',
                offset: {
                  x: 0,
                  y: -20
                },
                textAnchor: 'middle',
                flipTitle: false
              }
            })
          ]       // width: 300,
          // height: 200
        }
      });
      return Math.round(i / this.amount).toLocaleString();
    }
  },
  mounted() {
  }
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
</style>