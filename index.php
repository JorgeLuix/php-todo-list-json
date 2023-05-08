<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Todo List</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div id="app">
      <h1>{{titolo}} </h1>
      <ul>
        <li v-for="(todo, index) in todos" :key="index">
            {{ todo }}
            <button @click="deleteTodo(index)">Cancella</button>
        </li>
      </ul>
        <input type="text" v-model="newTodo" />
        <button>Aggiunge Todo</button>
     
    </div>

    <script src="https://unpkg.com/vue@3.2.47/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>

