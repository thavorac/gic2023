<template>
  <button :style="{ backgroundColor: color }" v-text="text"></button>
</template>

<script>
export default {
  name: "Button",
  props: ["text", "color", "icon"],
};
</script>

<style scoped></style>
