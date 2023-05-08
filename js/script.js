const {createApp}  = Vue; 
createApp ({
    data() {
        return {
          titolo: "Todo List",
          todos: [],
          newTodo: "",
        };
      },
      methods: {
         getTodos() {
            axios.get('api.php').then((response)=> {
                this.todos = response.data;
                console.log(response.data);
              });
        },
        
      }, 
      mounted() {
        this.getTodos();
      },
}).mount("#app");