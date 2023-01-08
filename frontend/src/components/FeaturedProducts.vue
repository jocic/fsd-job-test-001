<template>
  
  <v-row>
    <v-col cols="4" v-for="(product, index) in products" :index="index">
      <v-card class="product text-center my-3 mx-3 pa-6" elevated="2">
        <v-card-title class="title mb-3">
          {{ product.title }}
        </v-card-title>
        <v-card-text class="mb-3">
          {{ product.tagline }}
        </v-card-text>
        <div class="thumb mb-3">
          <img :src="product.img_cover" :alt="product.title" height="200" />
        </div>
        <div class="price mb-3">
          ${{ product.variants[0].price }}
        </div>
        <div class="to-card">
          <v-btn color="blue-darken-4" size="large" block>
            Add to Card
          </v-btn>
        </div>
      </v-card>
    </v-col>
  </v-row>
  
</template>

<style lang="scss">
  
  .product {
    
    .title {
      font-size: 2rem;
    }
    
    .price {
      background: #111;
      color: #fff;
      font-size: 2rem;
      padding: 0.5rem;
    }
  }
</style>

<script>
  
  export default {
    
    data: () => ({
      
      products: [],
    }),
    
    mounted() {
      
      let that = this;
      
      this.axios.get('/api/products').then((response) => {
        
        that.products = response.data;
      })
      .catch((error) => {
        
        
      })
      .then(() => {
        
        
      });
    }
  }
</script>
