<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import WalletCard from "@/Components/WalletCard.vue";
import Stats from "@/Components/Stats.vue";
import Transactions from "@/Components/Transactions.vue";
import Beneficiaries from "@/Components/Beneficiaries.vue";
import SavingGoals from "@/Components/SavingGoals.vue";
import Carousel from "@/Components/Carousel.vue";
import AppFooter from "@/Components/AppFooter.vue";
import { Splide, SplideSlide } from "@splidejs/vue-splide";

</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>

    <WalletCard />

    <Stats />

    <Transactions />

    <MyCards />

    <Beneficiaries />


    <MonthlyBills />

    <SavingGoals />

    <AppFooter />

  </AuthenticatedLayout>
</template>
