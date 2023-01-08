<template>
  
</template>

<script setup>
  import HelloWorld from '@/components/HelloWorld.vue'
</script>

<script>
  
  export default {
    
    mounted() {
      
      this.axios.get('/api/products').then((response) => {
        
        
      })
      .catch((error) => {
        
        
      })
      .then(() => {
        
        
      });
    }
  }
</script>
