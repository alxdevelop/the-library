import Vue from 'vue';
import VueResource from 'vue-resource';

const Book = module.export = function() {
    Vue.use(VueResource);
    new Vue({
        el: '#book',

        mounted() {
            this.getBooks();
        },

        data: {
            books: [],
            search: '',
            formNew: false,
        },

        computed: {
            filteredBooks(){
                const self = this;
                return self.books.filter(function(book){
                    if(self.search) {
                        return book.name.toLowerCase().indexOf(self.search.toLowerCase()) !== -1;
                    }
                    return book;
                });
            }
        },

        methods: {
            formOpen(val){
                this.formNew = val;
            },
            getBooks(){
                this.$http.get('/api/get-books').then(response => {
                    this.books = response.body;
                    console.log(this.books);
                }, response => {

                });
            }
        }
    });
};

window.Book = Book;
