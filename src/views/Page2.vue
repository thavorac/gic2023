<template>
  <div style="display: flex; flex-direction: column; gap: 10px">
    <div class="bordered header">Header</div>
    <div class="content bordered">Content</div>
  </div>
</template>

<style scoped>
.content {
  background-color: azure;
  height: 100px;
}
.bordered {
  border: 1px solid black;
  justify-content: center;
  text-align: center;
}
</style>
