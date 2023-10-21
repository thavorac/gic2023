<template>
  This is my first Vuejs Project!
  <MyButton text="Hello" color="red"></MyButton>
  <MyButton text="Shop" color="#aef"></MyButton>
  <MyButton text="Cancel" color="blue"></MyButton>
  <button>Test</button>
</template>

<script>
import MyButton from "./components/MyButton.vue";
export default {
  name: "App",
  components: {
    MyButton,
  },
};
</script>
<style scoped></style>
