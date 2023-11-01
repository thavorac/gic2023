<template>
  <li class="list pending" @click="toggleStatus(todo.id)">
    <input type="checkbox" :checked="todo.status == 'completed'" />
    <span class="task">{{ todo.task }}</span>
    <i class="uil uil-trash"></i>
  </li>
</template>
<script>
import { useTodoStore } from "../stores/todo";
export default {
  setup() {
    const todoStore = useTodoStore();
    return { todoStore };
  },
  props: ["todo"],
  methods: {
    toggleStatus(todoId) {
      this.todoStore.toggleStatus(todoId);
    },
  },
};
</script>
