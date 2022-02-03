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
            axios.get("").then( () => {

            }).catch( () => {
                
            })
        }
    },

    mutations: {

    },
}