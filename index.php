<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>To do List</title>
</head>

<body>
    <div id="app">
        <div class="container w-50 my-5">
            <div class="card">
                <div class="card-head d-flex align-items-center">
                    <img class="w-img" src="./img/jc.jpg" alt="">
                    <h1 class="text-center flex-grow-1">{{titolo}} </h1>
                </div>
                <div class="card-body rounded-2">
                    <div class="input-group mb-3">
                        <input type="text" v-model="newTodo" @keyup.enter="addTodo" class="form-control" />
                        <button class="btn btn-primary" @click="addTodo">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li v-for="(todo, index) in todos" :key="index" class="list-group-item rounded-2 mb-1 d-flex justify-content-between align-items-center">
                            <div>
                                <input type="checkbox" v-model="todo.completed" class="check" />
                                <span class="p-2 flex-grow-1" :class="{ completed: todo.completed }">{{ todo.text }}</span>
                            </div>
                            <button class="btn btn-danger" @click="deleteTodo(index)">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3.2.47/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>