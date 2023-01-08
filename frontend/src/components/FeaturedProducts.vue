<template>
  
  <v-row>
    <v-col :cols="colWidth" v-for="(product, index) in products" :index="index">
      <v-card class="product text-center my-3 mx-3 pa-6" elevated="2">
        <v-card-title class="title mb-3">
          {{ product.title }}
        </v-card-title>
        <v-card-text class="mb-3">
          {{ product.tagline }}
        </v-card-text>
        <div class="thumb mb-3">
          <img :src="product.img_cover" :alt="product.title"/>
        </div>
        <div class="price mb-3">
          ${{ product.variants[0].price }}
        </div>
        <div class="to-card">
          <v-btn color="blue-darken-4" size="large" block @click="add(product)">
            Add to Card
          </v-btn>
        </div>
      </v-card>
    </v-col>
  </v-row>
  
  <v-snackbar color="blue-darken-3" rounded="pill" v-model="added">
    <div class="text-center">Product added to your card.</div>
  </v-snackbar>
  
</template>

<style lang="scss">
  
  .product {
    
    .title {
      font-size: 2rem;
    }
    
    .thumb > img {
      width: auto;
      max-width: 80%;
      height: auto;
      max-height: 200px;
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
    
    computed: {
      
      colWidth() {
        
        const { md, sm, xs } = this.$vuetify.display;
        
        if (md) {
          return 6;
        }
        
        if (sm || xs) {
          return 12;
        }
        
        return 4;
      }
    },
    
    data: () => ({
      
      added: false,
      
      products: [],
      
    }),
    
    methods: {
      
      add(product) {
        
        this.added = true;
        
        if (typeof localStorage.cart == 'undefined' || localStorage.cart.length == 0) {
          localStorage.cart = '[]';
        }
        
        if (product.variants.length > 0) {
          
          let data = JSON.parse(localStorage.cart);
          
          data.push(product.variants[0]);
          
          localStorage.cart = JSON.stringify(data);
        }
      }
    },
    
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
