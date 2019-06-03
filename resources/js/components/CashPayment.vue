<template>
    <div>
        <div class="alert alert-info" role="alert">
            <h4>Total: $ {{this.$root.$data.total}}</h4>
        </div>
        <div class="alert alert-warning" role="alert">
            <h4>Tu turno para caja es el: 4</h4>
            <h4>Ahora atendemos al: 3, por favor espera tu turno</h4>
        </div>

       
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')

            setTimeout(() => {
                this.$router.push('/wait-for-order')
            }, 4000)
        }
    }
</script>
