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
        getCategories (data) {
            axios.get("get-categories").then( (response) => {
                data.commit('getCat', response.data.categories);

            }).catch( (error) => {
                console.log(error);
            })
        } 
    },

    mutations: {
        getCat(state, data){
            return state.categoryData = data
        }
    },
}