<template>
  <div style="display: flex; gap: 10px">
    <div class="content bordered" style="width: 50px; height: 210px">5</div>
    <div style="display: flex; gap: 10px; flex-direction: column">
      <RouterView></RouterView>
    </div>
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
