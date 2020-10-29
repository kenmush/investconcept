<template>
  <div>
    <div class="col-12">
      <div class="col-md-6">
        <div class="form-group">
          <label for="category">Assets</label>
          <select class="form-control form-control-sm" name="category" id="category" v-model="category">
            <option selected>-- Select Asset --</option>
            <option v-for="asset in assets">{{  asset.categoryName }}</option>
          </select>
        </div>
      </div>
      <form class="mt-5" v-if="category">
        <legend>Data for: {{ category}}</legend>
        <hr>
       <div class="row mt-2">
         <div class="col-md-3">
           <!--Label: Units, Attributes:units -->
           <div class="form-group">
             <label for="units">Units</label>
             <input type="text" class="form-control" id="units" v-model="units"
                    aria-describedby="units-help"
                    :class="[errors.units ? 'is-invalid': '',!errors.units && Object.keys(errors).length > 1 ? 'is-valid': '']"
                    placeholder="Units" required>
             <div class="invalid-feedback" v-if="errors.units">
               {{ errors.units.toString() }}
             </div>
           </div>
         </div>
         <div class="col-md-3">
           <!--Label: Total Invested, Attributes:totalinvested -->
           <div class="form-group">
             <label for="totalinvested">Total Invested</label>
             <input type="text" class="form-control" id="totalinvested" v-model="totalinvested"
                    aria-describedby="totalinvested-help"
                    :class="[errors.totalinvested ? 'is-invalid': '',!errors.totalinvested && Object.keys(errors).length > 1 ? 'is-valid': '']"
                    placeholder="Total Invested" required>
             <div class="invalid-feedback" v-if="errors.totalinvested">
               {{ errors.totalinvested.toString() }}
             </div>
           </div>
         </div>
         <div class="col-md-3">
           <!--Label: Balance, Attributes:balance -->
           <div class="form-group">
             <label for="balance">Balance</label>
             <input type="text" class="form-control" id="balance" v-model="balance"
                    aria-describedby="balance-help"
                    :class="[errors.balance ? 'is-invalid': '',!errors.balance && Object.keys(errors).length > 1 ? 'is-valid': '']"
                    placeholder="Balance" required>
             <div class="invalid-feedback" v-if="errors.balance">
               {{ errors.balance.toString() }}
             </div>
           </div>
         </div>
         <div class="col-md-3">
           <!--Label: Interest Generated, Attributes:interestgenerated -->
           <div class="form-group">
             <label for="interestgenerated">Interest Generated</label>
             <input type="text" class="form-control" id="interestgenerated" v-model="interestgenerated"
                    aria-describedby="interestgenerated-help"
                    :class="[errors.interestgenerated ? 'is-invalid': '',!errors.interestgenerated && Object.keys(errors).length > 1 ? 'is-valid': '']"
                    placeholder="Interest Generated" required>
             <div class="invalid-feedback" v-if="errors.interestgenerated">
               {{ errors.interestgenerated.toString() }}
             </div>
           </div>
         </div>
         <div class="col-md-3">
           <!--Label: Duration, Attributes:duration -->
           <div class="form-group">
             <label for="duration">Duration</label>
             <input type="text" class="form-control" id="duration" v-model="duration"
                    aria-describedby="duration-help"
                    :class="[errors.duration ? 'is-invalid': '',!errors.duration && Object.keys(errors).length > 1 ? 'is-valid': '']"
                    placeholder="Duration" required>
             <div class="invalid-feedback" v-if="errors.duration">
               {{ errors.duration.toString() }}
             </div>
           </div>
         </div>
         <div class="col-md-3">
           <!--Label: Impact Multiplier, Attributes:impactmultiplier -->
           <div class="form-group">
             <label for="impactmultiplier">Impact Multiplier</label>
             <input type="text" class="form-control" id="impactmultiplier" v-model="impactmultiplier"
                    aria-describedby="impactmultiplier-help"
                    :class="[errors.impactmultiplier ? 'is-invalid': '',!errors.impactmultiplier && Object.keys(errors).length > 1 ? 'is-valid': '']"
                    placeholder="Impact Multiplier" required>
             <div class="invalid-feedback" v-if="errors.impactmultiplier">
               {{ errors.impactmultiplier.toString() }}
             </div>
           </div>
         </div>
       </div>
        <div class="row">
          <button class="btn btn-sm btn-secondary">Associate {{category}} Asset</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "AssociateAssets",
  props: ['assets'],
  data() {
    return {
      errors: '',
      units: '',
      totalinvested: '',
      balance: '',
      category: ''
    }
  },
}
</script>

<style scoped>

</style>