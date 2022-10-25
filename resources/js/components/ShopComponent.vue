<template>
	<div class="container">
        
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <h2>Add new product</h2>
                <FormComponent @add="newProduct"></FormComponent>
            </div>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
            <div class="offset-md-3">
                <h2>Products</h2>

            </div>
            
        </div>
          <div class="row">
				<CardComponent v-for="(product,index) in products" 
					:product="product"
					@delete="deleteProduct(index)"
					:key="product.id">
				</CardComponent>
          </div>
        </div>
      </div>
</template>

<script>

	import CardComponent from './CardComponent.vue';
	import FormComponent from './FormComponent.vue';
	
	

	export default {
		components: {
    		CardComponent,
    		FormComponent
	},

	data() {
		return {
			
			products: [
				{
                    id: '1',
                    name: 'Product 1',
                    description: 'Quia voluptatem quia ut rerum sit harum in deserunt. Sit libero esse cumque ut tempora. Omnis autem voluptas et voluptatem vel rerum.',
                    image: 'https://via.placeholder.com/640x480.png/00aa77?text=praesentium',
                    price: 10.00
                },
				{
                    id: '2',
                    name: 'Product 2',
                    description: 'Quia voluptatem quia ut rerum sit harum in deserunt. Sit libero esse cumque ut tempora. Omnis autem voluptas et voluptatem vel rerum.',
                    image: 'https://via.placeholder.com/640x480.png/00aa77?text=praesentium',
                    price: 12.00
                }
			
			]
		}
	},
	methods: {
		newProduct(product){
			//console.log(product, ':D');
			this.products.push(product);
			
		},
		deleteProduct(index){
			this.products.splice(index,1);
			
		}
	},
	}

</script>

<style>

</style>