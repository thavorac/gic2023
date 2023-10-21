<template>
  <button :style="{ backgroundColor: color }">
    {{ text }}
    <font-awesome-icon icon="phone" />
  </button>
</template>

<script>
export default {
  name: "MyButton",
  props: ["text", "color"],
};
</script>

<style scoped>
button {
  border-radius: 3px;
  /* background: var(--NestMart-Brand-1, #3bb77e); */
  background-color: red;
  box-shadow: 14px 14px 36px 0px rgba(85, 85, 85, 0.1);
}
</style>
