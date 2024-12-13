<template>
  <ul class="todoLists">
    <template v-if="status == 'completed'">
      <TodoItem
        v-for="todo of completedTasks"
        icon="uil-adobe-alt"
        :todo="todo"
      />
    </template>
    <template v-else>
      <TodoItem
        v-for="todo of pendingTasks"
        icon="uil-adobe-alt"
        :todo="todo"
      />
    </template>
  </ul>
</template>
<script>
import { onMounted, computed } from "vue";
import { mapState } from "pinia";
import TodoItem from "./TodoItem.vue";
import { useTodoStore } from "../stores/todo";

export default {
  setup() {
    const todoStore = useTodoStore();
    const color = "red";
    onMounted(() => {
      todoStore.fetchTodos();
    });
    const todos = computed(() => todoStore.todos);
    const countTodos = computed(() => todoStore.countTodos);
    const completedTasks = computed(() => {
      if (todos.value) {
        return todos.value.filter((todo) => todo.status == "completed");
      }
      return [];
    });
    const pendingTasks = computed(() => {
      if (todos.value) {
        return todos.value.filter((todo) => todo.status == "pending");
      }
      return [];
    });
    return {
      todoStore,
      color,
      todos,
      countTodos,
      completedTasks,
      pendingTasks,
    };
  },
  name: "TodoList",
  props: ["status"],
  components: {
    TodoItem,
  },
  watch: {
    todos: {
      immediate: true,
      handler: function (dataChanged) {
        console.log("todos are changed");
      },
    },
  },
};
</script>
