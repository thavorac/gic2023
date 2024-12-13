<template>
  <div class="container">
    <AddTodo @added="handleAddTodo" />
    <h3>Pending Tasks:</h3>
    <TodoLists status="pending" />

    <h3>Completed Tasks:</h3>
    <TodoLists status="completed" />
    <div class="pending-tasks">
      <span
        >You have <span class="pending-num"> {{ nbOfTodo }} </span> tasks
        pending.</span
      >
      <button class="clear-button">Clear All</button>
    </div>
  </div>
</template>
<script>
import { mapState } from "pinia";
import { computed } from "vue";
import AddTodo from "./components/AddTodo.vue";
import TodoLists from "./components/TodoList.vue";

import { useTodoStore } from "./stores/todo";
export default {
  name: "App",
  setup() {
    const store = useTodoStore();
    function handleAddTodo(todo) {
      store.addTodo(todo);
    }
    function clearAllTodos() {
      store.clearAll();
    }
    const { nbOfTodo } = mapState(useTodoStore, {
      nbOfTodo: "countTodos",
    });
    return {
      store,
      nbOfTodo: computed(() => nbOfTodo.value),
      handleAddTodo,
      clearAllTodos,
    };
  },
  components: {
    AddTodo,
    TodoLists,
  },
};
</script>
<style>
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
</style>
