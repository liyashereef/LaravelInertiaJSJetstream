<template>
    <Layout>
        <div class="flex justify-between">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Product List
                    </h2>
<button @click="openModal()"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">
                       New Products
                    </button>
        </div>
<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    
    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" >
      <div class="group relative" v-for="product in products.data" :key="product.id">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="https://picsum.photos/200" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{product.title}}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{product.description.substr(0,10)}}...</p>
          </div>
          <p class="text-sm font-medium text-gray-900">${{product.price}}</p>
        </div>
      </div>

      <!-- More products... -->
    </div>
  </div>
</div>
    </Layout>
</template>
<script>
import Layout from '../shared/Layout';
export default {
    data(){
        return{
            isOpen:false,
        }
    },
    components:{Layout},
    props:{
        products:Object
    },methods: {
        openModal() {
            this.isOpen = true;
        }
    },
    setup() {
        
    },
}
</script>