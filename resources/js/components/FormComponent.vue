<template>
    <form v-on:submit.prevent="newProduct()">
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" id="name" v-model="product.name">
                    </div>

                    <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" v-model="product.description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" v-model="product.price">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
</template>
<script>

    let defaultProduct = {
                        name: '',
                        descrption: '',
                        price: '',
                        image: 'https://via.placeholder.com/640x480.png/00aa77?text=praesentium',
                    
        };

    export default {
        data() {
            return {
                product: Object.assign({}, defaultProduct)
                /*product: {
                    id: '3',
                    name: '',
                    description: '',
                    price: '',
                    image: 'https://via.placeholder.com/640x480.png/00aa77?text=praesentium'
    
                }*/
            }
                
        },
        methods: {
            newProduct() {
                this.$emit('add', this.product);
                this.product.name = '';
                this.product.description = '';
                this.product.price = '';
                this.product.image = 'https://via.placeholder.com/640x480.png/00aa77?text=praesentium';
                //this.product = Object.assign({}, defaultProduct);  // esto es lo mismo que lo anterior
            }
        }
    }
</script>