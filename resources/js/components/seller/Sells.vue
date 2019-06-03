<template>
    <div class="card">
        <h5 class="card-header">Venta</h5>
        <div class="card-body">
            <h5 class="card-title">Cola de Pagos</h5>
            
        </div>
    </div>
</template>

<script>
    export default {
        data: {
            ordersWaiting: [],
        },
        mounted() {
            console.log('Seller component mounted');
        }
    }
</script>
