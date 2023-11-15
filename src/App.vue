<template>
  <div class="container">
    <header class="border-bottom lh-1 py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="link-secondary" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
          <a
            class="blog-header-logo text-body-emphasis text-decoration-none"
            href="#"
            >Large</a
          >
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="link-secondary" href="#" aria-label="Search">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="mx-3"
              role="img"
              viewBox="0 0 24 24"
            >
              <title>Search</title>
              <circle cx="10.5" cy="10.5" r="7.5"></circle>
              <path d="M21 21l-5.2-5.2"></path>
            </svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-3 border-bottom">
      <nav class="nav nav-underline justify-content-between">
        <!-- option 1 -->
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'world',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="{ active: activeMenu == 'world' }"
          >World</RouterLink
        >

        <!-- option 2 -->
        <a
          v-if="$route.query.category == 'US'"
          class="nav-item nav-link link-body-emphasis active"
          href="/?category=US"
          >U.S.</a
        >
        <a
          v-else
          class="nav-item nav-link link-body-emphasis"
          href="/?category=US"
          >U.S.</a
        >

        <!-- option 3 -->
        <RouterLink
          to="/?category=technology"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('technology')"
          >Technology</RouterLink
        >

        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'design',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('design')"
          >Design</RouterLink
        >
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'culture',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('culture')"
          >Culture</RouterLink
        >
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'business',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('business')"
          >Business</RouterLink
        >
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'politics',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('politics')"
          >Politics</RouterLink
        >
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'opinion',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('opinion')"
          >Opinion</RouterLink
        >
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'science',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('science')"
          >Science</RouterLink
        >
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'health',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('health')"
          >Health</RouterLink
        >
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'style',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('style')"
          >Style</RouterLink
        >
        <RouterLink
          :to="{
            name: 'home',
            query: {
              category: 'travel',
            },
          }"
          class="nav-item nav-link link-body-emphasis"
          :class="isMenuActive('travel')"
          >Travel</RouterLink
        >
      </nav>
    </div>
  </div>
  <main class="container">
    <RouterView />
  </main>
</template>

<script>
import { RouterView, RouterLink } from "vue-router";
export default {
  computed: {
    activeMenu() {
      return this.$route.query.category;
    },
  },
  methods: {
    isMenuActive(menu) {
      if (this.activeMenu == menu) {
        return "active";
      }
      return "";
    },
  },
};
</script>

<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
</style>
