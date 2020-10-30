<template>
  <div>
    <div class="row">
      <div class="col-12">
        <button type="button" v-if="Object.keys(currentCategory).length > 0"
                class="float-right btn btn-secondary btn-sm mr-3"
                @click.prevent="addAssets">
          Add Assets
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="col-md-12">
          <div class="form-check mb-4 form-check-inline" v-for="asset in assets">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" :name="asset.categoryName" :id="asset.id"
                     v-model="currentCategory"
                     :value="asset.categoryName"
              >
              {{ asset.categoryName }}
            </label>
          </div>
          <hr>
          <template v-for="(a,index) in holdingData" class="mt-3">
            <h4>{{ a.categoryName }}</h4>
            <div class="row">
              <div class="col-md-4">
                <!--Label: Units, Attributes:units -->
                <div class="form-group">
                  <label for="units">Units</label>
                  <input type="number" class="form-control" v-model="holdingData[index].units"
                         aria-describedby="units-help"
                         :placeholder="a" required>
                  <div class="invalid-feedback" v-if="errors.units">
                    {{ errors.units.toString() }}
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!--Label: Units, Attributes:units -->
                <div class="form-group">
                  <label for="units">Total Invested</label>
                  <input type="number" class="form-control" v-model="holdingData[index].amount_invested"
                         aria-describedby="units-help"
                         :placeholder="a" required>
                  <div class="invalid-feedback" v-if="errors.units">
                    {{ errors.units.toString() }}
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!--Label: Units, Attributes:units -->
                <div class="form-group">
                  <label for="units">Balance</label>
                  <input type="number" class="form-control" v-model="holdingData[index].balance"
                         aria-describedby="units-help"
                         :placeholder="a" required>
                  <div class="invalid-feedback" v-if="errors.units">
                    {{ errors.units.toString() }}
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!--Label: Units, Attributes:units -->
                <div class="form-group">
                  <label for="units">Interest</label>
                  <input type="number" class="form-control" v-model="holdingData[index].interest"
                         aria-describedby="units-help"
                         :placeholder="a" required>
                  <div class="invalid-feedback" v-if="errors.units">
                    {{ errors.units.toString() }}
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!--Label: Units, Attributes:units -->
                <div class="form-group">
                  <label for="units">Duration</label>
                  <input type="number" class="form-control" v-model="holdingData[index].duration"
                         aria-describedby="units-help"
                         :placeholder="a" required>
                  <div class="invalid-feedback" v-if="errors.units">
                    {{ errors.units.toString() }}
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!--Label: Units, Attributes:units -->
                <div class="form-group">
                  <label for="units">Leverage</label>
                  <input type="number" class="form-control" v-model="holdingData[index].leverage"
                         aria-describedby="units-help"
                         :placeholder="a" required>
                  <div class="invalid-feedback" v-if="errors.units">
                    {{ errors.units.toString() }}
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </template>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="button" v-if="Object.keys(currentCategory).length > 0"
                class="float-right btn btn-secondary btn-sm mr-3"
                @click.prevent="addAssets">
          Add Assets
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import swal from 'sweetalert';

export default {
  name: "AssociateAssets",
  props: ['assets', 'invesotorid'],
  data() {
    return {
      errors: '',
      units: '',
      totalinvested: '',
      balance: '',
      category: '',
      assetForm: this.assets,
      currentCategory: [],
      formtoshow: '',
      holdingData: []
    }
  },
  watch: {
    currentCategory() {
      let _self = this;

      this.currentCategory.forEach(data => {
        let found = _.find(this.assets, function (o) {
          return o.categoryName === data;
        });
        let exists = _.find(_self.holdingData, function (d) {
          return d.categoryName === found.categoryName
        });
        if (exists) {
          // var index = array.indexOf(exists);
          // _self.holdingData.splice(index,1);
          return;
        }
        _self.holdingData.push({
          'asset_category_id': found.id,
          'investorId': _self.investorid,
          'categoryName': found.categoryName,
          'units': 0,
          'amount_invested': 0,
          'balance': 0,
          'interest': 0,
          'duration': 0,
          'leverage': 0
        });
      });
      if (Object.keys(_self.currentCategory).length === 0) {
        _self.holdingData = [];
      }
      if (Object.keys(_self.currentCategory).length !== Object.keys(_self.holdingData).length) {
        _self.currentCategory.forEach(data => {
          let found = _.find(_self.holdingData, function (o) {
            return o.categoryName !== data;
          });
          if (found) {
            var index = _self.holdingData.indexOf(found);
            _self.holdingData.splice(index, 1);
          }
        });
      }
      return this.formtoshow = this.currentCategory;
    }
  },
  methods: {
    addAssets() {
      let data = {
        "investor_id": this.invesotorid,
        'investments': this.holdingData
      };

      axios.post(`${process.env.MIX_ROOT_PATH}portal/investor/investments/${this.invesotorid}/`,data).then(data=>{
        this.holdingData = [];
        this.currentCategory = [];
        swal("Data Uploaded Successfully", "You are good to go.");

      }).catch(err=>{
        swal("Error", "Fill all the fields. Use 0 for empty ones.");
      });
    }
  },
}
</script>

<style scoped>

</style>