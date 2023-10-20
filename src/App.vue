<template>
  This is my first Vuejs Project!
  <Button color="red" text="Hello"></Button>
  <Button color="yellow" text="Shop Now"></Button>
  <button>normal button</button>
</template>

<script>
import Button from "./components/Button.vue";
export default {
  name: "App",
  components: {
    Button,
  },
};
</script>
<style scoped></style>
