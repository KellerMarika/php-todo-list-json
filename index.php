<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- indispensabile per far funzionare le media-queries -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TITOLO</title>

  <!-- font-family: 'Roboto', sans-serif; -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet">

  <!-- font-family: fontawesome -->
  <script src="https://kit.fontawesome.com/a19b158346.js" crossorigin="anonymous"></script>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <!-- my-css -->
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
  <div id="app">

    <div class="container">
      <div class="row justify-content-center">
        <div class="form-container col-7">

          <!-- create new task form -->
          <form class="form-inline" @submit.prevent="createNewTask">
            <fieldset class="border rounded-4 p-5">
              <legend class="fs-2 fw-2 text-capitalize">add Task:</legend>

              <div class="row">
                <label for="newTask" class="">wrote task to add:</label>
                <div class="form-group  col-11">
                  <input type="text" class="form-control" id="newTask" placeholder="your new task"
                      v-model="newTask.text">
                </div>
                <button type="submit" class="btn btn-danger mb-2 col-1"
                  > <i
                      class="fa fa-plus"></i> </button>
              </div>
            </fieldset>
          </form>

          <section class="to-do-list-container  m-auto">
            <ul class="mt-5 border rounded-4 p-5">

              <li v-for="task in tasks"
                  class="d-flex w-100 border-bottom align-items-baseline">
                <label for="done">
                  <!--    <i class="fa-regular fa-circle-check"></i>
                  <i class="fa-regular fa-circle"></i> -->

                  <input type="checkbox" id="done" name="done" value="true" v-model="task.done" class="m-3">
                </label>

                <!--  :class="task.done?? text-decoration-line-through" -->
                <h5 class="flex-fill">{{task.name}}</h5>
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </div>
  </div>

  <!-- nostri file javascript -->
  <script type="module" src="js/main.js"></script>

</body>

</html>