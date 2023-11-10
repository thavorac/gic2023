<template>
  <ul class="todoLists">
    <TodoItem v-for="todo of todos" icon="uil-adobe-alt" :todo="todo" />
  </ul>
</template>
<script>
import { mapState } from "pinia";
import TodoItem from "./TodoItem.vue";
import { useTodoStore } from "../stores/todo";

export default {
  setup() {
    const todoStore = useTodoStore();
    return { todoStore };
  },
  name: "TodoList",
  components: {
    TodoItem,
  },
  async mounted() {
    // we will call action fetchTodos
    await this.todoStore.fetchTodos();
  },
  computed: {
    ...mapState(useTodoStore, ["todos", "countTodos"]),
  },
};
</script>
