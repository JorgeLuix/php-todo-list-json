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
        this.todos = response.data;
        for (let i = 0; i < this.todos.length; i++) {
          this.todos[i].completed = false;
        }
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