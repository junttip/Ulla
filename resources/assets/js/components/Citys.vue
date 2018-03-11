<template>
    <div>
        <h2>Citys</h2>
        <div class="card card-body" v-for="city in citys" v-bind:key="city.Postcode">
            <h3>{{city.Name}}}</h3>

        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                citys: [],
                city: {
                    Postcode: '',
                    Name:''
                },
                city_id: '',
                pagination:{},
                edit: false
            }
        },
        created() {
            this.fetchCitys();

        },
        methods: {
            fetchCitys() {
                fetch('api/citys')
                    .then(res => res.json())
                    .then(data => {
                        this.citys = data;
                    });
            }
        }
    };
</script>