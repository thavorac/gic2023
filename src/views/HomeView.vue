<template>
  <div
    style="
      display: flex;
      flex-direction: column;
      gap: 10px;
      justify-content: center;
    "
  >
    <div class="bordered">Header</div>
    <div style="display: flex; gap: 10px; justify-content: center">
      <div class="bordered" style="width: 50%">
        <RouterLink :to="{ name: 'page1' }">1</RouterLink>
      </div>
      <div
        style="
          display: flex;
          flex-direction: column;
          width: 50%;
          gap: 10px;
          justify-content: center;
        "
      >
        <div class="bordered" @click="navigateTo('/page2')">2</div>
        <div class="bordered">
          <RouterLink :to="{ name: 'page3' }">3</RouterLink>
        </div>
        <div class="bordered">4</div>
      </div>
    </div>
  </div>
</template>
<script>
import { RouterLink } from "vue-router";
export default {
  methods: {
    navigateTo(to) {
      this.$router.push(to);
    },
  },
};
</script>
<style scoped>
.bordered {
  border: 1px solid black;
  text-align: center;
  cursor: pointer;
}
</style>
