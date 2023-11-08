<template>
  <div style="display: flex; flex-direction: column; gap: 10px">
    <div class="bordered header">Header</div>
    <div style="display: flex; gap: 10px">
      <div class="content bordered">Content 1</div>
      <div class="content bordered">Content 2</div>
    </div>
  </div>
</template>

<style scoped>
.content {
  background-color: azure;
  height: 100px;
  width: 50%;
}
.bordered {
  border: 1px solid black;
  justify-content: center;
  text-align: center;
}
</style>
