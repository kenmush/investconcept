<template>
  <div class="mb-5">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <p class="invest">If I Invest <span class="orangeinput needstext"
                                              onkeypress="return (this.innerText.length <= 6)"
                                              contenteditable="true"
                                              @input="onInput">100000</span>
            $ on
            <span maxlength="2" class="orangeinput needstext" contenteditable="true"
                  id="yearlength"
                  onkeypress="return (this.innerText.length <= 1)"
                  @input="onYearUpdate">5</span> year.
          </p>
          <div>
            <svg v-if="loading" id="star"
                 xmlns="http://www.w3.org/2000/svg"
                 width="68.918" height="68.918"
                 viewBox="0 0 68.918 68.918">
              <g
                  transform="translate(25.047 -0.668) rotate(30)" opacity="0.5">
                <g transform="translate(0.489 0.489)">
                  <rect width="50.452" height="50.452" fill="none"/>
                </g>
                <g transform="translate(6.664 6.663)">
                  <path
                      d="M36.869,3H7.234A4.246,4.246,0,0,0,3,7.234V36.869A4.246,4.246,0,0,0,7.234,41.1H36.869A4.246,4.246,0,0,0,41.1,36.869V7.234A4.246,4.246,0,0,0,36.869,3ZM24.232,11.594l2.244-2.244,2.985,2.985,2.985-2.985,2.244,2.244L31.7,14.579l2.985,2.985-2.244,2.244-2.985-2.964-2.985,2.985-2.244-2.244L27.217,14.6ZM9.88,12.991H20.464v3.175H9.88ZM20.993,30.519H16.759v4.234H13.584V30.519H9.351V27.344h4.234V23.11h3.175v4.234h4.234Zm13.759,2.646H24.168V29.99H34.753Zm0-5.292H24.168V24.7H34.753Z"
                      transform="translate(-3 -3)" fill="#ACADA6"/>
                </g>
              </g>
            </svg>
          </div>
          <!--        <i class="fa fa-spin fa-spinner fa-2x" ></i>-->
        </div>
      </div>
      <div class="col-12">
        <!--        <div class="border"></div>-->
        <div v-if="calculations" style="margin-top: 31.5px !important;">
          <div class="bg-white shadow-lg container mt-5" style="border-radius: 20px;">
            <div class="row" style="padding-top: 26px;padding-bottom: 27px;padding-left: 40px">
              <div class="col-md-2 text-center align-self-center flex justify-content-center">
                <p class="gdtext ">
                  I create:
                </p>
              </div>
              <div class="col-md-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86">
                  <g id="monetization_on-24px" transform="translate(16 16)">
                    <path id="Path_341" data-name="Path 341" d="M43,0A43,43,0,1,1,0,43,43,43,0,0,1,43,0Z"
                          transform="translate(-16 -16)" fill="#aed4e9" opacity="0.313"/>
                    <path id="Path_326" data-name="Path 326" d="M0,0H53.071V53.071H0Z" fill="rgba(0,0,0,0)"/>
                    <path id="Path_327" data-name="Path 327"
                          d="M26.061,2A24.061,24.061,0,1,0,50.121,26.061,24.069,24.069,0,0,0,26.061,2Zm3.393,38.714v4.6H23.029V40.666c-4.114-.866-7.6-3.513-7.868-8.181h4.716c.241,2.526,1.973,4.5,6.376,4.5,4.716,0,5.775-2.358,5.775-3.826,0-2-1.059-3.874-6.424-5.149-5.967-1.444-10.057-3.9-10.057-8.83,0-4.138,3.344-6.833,7.483-7.723V6.812h6.424V11.5a8.506,8.506,0,0,1,6.857,8.157H31.595c-.12-2.671-1.54-4.5-5.341-4.5-3.609,0-5.775,1.636-5.775,3.946,0,2.021,1.564,3.344,6.424,4.6S36.96,27.047,36.96,33.11c-.024,4.4-3.32,6.809-7.507,7.6Z"
                          transform="translate(1 1)" fill="#48586a"/>
                  </g>
                </svg>
                <span class="gdtext" style="padding-left: 20px">{{ impact }}$</span>
                <span class="gdltext">cumulated revenues</span>
              </div>
              <div class="col-md-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86">
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="43" cy="43" r="43" fill="#aed4e9" opacity="0.313"/>
                  <path id="Union_1" data-name="Union 1"
                        d="M-3773,226.553v-5.2c0-6.92,14.125-10.407,21.2-10.407s21.2,3.486,21.2,10.407v5.2Zm42.4-15.61a.314.314,0,0,1-.318-.286l-.238-1.717a4.679,4.679,0,0,1-1.113-.625l-1.643.65a.324.324,0,0,1-.4-.156l-1.325-2.263a.321.321,0,0,1,.08-.416l1.4-1.067a4.589,4.589,0,0,1-.053-.624,4.991,4.991,0,0,1,.053-.625l-1.4-1.066a.315.315,0,0,1-.08-.416l1.325-2.263a.314.314,0,0,1,.4-.156l1.643.65a5.79,5.79,0,0,1,1.113-.625l.238-1.717a.314.314,0,0,1,.318-.286h2.65a.4.4,0,0,1,.371.26l.239,1.717a4.676,4.676,0,0,1,1.113.624l1.643-.65a.325.325,0,0,1,.4.156l1.325,2.263a.393.393,0,0,1-.106.442l-1.4,1.066a4.6,4.6,0,0,1,.053.625,4.975,4.975,0,0,1-.053.624l1.378,1.067a.315.315,0,0,1,.08.416l-1.325,2.263a.314.314,0,0,1-.4.156l-1.643-.65a5.833,5.833,0,0,1-1.113.625l-.238,1.717a.3.3,0,0,1-.318.286Zm-.875-6.5a2.191,2.191,0,0,0,2.2,2.16,2.174,2.174,0,0,0,2.2-2.16,2.209,2.209,0,0,0-2.2-2.16A2.192,2.192,0,0,0-3731.476,204.439Zm-30.555-6.5h20.458a10.565,10.565,0,0,1-10.229,7.8A10.567,10.567,0,0,1-3762.03,197.935Zm36.2,0a.434.434,0,0,1-.451-.391l-.345-2.419a7.081,7.081,0,0,1-1.563-.884l-2.306.911a.484.484,0,0,1-.556-.208l-1.855-3.148a.436.436,0,0,1,.106-.572l1.961-1.509a4.925,4.925,0,0,1-.08-.884,4.925,4.925,0,0,1,.08-.884l-1.961-1.509a.431.431,0,0,1-.106-.572l1.855-3.148a.442.442,0,0,1,.556-.208l2.306.911a8.3,8.3,0,0,1,1.563-.884l.345-2.419a.434.434,0,0,1,.451-.391h3.709a.479.479,0,0,1,.477.391l.345,2.419a7.093,7.093,0,0,1,1.563.884l2.279-.911a.485.485,0,0,1,.557.208l1.855,3.148a.437.437,0,0,1-.106.572l-1.961,1.509a4.719,4.719,0,0,1,.08.884c0,.312-.026.6-.053.884l1.934,1.509a.432.432,0,0,1,.106.572l-1.855,3.148a.443.443,0,0,1-.557.208l-2.305-.911a8.3,8.3,0,0,1-1.564.884l-.344,2.419a.434.434,0,0,1-.451.391Zm-1.458-9.106a3.284,3.284,0,0,0,3.313,3.252,3.284,3.284,0,0,0,3.313-3.252,3.284,3.284,0,0,0-3.312-3.252A3.284,3.284,0,0,0-3727.289,188.83Zm-35.8,6.5a1.284,1.284,0,0,1-1.3-1.249v-.078a1.289,1.289,0,0,1,1.3-1.275h.688a10.367,10.367,0,0,1,5.3-8.975v2.472a1.3,1.3,0,0,0,1.326,1.3,1.3,1.3,0,0,0,1.325-1.3V182.69a11.02,11.02,0,0,1,2.65-.364,11.034,11.034,0,0,1,2.65.364v3.538a1.3,1.3,0,0,0,1.324,1.3,1.3,1.3,0,0,0,1.325-1.3v-2.472a10.366,10.366,0,0,1,5.3,8.975h.716a1.289,1.289,0,0,1,1.3,1.275v.052a1.289,1.289,0,0,1-1.3,1.275Z"
                        transform="translate(3787.001 -159.724)" fill="#48586a"/>
                </svg>
                <span class="gdtext" style="padding-left: 20px">{{ entreprenuars.toLocaleString() }}</span> <span
                  class="gdltext"> entrepreneurs</span>

              </div>
            </div>

          </div>
          <div class="bg-white shadow-lg container mt-5" style="border-radius: 20px;margin-top: 20px">
            <div class="row" style="padding-top: 26px;padding-bottom: 27px;padding-left: 40px">
              <div class="col-md-2 text-center align-self-center flex justify-content-center">
                <p class="gdtext align-middle">
                  I generate:
                </p>
              </div>
              <div class="col-md-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86">
                  <g id="monetization_on-24px" transform="translate(16 16)">
                    <path id="Path_341" data-name="Path 341" d="M43,0A43,43,0,1,1,0,43,43,43,0,0,1,43,0Z"
                          transform="translate(-16 -16)" fill="#aed4e9" opacity="0.313"/>
                    <path id="Path_326" data-name="Path 326" d="M0,0H53.071V53.071H0Z" fill="rgba(0,0,0,0)"/>
                    <path id="Path_327" data-name="Path 327"
                          d="M26.061,2A24.061,24.061,0,1,0,50.121,26.061,24.069,24.069,0,0,0,26.061,2Zm3.393,38.714v4.6H23.029V40.666c-4.114-.866-7.6-3.513-7.868-8.181h4.716c.241,2.526,1.973,4.5,6.376,4.5,4.716,0,5.775-2.358,5.775-3.826,0-2-1.059-3.874-6.424-5.149-5.967-1.444-10.057-3.9-10.057-8.83,0-4.138,3.344-6.833,7.483-7.723V6.812h6.424V11.5a8.506,8.506,0,0,1,6.857,8.157H31.595c-.12-2.671-1.54-4.5-5.341-4.5-3.609,0-5.775,1.636-5.775,3.946,0,2.021,1.564,3.344,6.424,4.6S36.96,27.047,36.96,33.11c-.024,4.4-3.32,6.809-7.507,7.6Z"
                          transform="translate(1 1)" fill="#48586a"/>
                  </g>
                </svg>
                <span class="gdtext" style="padding-left: 19px">{{ overallreturn }}%</span> <span class="gdltext">gain
              </span>
              </div>
              <div class="col-md-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86">
                  <path id="Path_343" data-name="Path 343" d="M43,0A43,43,0,1,1,0,43,43,43,0,0,1,43,0Z" fill="#aed4e9"
                        opacity="0.313"/>
                  <path id="Path_340" data-name="Path 340"
                        d="M-24.478-82.448l7.357-13.528h9.3L-19.25-76.519-7.528-56.739h-9.405l-7.546-13.744-7.546,13.744h-9.405l11.723-19.781L-41.133-95.977h9.3Z"
                        transform="translate(67.936 119.477)" fill="#48586a"/>
                </svg>
                <span class="gdtext" style="padding-left: 18px">{{ socialReturn.toLocaleString() }}x</span>
                <span class="gdltext"> Social return on money</span>
              </div>
            </div>

          </div>
          <div style="padding-top: 20px;margin-bottom: 26px" class="d-flex justify-content-center align-content-center">
            <a href="" class="gdltext" @click.prevent="showmore">
              <span style="text-decoration: underline">View more</span>
              <span style="padding-left: 12.8px">
               <svg xmlns="http://www.w3.org/2000/svg" width="10.35" height="16.761" viewBox="0 0 10.35 16.761">
                 <path id="Path_338" data-name="Path 338"
                       d="M7.969,8.59l6.411,6.4,6.411-6.4,1.969,1.969-8.38,8.38L6,10.559Z"
                       transform="translate(-8.59 22.761) rotate(-90)" fill="#48586a"/>
               </svg>
             </span>
            </a>

          </div>
          <transition name="fade">
            <div class="container d-flex justify-content-center" v-if="showmores">
              <div class="d-flex align-content-center align-self-center bg-white shadow"
                   style="min-width: 224px;padding-bottom: 10.9px;
padding-top: 11.4px;padding-left: 10.4px;padding-right:16px;border-radius: 20px;
border:#ACADA6 solid 1px;margin-right: 20px;
">
                <div class="flex-fill">
                  <svg xmlns="http://www.w3.org/2000/svg" width="55.2" height="55.2" viewBox="0 0 55.2 55.2">
                    <path id="Path_344" data-name="Path 344" d="M27.6,0A27.6,27.6,0,1,1,0,27.6,27.6,27.6,0,0,1,27.6,0Z"
                          fill="#abd6e5" opacity="0.313"/>
                    <path id="Path_267" data-name="Path 267"
                          d="M36.5,15.951a8.274,8.274,0,0,0-.967.091L31.775,12.3H36.5V6.825L29.713,10.22,24.475,5H16.426V8.65h6.552l3.65,3.65H20.076l-7.3,3.65L9.126,12.3H0v3.65H7.3a7.3,7.3,0,1,0,7.3,7.3l3.65,3.65h5.475L30.1,15.768l1.843,1.843a7.22,7.22,0,0,0-2.738,5.64,7.3,7.3,0,1,0,7.3-7.3ZM7.3,26.9a3.65,3.65,0,1,1,3.65-3.65A3.661,3.661,0,0,1,7.3,26.9Zm29.2,0a3.65,3.65,0,1,1,3.65-3.65A3.661,3.661,0,0,1,36.5,26.9Z"
                          transform="translate(5.6 9.6)" fill="#48586a"/>
                  </svg>

                </div>
                <div class="flex-fill flex align-self-center gdltext" style="padding-left: 10.4px">{{
                    motorbikes.toLocaleString()
                  }} Motorbikes
                </div>
              </div>
              <div class="d-flex align-content-center align-self-center bg-white shadow"
                   style="min-width: 222px;padding-bottom: 10.9px;
padding-top: 11.4px;padding-left: 10.4px;padding-right:16px;border-radius: 20px;
border:#ACADA6 solid 1px;margin-right: 20px;
">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="55.2" height="55.2" viewBox="0 0 55.2 55.2">
                    <path id="Path_346" data-name="Path 346" d="M27.6,0A27.6,27.6,0,1,1,0,27.6,27.6,27.6,0,0,1,27.6,0Z"
                          fill="#abd6e5" opacity="0.313"/>
                    <path id="Path_334" data-name="Path 334"
                          d="M3,2,5.249,22.4a2.241,2.241,0,0,0,2.227,1.981H18.668A2.241,2.241,0,0,0,20.895,22.4L23.144,2ZM13.072,21.025a3.353,3.353,0,0,1-3.357-3.357c0-2.238,3.357-6.043,3.357-6.043s3.357,3.8,3.357,6.043A3.353,3.353,0,0,1,13.072,21.025Zm7.084-12.31H5.988L5.5,4.238H20.637Z"
                          transform="translate(14.968 14.803)" fill="#48586a"/>
                  </svg>


                </div>
                <div class="flex align-self-center gdltext" style="padding-left: 10.4px">{{ wateratm.toLocaleString() }}
                  Water ATM
                </div>
              </div>
              <div class="d-flex align-content-center align-self-center bg-white shadow"
                   style="min-width: 222px;padding-bottom: 10.9px;
padding-top: 11.4px;padding-left: 10.4px;padding-right:16px;border-radius: 20px;
border:#ACADA6 solid 1px;margin-right: 20px;
">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="55.2" height="55.2" viewBox="0 0 55.2 55.2">
                    <path id="Path_347" data-name="Path 347" d="M27.6,0A27.6,27.6,0,1,1,0,27.6,27.6,27.6,0,0,1,27.6,0Z"
                          fill="#abd6e5" opacity="0.313"/>
                    <path id="Path_335" data-name="Path 335"
                          d="M12.654,19.894a1.207,1.207,0,1,0,1.207-1.207A1.21,1.21,0,0,0,12.654,19.894ZM12.654,3V7.827h2.413V5.51a8.442,8.442,0,1,1-9.654,8.35A8.347,8.347,0,0,1,7.32,8.527l6.54,6.54,1.7-1.7L7.356,5.16v.024A10.839,10.839,0,1,0,13.86,3ZM21.1,13.86a1.207,1.207,0,1,0-1.207,1.207A1.21,1.21,0,0,0,21.1,13.86Zm-14.48,0a1.207,1.207,0,1,0,1.207-1.207A1.21,1.21,0,0,0,6.62,13.86Z"
                          transform="translate(13.494 13.67)" fill="#48586a"/>
                  </svg>


                </div>
                <div class="flex align-self-center gdltext" style="padding-left: 10.4px">
                  {{ trailer.toLocaleString() }} Irrigation Trailer
                </div>
              </div>
            </div>
          </transition>

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
      years: 5,
      amountInvested: 100000,
      motorbikes: '',
      overallreturn: '',
      trailer: '',
      wateratm: '',
      totalNumberofBikes: '',
      socialReturn: '',
      entreprenuars: '',
      motorbikeReturn: '',
      atmReturn: '',
      trailerReturn: '',
      impact: '',
      showmores: false,
      batch: '',
      loading: false
    }
  },
  mounted() {
    $("span[contenteditable]").keypress(function (evt) {

      var keycode = evt.charCode || evt.keyCode;
      var x = evt.charCode || evt.keyCode;
      if (isNaN(String.fromCharCode(evt.which)) && x != 46 || x === 32 || x === 13 || (x === 46 && evt.currentTarget.innerText.includes('.'))) evt.preventDefault();

      if (keycode == 13) {
        this.calculateImpact();
        return false;
      }
    });
    this.amountInvested = 100000;
    this.years = 5;
    this.calculateImpact();
  },
  methods: {
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
    },
    showmore() {
      this.showmores = !this.showmores;
    },
    onInput(e) {
      this.amountInvested = e.target.innerText;
      this.calculateImpact();
    },
    onYearUpdate(e) {
      this.years = Math.round(e.target.innerText);

      this.calculateImpact();
    },
    calculateImpact() {
      let _self = this;
      this.loading = true;
      this.calculations = false;
      setTimeout(function () {
        _self.timeToRepay = 1.5;
        _self.batch = Math.round(_self.years / _self.timeToRepay);
        let annualReturnForInvestors = 8;

        let motorbikePrice = 1000;
        let waterATMPrice = 10000;
        let trailerPrice = 500;
        let numberofAssets = 3;

        let motorBikeLeverage = 3.6;
        let ATMLeverage = 1.2;
        let trailerLeverage = 3.6;

        let motorBikeAnnualRevenue = 3600;
        let atmAnnualRevenue = 12000;
        let trailerAnnualRevenue = 1800;

        let motorbikesPerYear = ((_self.amountInvested / numberofAssets) / motorbikePrice);
        let atmPerYear = ((_self.amountInvested / numberofAssets) / waterATMPrice);
        let trailerperYear = ((_self.amountInvested / numberofAssets) / trailerPrice);

        let totalRevenueMotorbike = motorbikesPerYear * motorBikeAnnualRevenue * _self.years + motorbikesPerYear
            * motorBikeAnnualRevenue * 3 + motorbikesPerYear * motorBikeAnnualRevenue * _self.timeToRepay;
        let totalATMRevenue = atmPerYear * atmAnnualRevenue * _self.years + atmPerYear
            * atmAnnualRevenue * 3 + atmPerYear * atmAnnualRevenue * _self.timeToRepay;
        let trailerATMRevenue = trailerperYear * trailerAnnualRevenue * _self.years + trailerperYear
            * trailerAnnualRevenue * 3 + trailerperYear * trailerAnnualRevenue * _self.timeToRepay;

        /* Total Revenue*/
        _self.impact = _self.nFormatter(totalRevenueMotorbike + totalATMRevenue + trailerATMRevenue, 2);
        _self.motorbikeReturn = totalRevenueMotorbike;
        _self.atmReturn = totalATMRevenue;
        _self.trailerReturn = trailerATMRevenue;
        _self.socialReturn = (totalRevenueMotorbike + totalATMRevenue + trailerATMRevenue) / _self.amountInvested;
        /* Overall Return*/
        _self.overallreturn = (_self.amountInvested * annualReturnForInvestors * _self.years) / _self.amountInvested;
        /* Overall Return*/
        _self.loading = false;
        _self.calculations = true;

        /* Total Numbers*/
        _self.motorbikes = Math.round((((_self.amountInvested / 3) / motorbikePrice) * _self.batch));
        _self.wateratm = Math.round((((_self.amountInvested / 3) / waterATMPrice) * _self.batch));
        _self.trailer = Math.round(((_self.amountInvested / 3) / trailerPrice) * _self.batch);
        console.log(`motorbikes:${_self.motorbikes}. wateratm:${_self.wateratm}.trailer:${_self.trailer}`)
        let socialImpact = (((_self.amountInvested / 3) / 500) * 1800) + (((_self.amountInvested / 3) / 1000) * 12000) +
            (((_self.amountInvested / 3) / 1000) *
                3600)
        let addition = (_self.motorbikes + _self.wateratm + _self.trailer);
        _self.entreprenuars = Math.round(addition);
      }, 1000);
    }
  },
  watch: {
    years: function (newQuestion, oldQuestion) {
      let answ = this.years
      if (answ === 0 || answ === "") {
        document.getElementById("yearlength").innerHTML = 0;
      }
      // this.answer = 'Waiting for you to stop typing...';
      // this.debouncedGetAnswer()
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
  font-size: 40px;
  font-weight: bolder;
  border-bottom: solid #ED7D31 3px;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;

  &.needstext {
    //text-decoration: underline;
  }
}

.inputfor {
  color: #ED7D31;
  font-size: 35px;
  font-weight: bold;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;

  &.needstext {
    //text-decoration: underline;
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
  //text-align: center;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;
  font-size: 26px;
  font-weight: bold;
  color: #48586A;
}

.border {
  border-top: #E2EFF5 2px solid !important;
  border-bottom: none !important;
  border-right: none !important;
  border-left: none !important;
}

[contenteditable] {
  outline: 0 solid transparent;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}

#star {
  animation: spin 2s linear infinite;

}

.impactheading {
  color: #48586A;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;
  font-weight: bold;
  font-size: 40px;
}

.more {
  color: #48586A;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;
  font-weight: bold;
  //letter-spacing: 37px;
  font-size: 30px;
  cursor: pointer;
}

.invest {
  color: #48586A;
  font-family: Roboto, Helvetica Neue, Arial, sans-serif;
  font-weight: bold;
  font-size: 40px;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 2s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
{
  opacity: 0;
}

/* Enter and leave animations can use different */
/* durations and timing functions.              */
.slide-fade-enter-active {
  transition: all .3s ease;
}

.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}

.slide-fade-enter, .slide-fade-leave-to
  /* .slide-fade-leave-active below version 2.1.8 */
{
  transform: translateX(10px);
  opacity: 0;
}

.gdtext {
  color: #48586A;
  font-family: Roboto;
  font-weight: bold;
  font-size: 30px;
}

.gdltext {
  color: #48586A;
  font-family: Roboto;
  font-weight: bold;
  font-size: 20px;
}
</style>