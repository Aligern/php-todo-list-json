<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik+Scribble&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Css/style.css" />

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="Js/script.js" type="module"></script>
    <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
    <title>Starship preparation</title>
  </head>

  <body>
    <div id="app">
      <main class="container my-4 bg-light p-2">
        <h1>Our Starship Components</h1>

        <ul class="list-group list-group-flush">
          <li
            class="list-group-item d-flex justify-content-between"
            v-for="(newItem, index) in starShip"
            :key="newItem.id"
          >
            <span
              :class="{'text-decoration-line-through' : newItem.done}"
              @click="toggleDone(newItem.id)"
              class="pointer"
            >
              {{newItem.text}}
            </span>

            <i
              class="fa-regular fa-trash-can pointer"
              @click="removeItem(newItem.id)"
            ></i>
          </li>
        </ul>

        <div>
          <h3>Insert the other components</h3>

          <div class="mb-3">
            <label for="shiptext" class="form-label">
              Insert ship component
            </label>

            <input
              type="text"
              class="form-control"
              id="shiptext"
              v-model="newComponent.text"
              @keyup.enter="addComponent"
            />

            <button class="btn btn-primary my-2" @click="addComponent">
              add
            </button>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
