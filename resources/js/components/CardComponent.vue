<template>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
        <img class="img card-img-top"
            :src="product.image">
        <div class="card-body">
            <h3>{{product.name}}</h3>
            <p class="card-text">{{ product.description}}</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" v-on:click="deleteProduct" class="btn btn-sm btn-outline-secondary">Delete</button>
            </div>
            <small class="text-muted">{{ product.price }}</small>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            product: {
                type: Object,
                required: true,
            }
        },
        data() {
            return {
               
            }
        },

        methods: {
            deleteProduct(){
                this.$emit('delete');
            }
        }
    }
</script>