<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import AppHeader from "@/Components/AppHeader.vue";
import AppBottomMenu from "@/Components/AppBottomMenu.vue";
import { Link } from "@inertiajs/vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
  <div>
    <AppHeader />

    <!-- App Capsule -->
    <div id="appCapsule">
      <slot />
    </div>

    <AppBottomMenu />


  </div>
</template>
