<template>
  <div class="container">
    <AddTodo />
    <TodoLists />
    <div class="pending-tasks">
      <span>You have <span class="pending-num"> no </span> tasks pending.</span>
      <button class="clear-button">Clear All</button>
    </div>
  </div>
</template>
<script>
import AddTodo from "./components/AddTodo.vue";
import TodoLists from "./components/TodoList.vue";
export default {
  name: "App",
  components: {
    AddTodo,
    TodoLists,
  },
};
</script>
<style>
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
</style>
