const { createApp } = Vue;

createApp({
  data() {
    return {
      titolo: "To Do List",
      todos: [],
      apiUrl: 'api.php',
      newTodo: "",
    };
  },
  methods: {
    getTodos() {
      axios.get(this.apiUrl).then((response) => {
        this.todos = response.data.map(todo => {
            todo.completed = false;
            return todo;
          });
      });
    },
    addTodo() {
      if (this.newTodo.trim() !== "") {
        this.todos.push({
            text:this.newTodo.trim(),
            completed: false
        });
        this.newTodo = "";
        this.saveTodos();
        
      }
    },
    deleteTodo(index) {
      this.todos.splice(index, 1);
      this.saveTodos();
    },
    saveTodos() {
      axios.post(this.apiUrl, { todos: this.todos }).then((response) => {
        console.log(response.data);
      });
    },
  },
  mounted() {
    this.getTodos();
  },
}).mount("#app");