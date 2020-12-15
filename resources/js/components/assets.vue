<template>
  <div>
    <section class="pt-5 pb-5">
      <div class="row">
        <div class="col-md-4 mb-3">
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
                  <p>Zembo provides affordable electric motorcycles for motorcycle taxi drivers in Africa,
                    the
                    Company
                    has already 100 motorbikes on site in Kampala, Uganda. The Company leases its motorbikes
                    to taxi
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
                            <p>Minimum Ticket</p>
                            <p>1 100$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Impact</p>
                            <p>2 500$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Leverage</p>
                            <p>2.4x</p>
                          </div>
                          <div class="col-12">
                            <a href="/register" class="btn btn-custom btn-block btn-lg"
                             
                            >
                              Invest
                            </a>
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
                        <th>$500 <br>Minimum Ticket</th>
                        <th>9% <br>APY</th>
                        <th>18 Month <br>Term</th>
                      </tr>
                      </thead>

                    </table>
                    <div class="row">
                      <a href="/register" class="btn btn-custom btn-block btn-lg"
                         >Invest</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
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
                            <p>Minimum Ticket</p>
                            <p>1 500$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Impact</p>
                            <p>2 500$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Leverage</p>
                            <p>1.7x</p>
                          </div>
                          <div class="col-12">
                            <a href="/register" class="btn btn-custom btn-block btn-lg"

                               
                               >
                              Invest
                            </a>
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
                        <th>$500 <br>Minimum Ticket</th>
                        <th>9% <br>APY</th>
                        <th>18 Month <br>Term</th>
                      </tr>
                      </thead>

                    </table>
                    <div class="row">
                      <a href="/register" class="btn btn-custom btn-block btn-lg"
                         >Invest</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
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
                            <p>Minimum Ticket</p>
                            <p>10 000$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Impact</p>
                            <p>30 000$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Leverage</p>
                            <p>3.0x</p>
                          </div>
                          <div class="col-12">
                            <a href="/register" class="btn btn-custom btn-block btn-lg"

                               >
                              Invest
                            </a>
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
                        <th>9 000$ <br>Minimum Ticket</th>
                        <th>36 000 $ <br>Annual Revenue</th>
                        <th>4.0x <br>Leverage</th>
                      </tr>
                      </thead>

                    </table>
                    <div class="row">
                      <a href="/register" class="btn btn-custom btn-block btn-lg"
                         >Invest</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
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
                            <p>Minimum Ticket</p>
                            <p>3 000$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Impact</p>
                            <p>4 200$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Leverage</p>
                            <p>1.4x</p>
                          </div>
                          <div class="col-12">
                            <a href="/register" class="btn btn-custom btn-block btn-lg"

                               >
                              Invest
                            </a>
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
                        <th>3 000$ <br>Minimum Ticket</th>
                        <th>7 200 $ <br>Annual Revenue</th>
                        <th>2.4x <br>Leverage</th>
                      </tr>
                      </thead>

                    </table>
                    <div class="row">
                      <a href="/register" class="btn btn-custom btn-block btn-lg"
                         >Invest</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
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
                  <p>Local partner: MvuaPap </p>
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
                            <p>Minimum Ticket</p>
                            <p>1 100$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Impact</p>
                            <p>9 750$</p>
                          </div>
                          <div class="col-md-4">
                            <p>Leverage</p>
                            <p>9.0x</p>
                          </div>
                          <div class="col-12">
                            <a href="/register" class="btn btn-custom btn-block btn-lg"

                               >
                              Invest
                            </a>
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
                        <th>800$ <br>Minimum Ticket</th>
                        <th>6 000 $ <br>Annual Revenue</th>
                        <th>7.5x <br>Leverage</th>
                      </tr>
                      </thead>

                    </table>
                    <div class="row">
                      <a href="/register" class="btn btn-custom btn-block btn-lg"
                         >Invest</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

.img-thumbnail {
  height: 100px;
}
</style>