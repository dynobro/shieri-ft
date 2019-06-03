<template>
    <div>
        <div class="alert alert-success" role="alert">
            <h4>Tu pago de $ {{this.$root.$data.total}}, ha sido acreditado, porfavor espera tu comida y disfuta!</h4>
        </div>
        
       
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return {
                products: [
                    {
                        title: 'Combo #1, el Familiar',
                        image: 'img/promo1.jpg',
                        body: 'Dos Vieneas Italia + Cocodrilo Italia + Papa Familiar + jugo y Bebida de 1.5 Lts',
                        price: '8.600'
                    }
                ]
            }
        }
    }
</script>
