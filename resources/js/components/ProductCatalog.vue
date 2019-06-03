<template>
<div>
    <order-info></order-info>
    <ul id="onef" style="list-style:none; padding-left:0 !important;">
        <li v-for="item in products" v-bind:key="item.id" style="margin-bottom: 15px;"> 
            <product-item v-bind:product="item.product" v-bind:qty="item.quantity" ></product-item>
        </li>
    </ul>
</div>
</template>

<script>
    import ProductItem from './ProductItem.vue';
    import OrderInfo from './OrderInfo.vue';

    export default {
        mounted() {
            console.log('Component mounted.')
            console.log({
                p: this.products
            })
        },
        components: {
            'product-item': ProductItem,
            'order-info': OrderInfo
        },
        data: function(){

            var orderList =  this.$root.$data.myOrder;
            var productsList = [
                    {
                        id:1,
                        title: 'Combo #1, el Familiar',
                        image: 'img/promo1.jpg',
                        body: 'Dos Vieneas Italia + Cocodrilo Italia + Papa Familiar + jugo y Bebida de 1.5 Lts',
                        price: 8600
                    },
                    {
                        id:2,
                        title: 'Combo #2, para los Bajones',
                        image: 'img/promo2.jpg',
                        body: 'Cocodrilo Italaia + 3 Empanadas de Queso + Papas Medianas',
                        price: 2600
                    },
                    {
                        id:3,
                        title: 'Combo #3, para las Parejas',
                        image: 'img/promo3.jpg',
                        body: '2 Churrascos "Cocodrilos" Italia + 2 Bebidas en Lata 350cc',
                        price: 4600
                    }
                ];


            var products = productsList.map((product) => {
                var orderItem = _.find(orderList, (order) => {
                    return order.product.id === product.id
                });
                return {
                    product,
                    quantity: orderItem !== undefined ? orderItem.quantity : 0
                }
            });
console.log({
    products
})
            return {
                products
            }
        }
    }
</script>