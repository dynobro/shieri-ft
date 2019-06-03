<template>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <div class="card" >
                <img class="card-img-top" v-bind:src="product.image" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{product.title}}</h5>
                    <p class="card-text">{{product.body}}</p>
                    <button type="button" class="btn btn-secondary">$ {{product.price.toLocaleString('es-CL')}} X {{quantity}}</button>
                    <button type="button" v-on:click="addToOrder" class="btn btn-success">Agregar</button>
                    <button v-show="quantity > 0" type="button" v-on:click="sustractFromOrder" class="btn btn-danger">Quitar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['product', 'mode', 'qty'],
        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return {
                quantity: this.$props.qty !== undefined ? this.$props.qty : 0
            }
        },
        methods: {
            addToOrder: function() {

                const product  = this.$props.product;
                const productInOrderIndex = this.$root.$data.myOrder.findIndex((order) =>{ return product !== undefined && order.product.id === product.id });
                this.$data.quantity++;

                if(!(productInOrderIndex > -1))
                {
                    this.$root.$data.myOrder.push({
                        product: product,
                        quantity: this.$data.quantity
                    });
                }
                else
                {    
                    var productOrder = this.$root.$data.myOrder[productInOrderIndex];
                    productOrder.quantity = this.$data.quantity;  
                    this.$root.$data.myOrder[productInOrderIndex] = productOrder;
                    
                }
                this.$root.calculateTotal();
                //console.log({x : this.$root.$data.myOrder})
            },
            sustractFromOrder: function() {
                const product  = this.$props.product;
                const productInOrderIndex = this.$root.$data.myOrder.findIndex((order) =>{ return order.product.id === product.id });
                
                if(productInOrderIndex > -1)
                {
                    if(this.$data.quantity > 1){
                        this.$data.quantity--;
                        var productOrder = this.$root.$data.myOrder[productInOrderIndex];
                        productOrder.quantity = this.$data.quantity;  
                        this.$root.$data.myOrder[productInOrderIndex] = productOrder;
                    }else{
                        _.remove(this.$root.$data.myOrder, (item) => {
                            return item.product !== undefined && item.product.id === product.id;
                        });
                        this.$data.quantity = 0;
                    }

                    this.$root.calculateTotal();
                    
                }

                
                //console.log({x : this.$root.$data.myOrder})
            }
        }
    }
</script>