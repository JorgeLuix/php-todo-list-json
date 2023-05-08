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
            axios.get("api.php?action=getTodos").then(function(response) {
                //self.todos = response.data.todos;
                console.log(response.data);
              });
        },
        
      }, 
      mounted() {
        this.getTodos();
      },
}).mount("#app");