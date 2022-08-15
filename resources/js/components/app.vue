<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component Laravel Vue</div>
                    <div class="card-body">
                       Auth User name : {{user.name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Hello World',
            user:{}
        }
    },
    methods:{
        getAuthUser(){
            axios.get('/api/get-authenticated-user').then(({ data }) => {
              console.log(data)
              this.user = data;
            }).catch((error) => {
                console.log(error);
            });
        }
    },
    created(){
        this.getAuthUser();
    }
};
</script>