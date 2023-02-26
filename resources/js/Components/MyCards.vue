<script setup>
</script>

<template>
  <!-- my cards -->
  <div class="section full mt-4">
    <div class="section-heading padding">
      <h2 class="title">My Cards</h2>
      <a href="app-cards.html" class="link">View All</a>
    </div>

    <!-- carousel single -->
    <div
      class="carousel-single splide splide--loop splide--ltr splide--draggable is-active"
      id="splide01"
      style="visibility: visible"
    >
      <div
        class="splide__track"
        id="splide01-track"
        style="padding-left: 16px; padding-right: 16px"
      >
        <ul
          class="splide__list"
          id="splide01-list"
          style="transform: translateX(-700px)"
        >
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 358px"
          >
            <!-- card block -->
            <div class="card-block bg-dark">
              <div class="card-main">
                <div class="card-button dropdown">
                  <button
                    type="button"
                    class="btn btn-link btn-icon"
                    data-bs-toggle="dropdown"
                  >
                    <ion-icon
                      name="ellipsis-horizontal"
                      role="img"
                      class="md hydrated"
                      aria-label="ellipsis
                                        horizontal"
                    ></ion-icon>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="pencil-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="pencil
                                            outline"
                      ></ion-icon
                      >Edit
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="close-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="close
                                            outline"
                      ></ion-icon
                      >Remove
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="arrow-up-circle-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="arrow up
                                            circle outline"
                      ></ion-icon
                      >Upgrade
                    </a>
                  </div>
                </div>
                <div class="balance">
                  <span class="label">BALANCE</span>
                  <h1 class="title">$ 1,256,90</h1>
                </div>
                <div class="in">
                  <div class="card-number">
                    <span class="label">Card Number</span>
                    •••• 9905
                  </div>
                  <div class="bottom">
                    <div class="card-expiry">
                      <span class="label">Expiry</span>
                      12 / 25
                    </div>
                    <div class="card-ccv">
                      <span class="label">CCV</span>
                      553
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- * card block -->
          </li>
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 358px"
          >
            <!-- card block -->
            <div class="card-block bg-secondary">
              <div class="card-main">
                <div class="card-button dropdown">
                  <button
                    type="button"
                    class="btn btn-link btn-icon"
                    data-bs-toggle="dropdown"
                  >
                    <ion-icon
                      name="ellipsis-horizontal"
                      role="img"
                      class="md hydrated"
                      aria-label="ellipsis
                                        horizontal"
                    ></ion-icon>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="pencil-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="pencil
                                            outline"
                      ></ion-icon
                      >Edit
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="close-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="close
                                            outline"
                      ></ion-icon
                      >Remove
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="arrow-up-circle-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="arrow up
                                            circle outline"
                      ></ion-icon
                      >Upgrade
                    </a>
                  </div>
                </div>
                <div class="balance">
                  <span class="label">BALANCE</span>
                  <h1 class="title">$ 1,256,90</h1>
                </div>
                <div class="in">
                  <div class="card-number">
                    <span class="label">Card Number</span>
                    •••• 9905
                  </div>
                  <div class="bottom">
                    <div class="card-expiry">
                      <span class="label">Expiry</span>
                      12 / 25
                    </div>
                    <div class="card-ccv">
                      <span class="label">CCV</span>
                      553
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- * card block -->
          </li>
          <li
            class="splide__slide is-active is-visible"
            id="splide01-slide01"
            style="margin-right: 16px; width: 358px"
            aria-hidden="false"
            tabindex="0"
          >
            <!-- card block -->
            <div class="card-block bg-primary">
              <div class="card-main">
                <div class="card-button dropdown">
                  <button
                    type="button"
                    class="btn btn-link btn-icon"
                    data-bs-toggle="dropdown"
                  >
                    <ion-icon
                      name="ellipsis-horizontal"
                      role="img"
                      class="md hydrated"
                      aria-label="ellipsis
                                        horizontal"
                    ></ion-icon>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="pencil-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="pencil
                                            outline"
                      ></ion-icon
                      >Edit
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="close-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="close
                                            outline"
                      ></ion-icon
                      >Remove
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="arrow-up-circle-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="arrow up
                                            circle outline"
                      ></ion-icon
                      >Upgrade
                    </a>
                  </div>
                </div>
                <div class="balance">
                  <span class="label">BALANCE</span>
                  <h1 class="title">$ 1,256,90</h1>
                </div>
                <div class="in">
                  <div class="card-number">
                    <span class="label">Card Number</span>
                    •••• 9905
                  </div>
                  <div class="bottom">
                    <div class="card-expiry">
                      <span class="label">Expiry</span>
                      12 / 25
                    </div>
                    <div class="card-ccv">
                      <span class="label">CCV</span>
                      553
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- * card block -->
          </li>

          <li
            class="splide__slide"
            id="splide01-slide02"
            style="margin-right: 16px; width: 358px"
            aria-hidden="true"
            tabindex="-1"
          >
            <!-- card block -->
            <div class="card-block bg-dark">
              <div class="card-main">
                <div class="card-button dropdown">
                  <button
                    type="button"
                    class="btn btn-link btn-icon"
                    data-bs-toggle="dropdown"
                  >
                    <ion-icon
                      name="ellipsis-horizontal"
                      role="img"
                      class="md hydrated"
                      aria-label="ellipsis
                                        horizontal"
                    ></ion-icon>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="pencil-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="pencil
                                            outline"
                      ></ion-icon
                      >Edit
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="close-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="close
                                            outline"
                      ></ion-icon
                      >Remove
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="arrow-up-circle-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="arrow up
                                            circle outline"
                      ></ion-icon
                      >Upgrade
                    </a>
                  </div>
                </div>
                <div class="balance">
                  <span class="label">BALANCE</span>
                  <h1 class="title">$ 1,256,90</h1>
                </div>
                <div class="in">
                  <div class="card-number">
                    <span class="label">Card Number</span>
                    •••• 9905
                  </div>
                  <div class="bottom">
                    <div class="card-expiry">
                      <span class="label">Expiry</span>
                      12 / 25
                    </div>
                    <div class="card-ccv">
                      <span class="label">CCV</span>
                      553
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- * card block -->
          </li>

          <li
            class="splide__slide"
            id="splide01-slide03"
            style="margin-right: 16px; width: 358px"
            aria-hidden="true"
            tabindex="-1"
          >
            <!-- card block -->
            <div class="card-block bg-secondary">
              <div class="card-main">
                <div class="card-button dropdown">
                  <button
                    type="button"
                    class="btn btn-link btn-icon"
                    data-bs-toggle="dropdown"
                  >
                    <ion-icon
                      name="ellipsis-horizontal"
                      role="img"
                      class="md hydrated"
                      aria-label="ellipsis
                                        horizontal"
                    ></ion-icon>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="pencil-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="pencil
                                            outline"
                      ></ion-icon
                      >Edit
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="close-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="close
                                            outline"
                      ></ion-icon
                      >Remove
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="arrow-up-circle-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="arrow up
                                            circle outline"
                      ></ion-icon
                      >Upgrade
                    </a>
                  </div>
                </div>
                <div class="balance">
                  <span class="label">BALANCE</span>
                  <h1 class="title">$ 1,256,90</h1>
                </div>
                <div class="in">
                  <div class="card-number">
                    <span class="label">Card Number</span>
                    •••• 9905
                  </div>
                  <div class="bottom">
                    <div class="card-expiry">
                      <span class="label">Expiry</span>
                      12 / 25
                    </div>
                    <div class="card-ccv">
                      <span class="label">CCV</span>
                      553
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- * card block -->
          </li>

          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 358px"
          >
            <!-- card block -->
            <div class="card-block bg-primary">
              <div class="card-main">
                <div class="card-button dropdown">
                  <button
                    type="button"
                    class="btn btn-link btn-icon"
                    data-bs-toggle="dropdown"
                  >
                    <ion-icon
                      name="ellipsis-horizontal"
                      role="img"
                      class="md hydrated"
                      aria-label="ellipsis
                                        horizontal"
                    ></ion-icon>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="pencil-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="pencil
                                            outline"
                      ></ion-icon
                      >Edit
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="close-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="close
                                            outline"
                      ></ion-icon
                      >Remove
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="arrow-up-circle-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="arrow up
                                            circle outline"
                      ></ion-icon
                      >Upgrade
                    </a>
                  </div>
                </div>
                <div class="balance">
                  <span class="label">BALANCE</span>
                  <h1 class="title">$ 1,256,90</h1>
                </div>
                <div class="in">
                  <div class="card-number">
                    <span class="label">Card Number</span>
                    •••• 9905
                  </div>
                  <div class="bottom">
                    <div class="card-expiry">
                      <span class="label">Expiry</span>
                      12 / 25
                    </div>
                    <div class="card-ccv">
                      <span class="label">CCV</span>
                      553
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- * card block -->
          </li>
          <li
            class="splide__slide splide__slide--clone"
            style="margin-right: 16px; width: 358px"
            aria-hidden="true"
            tabindex="-1"
          >
            <!-- card block -->
            <div class="card-block bg-dark">
              <div class="card-main">
                <div class="card-button dropdown">
                  <button
                    type="button"
                    class="btn btn-link btn-icon"
                    data-bs-toggle="dropdown"
                  >
                    <ion-icon
                      name="ellipsis-horizontal"
                      role="img"
                      class="md hydrated"
                      aria-label="ellipsis
                                        horizontal"
                    ></ion-icon>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="pencil-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="pencil
                                            outline"
                      ></ion-icon
                      >Edit
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="close-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="close
                                            outline"
                      ></ion-icon
                      >Remove
                    </a>
                    <a class="dropdown-item" href="#">
                      <ion-icon
                        name="arrow-up-circle-outline"
                        role="img"
                        class="md hydrated"
                        aria-label="arrow up
                                            circle outline"
                      ></ion-icon
                      >Upgrade
                    </a>
                  </div>
                </div>
                <div class="balance">
                  <span class="label">BALANCE</span>
                  <h1 class="title">$ 1,256,90</h1>
                </div>
                <div class="in">
                  <div class="card-number">
                    <span class="label">Card Number</span>
                    •••• 9905
                  </div>
                  <div class="bottom">
                    <div class="card-expiry">
                      <span class="label">Expiry</span>
                      12 / 25
                    </div>
                    <div class="card-ccv">
                      <span class="label">CCV</span>
                      553
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- * card block -->
          </li>
        </ul>
      </div>
    </div>
    <!-- * carousel single -->
  </div>
  <!-- * my cards -->
</template>
