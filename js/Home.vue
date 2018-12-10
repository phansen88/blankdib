<template>
    <div class="row-categories">
        <h4>fdgfhgf</h4>
        <div class="row flex-xl-nowrap">
            <div class="col-md-20" >
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/318x180" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">
                            yo
                        </h4>
                        <p class="card-text">
                            fdgfg
                        </p>
                        <a  class="btn btn-login">Meld dit dibs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home",
         data() {
            return {
                records: [
                    {
                        label: "wtf"
                    }
                ]
            }
        },
        created () {
            console.log("im running");
            axios.get(`/api/products/`).then(response => {
                this.records = response.data
            }).catch(e => {
                console.log(e);
            })
        },
        methods: {
            
        }
    }
</script>