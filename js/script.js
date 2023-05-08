const { createApp } = Vue;

createApp({
  data() {
    return {
      titolo: "Todo List",
      todos: [],
      newTodo: "",
    };
  },
  methods: {
    getTodos() {
      axios.get('api.php').then((response) => {
        this.todos = response.data;
        console.log(response.data);
      });
    },
    addTodo() {
      if (this.newTodo.trim() !== "") {
        this.todos.push(this.newTodo.trim());
        this.newTodo = "";
        this.saveTodos();
        
      }
    },
    deleteTodo(index) {
      this.todos.splice(index, 1);
      this.saveTodos();
    },
    toggleCompleted(index) {
        this.todos[index].completed = !this.todos[index].completed;
        this.saveTodos();
      },
    saveTodos() {
      axios.post('api.php', { todos: this.todos }).then((response) => {
        console.log(response.data);
      });
    },
  },
  mounted() {
    this.getTodos();
  },
}).mount("#app");