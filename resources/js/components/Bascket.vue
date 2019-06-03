<template>
    <div>
        <order-info></order-info>
        <ul id="onef" style="list-style:none; padding-left:0 !important;" v-show="this.$root.$data.total > 0">
            <li v-for="item in this.$root.$data.myOrder" v-bind:key="item.id"  style="margin-bottom: 15px;" > 
                <product-item v-bind:product="item.product" v-bind:qty="item.quantity" mode="bascket"></product-item>
            </li>
        </ul>

        <div class="alert alert-warning" role="alert" v-show="this.$root.$data.total === 0">
            <h3>No has seleccionado nada aún.</h3>
        </div>
    </div>
</template>

<script>
    import ProductItem from './ProductItem.vue';
    import OrderInfo from './OrderInfo.vue';

    export default {
        mounted() {
        },
        updated(){
            console.log('updated');
        },
        components: {
            'product-item': ProductItem,
            'order-info': OrderInfo
        }
    }
</script>
