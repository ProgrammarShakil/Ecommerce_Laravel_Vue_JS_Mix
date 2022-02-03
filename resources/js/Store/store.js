export default {

    state: {
        categoryData: []
    },

    getters: {
        catPass (state) {
            return state.categoryData
        }

    },

    actions: {
        getCategories () {
            axios.get("get-categories").then( (response) => {
                console.log(response.data.categories);

            }).catch( (error) => {
                console.log(error);
            })
        }
    },

    mutations: {

    },
}