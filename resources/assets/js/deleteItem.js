import Vue from 'vue';
// import sweetalert from 'sweetalert';

const DeleteItem = module.export = function(){

    new Vue({
        el: '#list_items',

        data: {
            id: '',
            name: '',
            user: '',
        },

        methods: {
            CancelDeleteCategory(id) {
                $('#wrap_del_'+id).hide();
            },
            validateDelete(id) {
                $('#wrap_del_'+id).show();
            },
            showModal(id, name, user) {
                this.id = id;
                this.name = name;
                this.user = user;
                $('#modalBook').modal({
                   show: 'true'
               });
           },
           clearUser() {
               this.user = '';
           }
        }
    });

};

window.DeleteItem  = DeleteItem;
