export default {

    state: {
        count: 25
    },

    getters:{
        test (state){
            return state.count
        }

    },

    mutations: {
         increment (state) {
            state.count++;
       }
    },
}