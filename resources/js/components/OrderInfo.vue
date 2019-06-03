<template>
    <div class="alert alert-info" role="alert" v-show="this.$root.$data.total > 0">
        <h3>Total: $ {{this.$root.$data.total.toLocaleString('es-CL')}}</h3>
        <router-link class="btn btn-success" to="/cash-payment">Pago con Efectivo</router-link>
        <button class="btn btn-primary">Pago con Red Compra</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.$root.calculateTotal();
        }
    }
</script>
