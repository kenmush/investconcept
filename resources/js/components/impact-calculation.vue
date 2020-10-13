<template>
  <div>
    <form action="">
      <div class="row">
        <div class="col-md-8">
          <!--Label: How much would you like to invest, Attributes:investmentamount -->
          <div class="form-group">
            <h2 for="investmentamount" class="section-title">Calculate your return
              and impact</h2>
            <div class="col-md-6">
              <!--Label: Amount, Attributes:amount -->
              <div class="form-group">
                <label for="amount">Amount</label>
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
        <div class="col-md-4">
          <button class="btn btn-primary mt-5">Calculate Impact</button>
        </div>
      </div>
    </form>
    <table class="table">
      <thead>
      <tr>
        <th>Asset</th>
        <th>Amount</th>
        <th>Number</th>
        <th>Return</th>
        <th>Social Impact</th>
        <th>Leverage</th>
      </tr>
      </thead>
      <tbody style="background-color: white">
      <tr style="background-color: white">
        <td scope="row">Motorcycle</td>
        <td>{{ Math.round(amount / 3).toLocaleString()  }}</td>
        <td>{{ Math.round((amount / 3)/1000).toLocaleString()  }}</td>
        <td>{{ Math.round(((amount / 3)/1000)*80).toLocaleString()  }}</td>
        <td>{{ Math.round(((amount / 3)/1000)*3600).toLocaleString()  }}</td>
        <td>3.6</td>
      </tr>
      <tr style="background-color: white">
        <td scope="row">Water ATM's</td>
        <td>{{ Math.round(amount / 3).toLocaleString() }}</td>
        <td>{{ Math.round((amount / 3)/1000).toLocaleString()  }}</td>
        <td>{{ Math.round(((amount / 3)/1000)*80).toLocaleString()  }}</td>
        <td>{{ Math.round(((amount / 3)/1000)*12000).toLocaleString()  }}</td>
        <td>12</td>
      </tr>
      <tr style="background-color: white">
        <td scope="row">Trailer</td>
        <td>{{ Math.round(amount / 3).toLocaleString()  }}</td>
        <td>{{ Math.round((amount / 3)/500).toLocaleString()  }}</td>
        <td>{{ Math.round(((amount / 3)/500)*40).toLocaleString()  }}</td>
        <td>{{ Math.round(((amount / 3)/500)*1800).toLocaleString()  }}</td>
        <td>3.6</td>
      </tr>
      </tbody>
    </table>
    <div>

    </div>
  </div>
</template>

<script>
export default {
  name: "impact-calculation",
  data() {
    return {
      errors: '',
      amount: '',
    }
  },
}
</script>

<style scoped>

</style>