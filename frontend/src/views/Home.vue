<template>
  <v-container>
    <h1 class="text-center text-h3 mb-3">Featured Products</h1>
    <v-divider class="mb-3" />
    <featured-products />
  </v-container>
  <view-cart />
</template>

<script setup>
  import FeaturedProducts from '@/components/FeaturedProducts.vue'
  import ViewCart from '@/components/ViewCart.vue'
</script>
