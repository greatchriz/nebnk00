<template>
  <div class="wrapper">
    <Flicking :options="{ renderOnlyVisible: true }">
      <div v-for="idx in list" class="flicking-panel" :key="idx">{{ idx }}</div>
    </Flicking>
    <div class="block is-flex is-justify-content-center">
      <span
        class="button mr-2 is-info is-outlined"
        @click="
          () => {
            list.splice(0, 0, ...[list[0] - 2, list[0] - 1]);
          }
        "
        >Prepend</span
      >
      <span
        class="button mr-2 is-info is-outlined"
        @click="
          () => {
            list.push(list[list.length - 1] + 1, list[list.length - 1] + 2);
          }
        "
        >Append</span
      >
    </div>
  </div>
</template>
  <script>
import Flicking from "@egjs/vue3-flicking";

export default {
  components: {
    Flicking: Flicking,
  },

  data() {
    return {
      list: [0, 1, 2, 3, 4],
    };
  },
};
</script>


export default {
  components: {
    Flicking: Flicking
  }
}
