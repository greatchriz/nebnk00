<script setup>
</script>

<template>
  <!-- Monthly Bills -->
  <div class="section full mt-4">
    <div class="section-heading padding">
      <h2 class="title">Monthly Bills</h2>
      <a href="app-bills.html" class="link">View All</a>
    </div>
    <!-- carousel multiple -->
    <div
      class="carousel-multiple splide splide--loop splide--ltr splide--draggable is-active"
      id="splide02"
      style="visibility: visible"
    >
      <div
        class="splide__track"
        id="splide02-track"
        style="padding-left: 16px; padding-right: 16px"
      >
        <ul
          class="splide__list"
          id="splide02-list"
          style="transform: translateX(-708px)"
        >
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 171px"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <img
                  src="assets/img/sample/brand/1.jpg"
                  alt="img"
                  class="image-block imaged w48"
                />
              </div>
              <div class="price">$ 14</div>
              <p>Prime Monthly Subscription</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 171px"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <img
                  src="assets/img/sample/brand/2.jpg"
                  alt="img"
                  class="image-block imaged w48"
                />
              </div>
              <div class="price">$ 9</div>
              <p>Music Monthly Subscription</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 171px"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <div class="iconbox bg-danger">
                  <ion-icon
                    name="medkit-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="medkit outline"
                  ></ion-icon>
                </div>
              </div>
              <div class="price">$ 299</div>
              <p>Monthly Health Insurance</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 171px"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <div class="iconbox">
                  <ion-icon
                    name="card-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="card outline"
                  ></ion-icon>
                </div>
              </div>
              <div class="price">$ 962</div>
              <p>Credit Card Statement</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>
          <li
            class="splide__slide is-active is-visible"
            id="splide02-slide01"
            style="margin-right: 16px; width: 171px"
            aria-hidden="false"
            tabindex="0"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <img
                  src="assets/img/sample/brand/1.jpg"
                  alt="img"
                  class="image-block imaged w48"
                />
              </div>
              <div class="price">$ 14</div>
              <p>Prime Monthly Subscription</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>

          <li
            class="splide__slide is-visible"
            id="splide02-slide02"
            style="margin-right: 16px; width: 171px"
            aria-hidden="false"
            tabindex="0"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <img
                  src="assets/img/sample/brand/2.jpg"
                  alt="img"
                  class="image-block imaged w48"
                />
              </div>
              <div class="price">$ 9</div>
              <p>Music Monthly Subscription</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>

          <li
            class="splide__slide"
            id="splide02-slide03"
            style="margin-right: 16px; width: 171px"
            aria-hidden="true"
            tabindex="-1"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <div class="iconbox bg-danger">
                  <ion-icon
                    name="medkit-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="medkit outline"
                  ></ion-icon>
                </div>
              </div>
              <div class="price">$ 299</div>
              <p>Monthly Health Insurance</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>

          <li
            class="splide__slide"
            id="splide02-slide04"
            style="margin-right: 16px; width: 171px"
            aria-hidden="true"
            tabindex="-1"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <div class="iconbox">
                  <ion-icon
                    name="card-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="card outline"
                  ></ion-icon>
                </div>
              </div>
              <div class="price">$ 962</div>
              <p>Credit Card Statement</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>

          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 171px"
            aria-hidden="true"
            tabindex="-1"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <img
                  src="assets/img/sample/brand/1.jpg"
                  alt="img"
                  class="image-block imaged w48"
                />
              </div>
              <div class="price">$ 14</div>
              <p>Prime Monthly Subscription</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 171px"
            aria-hidden="true"
            tabindex="-1"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <img
                  src="assets/img/sample/brand/2.jpg"
                  alt="img"
                  class="image-block imaged w48"
                />
              </div>
              <div class="price">$ 9</div>
              <p>Music Monthly Subscription</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 171px"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <div class="iconbox bg-danger">
                  <ion-icon
                    name="medkit-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="medkit outline"
                  ></ion-icon>
                </div>
              </div>
              <div class="price">$ 299</div>
              <p>Monthly Health Insurance</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 171px"
          >
            <div class="bill-box">
              <div class="img-wrapper">
                <div class="iconbox">
                  <ion-icon
                    name="card-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="card outline"
                  ></ion-icon>
                </div>
              </div>
              <div class="price">$ 962</div>
              <p>Credit Card Statement</p>
              <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- * carousel multiple -->
  </div>
  <!-- * Monthly Bills -->
</template>
