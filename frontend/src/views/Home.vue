<template>
  <v-container>
    <h1 class="text-center text-h3 mb-3">Featured Products</h1>
    <v-btn class="cart" icon>
      <v-icon icon="mdi-shopping-outline" />
    </v-btn>
    <v-divider class="mb-3" />
    <featured-products />
  </v-container>
</template>

<style lang="scss">
  
  .cart {
    position: fixed;
    top: 1.5rem;
    right: 1.5rem;
  }
</style>

<script setup>
  import FeaturedProducts from '@/components/FeaturedProducts.vue'
</script>
