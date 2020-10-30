<template>
  <div class="container text-center my-3" @mouseleave="disableCards">
    <!--    <h2 class="font-weight-light">Bootstrap 4 - Multi Item Carousel</h2>-->
    <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
          <div class="carousel-item active">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="rounded float-left"
                           src="/motorbikes.jpeg"
                           alt="">
                    </div>
                    <div class="col-md-8" v-if="!showMotorbikeDetails">
                      <p style="border-bottom: 3px solid #3e4494">Electric motorbikes for moto taxi</p>
                      <p>Local Partner: Zembo Bikes</p>
                      <p>Country: Uganda</p>
                    </div>
                    <div class="col-md-8" v-else>
                      <p>Local Partner: Zembo Bikes</p>
                      <p>Country: Uganda</p>
                      <p>Zembo provides affordable electric motorcycles for motorcycle taxi drivers in Africa, the
                        Company
                        has already 100 motorbikes on site in Kampala, Uganda. The Company leases its motorbikes to taxi
                        drivers in a lease-to-own contract over 24 months for 60000 UGX per week.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card" v-if="!showMotorbikeDetails">
                        <div class="card-body">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-md-4">
                                <p>Minimum Investment</p>
                                <p>1 100$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Annual Revenue created</p>
                                <p>3 600$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Money Multiplier</p>
                                <p>3.6x</p>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-custom btn-block btn-lg" @click="showMotorbike"
                                        @mouseenter="showMotorbike"
                                        @mouseleave="disableCards"
                                >
                                  See Details
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div v-else>
                        <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse">
                          <thead class="thead-default">
                          <tr>
                            <th>For the Entrepreneur</th>
                            <th>$700 <br>Moto</th>
                            <th>$120/Month <br>Avg. Income</th>
                            <th>$45/Month <br>Lease Payments</th>
                          </tr>
                          <tr>
                            <th>For You:</th>
                            <th>$500 <br>Minimum Investment</th>
                            <th>9% <br>APY</th>
                            <th>18 Month <br>Term</th>
                          </tr>
                          </thead>

                        </table>
                        <div class="row">
                          <a href="/register" class="btn btn-custom btn-block btn-lg"
                             @mouseleave="disableCards">Invest</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="rounded float-left img-thumbnail"
                           src="/motorbike2.jpeg"
                           alt="">
                    </div>
                    <div class="col-md-8" v-if="!showSmartMeter">
                      <p style="border-bottom: 3px solid #3e4494">
                        Petrol motorbikes for moto taxi
                      </p>
                      <p>Local partner: Asaak</p>
                      <p>Country: Uganda</p>
                    </div>
                    <div class="col-md-8" v-else>
                      <p>Company: Untapped</p>
                      <p>Country: Kenya</p>
                      <p>Quality water walking distance form home</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card" v-if="!showSmartMeter">
                        <div class="card-body">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-md-4">
                                <p>Minimum Investment</p>
                                <p>1 100$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Annual Revenue created</p>
                                <p>3 000$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Money Multiplier</p>
                                <p>3.0x</p>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-custom btn-block btn-lg"
                                        @mouseenter="showSmartMeterCard"
                                        @mouseleave="disableCards"
                                        @click="showSmartMeterCard">
                                  See Details
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div v-else>
                        <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse">
                          <thead class="thead-default">
                          <tr>
                            <th>For the Entrepreneur</th>
                            <th>$700 <br>Moto</th>
                            <th>$120/Month <br>Avg. Income</th>
                            <th>$45/Month <br>Lease Payments</th>
                          </tr>
                          <tr>
                            <th>For You:</th>
                            <th>$500 <br>Minimum Investment</th>
                            <th>9% <br>APY</th>
                            <th>18 Month <br>Term</th>
                          </tr>
                          </thead>

                        </table>
                        <div class="row">
                          <a href="/register" class="btn btn-custom btn-block btn-lg"
                             @mouseleave="disableCards">Invest</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="rounded float-left img-thumbnail"
                           src="./assets/opibus.jpeg"
                           alt="">
                    </div>
                    <div class="col-md-8" v-if="!opiBus">
                      <p style="border-bottom: 3px solid #3e4494">
                        Electric motorbikes for deliveries
                      </p>
                      <p>Local partner: Opibus</p>
                      <p>Country: Kenya</p>
                    </div>
                    <div class="col-md-8" v-else>
                      <p>Company: Untapped</p>
                      <p>Country: Kenya</p>
                      <p></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card" v-if="!opiBus">
                        <div class="card-body">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-md-4">
                                <p>Minimum Investment</p>
                                <p>1 500$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Annual Revenue created</p>
                                <p>6 000$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Money Multiplier</p>
                                <p>4.0x</p>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-custom btn-block btn-lg"
                                        @mouseenter="opiBusCard"
                                        @mouseleave="disableCards"
                                        @click="opiBusCard">
                                  See Details
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div v-else>
                        <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse">
                          <thead class="thead-default">
                          <tr>
                            <th>For the Entrepreneur</th>
                            <th>$700 <br>Moto</th>
                            <th>$120/Month <br>Avg. Income</th>
                            <th>$45/Month <br>Lease Payments</th>
                          </tr>
                          <tr>
                            <th>For You:</th>
                            <th>1 500$ <br>Minimum Investment</th>
                            <th>6 000 $ <br>Annual Revenue</th>
                            <th>4.0x <br>Money Multiplier</th>
                          </tr>
                          </thead>

                        </table>
                        <div class="row">
                          <a href="/register" class="btn btn-custom btn-block btn-lg"
                             @mouseleave="disableCards">Invest</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="rounded float-left img-thumbnail"
                           src="./assets/ovive.jpeg"
                           alt="">
                    </div>
                    <div class="col-md-8" v-if="!ovive">
                      <p style="border-bottom: 3px solid #3e4494">
                        Purified water kiosk
                      </p>
                      <p>Local partner: OVIVE</p>
                      <p>Country: Kenya</p>
                    </div>
                    <div class="col-md-8" v-else>
                      <p>Company: Untapped</p>
                      <p>Country: Kenya</p>
                      <p></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card" v-if="!ovive">
                        <div class="card-body">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-md-4">
                                <p>Minimum Investment</p>
                                <p>9 000$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Annual Revenue created</p>
                                <p>36 000$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Money Multiplier</p>
                                <p>4.0x</p>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-custom btn-block btn-lg"
                                        @mouseenter="oviveCard"
                                        @mouseleave="disableCards"
                                        @click="oviveCard">
                                  See Details
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div v-else>
                        <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse">
                          <thead class="thead-default">
<!--                          <tr>-->
<!--                            <th>For the Entrepreneur</th>-->
<!--                            <th> <br>Moto</th>-->
<!--                            <th>$120/Month <br>Avg. Income</th>-->
<!--                            <th>$45/Month <br>Lease Payments</th>-->
<!--                          </tr>-->
                          <tr>
                            <th>For You:</th>
                            <th>9 000$ <br>Minimum Investment</th>
                            <th>36 000 $ <br>Annual Revenue</th>
                            <th>4.0x <br>Money Multiplier</th>
                          </tr>
                          </thead>

                        </table>
                        <div class="row">
                          <a href="/register" class="btn btn-custom btn-block btn-lg"
                             @mouseleave="disableCards">Invest</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="rounded float-left img-thumbnail"
                           src="./assets/majimilele.jpeg"
                           alt="">
                    </div>
                    <div class="col-md-8" v-if="!majimilele">
                      <p style="border-bottom: 3px solid #3e4494">
                        Automated water kiosk
                      </p>
                      <p>Local partner: Maji Milele </p>
                      <p>Country: Kenya</p>
                    </div>
                    <div class="col-md-8" v-else>
                      <p>Company: Untapped</p>
                      <p>Country: Kenya</p>
                      <p></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card" v-if="!majimilele">
                        <div class="card-body">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-md-4">
                                <p>Minimum Investment</p>
                                <p>3 000$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Annual Revenue created</p>
                                <p>7 200$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Money Multiplier</p>
                                <p>2.4x</p>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-custom btn-block btn-lg"
                                        @mouseenter="majimileleCard"
                                        @mouseleave="disableCards"
                                        @click="majimileleCard">
                                  See Details
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div v-else>
                        <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse">
                          <thead class="thead-default">
<!--                          <tr>-->
<!--                            <th>For the Entrepreneur</th>-->
<!--                            <th> <br>Moto</th>-->
<!--                            <th>$120/Month <br>Avg. Income</th>-->
<!--                            <th>$45/Month <br>Lease Payments</th>-->
<!--                          </tr>-->
                          <tr>
                            <th>For You:</th>
                            <th>3 000$ <br>Minimum Investment</th>
                            <th>7 200 $ <br>Annual Revenue</th>
                            <th>2.4x <br>Money Multiplier</th>
                          </tr>
                          </thead>

                        </table>
                        <div class="row">
                          <a href="/register" class="btn btn-custom btn-block btn-lg"
                             @mouseleave="disableCards">Invest</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="rounded float-left img-thumbnail"
                           src="./assets/mvuapap.jpeg"
                           alt="">
                    </div>
                    <div class="col-md-8" v-if="!mvuapap">
                      <p style="border-bottom: 3px solid #3e4494">
                        Mobile irrigation trailer
                      </p>
                      <p>Local partner: Mvua pap </p>
                      <p>Country: Kenya</p>
                    </div>
                    <div class="col-md-8" v-else>
                      <p>Company: Untapped</p>
                      <p>Country: Kenya</p>
                      <p></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card" v-if="!mvuapap">
                        <div class="card-body">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-md-4">
                                <p>Minimum Investment</p>
                                <p>800$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Annual Revenue created</p>
                                <p>6 000$</p>
                              </div>
                              <div class="col-md-4">
                                <p>Money Multiplier</p>
                                <p>7.5x</p>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-custom btn-block btn-lg"
                                        @mouseenter="mvuapapCard"
                                        @mouseleave="disableCards"
                                        @click="mvuapapCard">
                                  See Details
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div v-else>
                        <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse">
                          <thead class="thead-default">
<!--                          <tr>-->
<!--                            <th>For the Entrepreneur</th>-->
<!--                            <th> <br>Moto</th>-->
<!--                            <th>$120/Month <br>Avg. Income</th>-->
<!--                            <th>$45/Month <br>Lease Payments</th>-->
<!--                          </tr>-->
                          <tr>
                            <th>For You:</th>
                            <th>800$ <br>Minimum Investment</th>
                            <th>6 000 $ <br>Annual Revenue</th>
                            <th>7.5x <br>Money Multiplier</th>
                          </tr>
                          </thead>

                        </table>
                        <div class="row">
                          <a href="/register" class="btn btn-custom btn-block btn-lg"
                             @mouseleave="disableCards">Invest</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "assets",
  data() {
    return {
      showMotorbikeDetails: false,
      showSmartMeter: false,
      opiBus: false,
      ovive: false,
      majimilele: false,
      mvuapap: false,
      showsSmartMeter: false
    }
  },
  methods: {
    disableCards() {
      this.showSmartMeter = false;
      this.showMotorbikeDetails = false;
    },
    showMotorbike() {
      this.showMotorbikeDetails = !this.showMotorbikeDetails;
      this.showSmartMeter = false;

    },
    showSmartMeterCard() {
      this.showMotorbikeDetails = false;
      this.showSmartMeter = !this.showSmartMeter;
    },
    opiBusCard() {
      this.opiBus = !this.opiBus;
    },
    oviveCard() {
      this.ovive = !this.ovive;
    },
    majimileleCard() {
      this.majimilele = !this.majimilele;
    },
    mvuapapCard() {
      this.mvuapap = !this.mvuapap;
    }
  },
  mounted() {
    $('#recipeCarousel').carousel({
      interval: 2000
    })

    $('.carousel .carousel-item').each(function () {
      var minPerSlide = 3;
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
      }
    });

  }
}
</script>

<style scoped lang="scss">
@media (max-width: 768px) {
  .carousel-inner .carousel-item > div {
    display: none;
  }
  .carousel-inner .carousel-item > div:first-child {
    display: block;
  }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
}

/* display 3 */
@media (min-width: 768px) {

  .carousel-inner .carousel-item-right.active,
  .carousel-inner .carousel-item-next {
    transform: translateX(33.333%);
  }

  .carousel-inner .carousel-item-left.active,
  .carousel-inner .carousel-item-prev {
    transform: translateX(-33.333%);
  }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left {
  transform: translateX(0);
}


.btn-custom {
  color: #fff;
  background-color: #ED7D31;
  border-color: #ED7D31;
}

.btn-custom:hover {
  background-color: darken(#ED7D31, 30%);
}
</style>