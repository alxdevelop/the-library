import Vue from 'vue';

const Book = module.export = function() {
    new Vue({
        el: '#table-book',

        mounted() {
            alert('monted');
        },
    });
};

window.Book = Book;
