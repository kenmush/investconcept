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

  </div>
</template>

<script>
import VueCharts from 'vue-chartjs'
import {Bar, Line} from 'vue-chartjs'

export default {
  extends: Bar,
  name: "impact-calculation",
  data() {
    return {
      errors: '',
      amount: 250000,
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
      let i = (((this.amount / 3) / 500) * 1800) + (((this.amount / 3) / 1000) * 12000) + (((this.amount / 3) / 1000) *
          3600)
      return Math.round(i / this.amount).toLocaleString();
    }
  },
  mounted() {
    this.renderChart({
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label: 'GitHub Commits',
          backgroundColor: '#f87979',
          data: [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11]
        }
      ]
    })
  }
}
</script>

<style scoped>

</style>