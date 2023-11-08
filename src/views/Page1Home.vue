<template>
  <div class="content bordered" style="width: 100px">
    <RouterLink to="/page6">6</RouterLink>
  </div>
  <div class="content bordered" style="width: 100px">
    <RouterLink to="/page7">7</RouterLink>
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
