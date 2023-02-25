<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";

import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogTitle,
} from '@headlessui/vue'

const isOpen = ref(true)

function closeModal() {
  isOpen.value = false
}
function openModal() {
  isOpen.value = true
}
</script>

<template>
  <div>

    <TransitionRoot appear :show="isOpen" as="template" style="z-index: 1;">
        <Dialog as="div" @close="closeModal" class="">


          <div class="">
            <div
              class=""
            >
              <TransitionChild
                as="template"
                enter="duration-300 ease-out"
                enter-from="opacity-0 scale-95"
                enter-to="opacity-100 scale-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100 scale-100"
                leave-to="opacity-0 scale-95"
              >
                <DialogPanel
                  class=""
                >
                  <DialogTitle
                    as="h3"
                    class=""
                  >
                    Payment successful
                  </DialogTitle>
                  <div class="mt-2">
                    <p class="text-sm text-gray-500">
                      Your payment has been successfully submitted. We’ve sent you
                      an email with all of the details of your order.
                    </p>
                  </div>

                  <div class="mt-4">
                    <button
                      type="button"
                      class="inline-flex justify-center rounded-md border border-transparent bg-blue-100 px-4 py-2 text-sm font-medium text-blue-900 hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2"
                      @click="closeModal"
                    >
                      Got it, thanks!
                    </button>
                  </div>
                </DialogPanel>
              </TransitionChild>
            </div>
          </div>
        </Dialog>
      </TransitionRoot>

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
      <div class="left">
        <a
            type="button"
            @click="openModal"
            class="headerButton"
        >

            <ion-icon name="menu-outline"></ion-icon>
      </a>

      </div>
      <div class="pageTitle">
        <img src="assets/img/logo.png" alt="logo" class="logo" />
      </div>
      <div class="right">
        <a href="app-notifications.html" class="headerButton">
          <ion-icon class="icon" name="notifications-outline"></ion-icon>
          <span class="badge badge-danger">4</span>
        </a>
        <a href="app-settings.html" class="headerButton">
          <img
            src="assets/img/sample/avatar/avatar1.jpg"
            alt="image"
            class="imaged w32"
          />
          <span class="badge badge-danger">6</span>
        </a>
      </div>
    </div>
    <!-- * App Header -->




    <!-- Page Content -->
    <div id="appCapsule">
      <slot />
    </div>
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
      <a href="index-2.html" class="item active">
        <div class="col">
          <ion-icon name="pie-chart-outline"></ion-icon>
          <strong>Overview</strong>
        </div>
      </a>
      <a href="app-pages.html" class="item">
        <div class="col">
          <ion-icon name="document-text-outline"></ion-icon>
          <strong>Pages</strong>
        </div>
      </a>
      <a href="app-components.html" class="item">
        <div class="col">
          <ion-icon name="apps-outline"></ion-icon>
          <strong>Components</strong>
        </div>
      </a>
      <a href="app-cards.html" class="item">
        <div class="col">
          <ion-icon name="card-outline"></ion-icon>
          <strong>My Cards</strong>
        </div>
      </a>
      <a href="app-settings.html" class="item">
        <div class="col">
          <ion-icon name="settings-outline"></ion-icon>
          <strong>Settings</strong>
        </div>
      </a>
    </div>
    <!-- * App Bottom Menu -->




  </div>
</template>
