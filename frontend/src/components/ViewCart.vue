<template>
  
  <v-btn class="cart" icon @click="view" v-if="products.length > 0">
    <v-icon icon="mdi-shopping-outline" />
  </v-btn>
  
  <v-dialog transition="dialog-top-transition" max-width="600" v-model="cart">
    <template v-slot:default="dialog">
      <v-card class="pa-3">
        <v-row v-for="(product,index) in products" :index="index">
          <v-col cols="2" class="d-flex align-center">
            <img :src="product.img_cover" height="40" />
          </v-col>
          <v-col cols="6" class="d-expand d-flex align-center">
            {{ product.title }}
          </v-col>
          <v-col cols="2" class="d-flex align-center">
            ${{ product.price }}
          </v-col>
          <v-col cols="2" class="d-flex align-center">
            <v-btn icon size="small" @click="remove(index)">
              <v-icon icon="mdi-delete-outline" />
            </v-btn>
          </v-col>
        </v-row>
      </v-card>
    </template>
  </v-dialog>
  
</template>

<style lang="scss">
  
  .cart {
    position: fixed;
    top: 1.5rem;
    right: 1.5rem;
  }
  
</style>

<script>
  
  export default {
    
    data: () => ({
        
        cart: false,
        
        products: [],
    }),
    
    methods: {
      
      reload() {
        
        if (typeof localStorage.cart == 'undefined' || localStorage.cart.length == 0) {
          localStorage.cart = '[]';
        }
        
        this.products = JSON.parse(localStorage.cart);
      },
      
      view() {
        
        this.reload();
        
        this.cart = true;
      },
      
      remove(index) {
        
        if (typeof localStorage.cart == 'undefined' || localStorage.cart.length == 0) {
          localStorage.cart = '[]';
        }
        
        let data = JSON.parse(localStorage.cart);
        
        data.splice(index, 1);
        
        localStorage.cart = JSON.stringify(data);
        
        if (data.length == 0) {
          this.cart = false;
        }
        
        this.reload();
      },
    },
    
    mounted() {
      
      this.reload();
      
      window.addEventListener('item-added', (event) => {
        this.reload();
      });
    },
  }
</script>
