<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vue-Form</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
   <style>body { padding-top: 40px; }</style>
</head>
<body>
  <div id="app" class="container">

    <example></example>

    @include ('projects.list')
                                          <!-- Use @submit.prevent to overrun deafaults and use axios to create projects -->
    <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
      <div class="control">
        <label for="name" class="name">Project Name:</label>
                                                    <!-- v-model used to attached name to the projects table in app.js -->
        <input type="text" name="name" class="input" v-model="form.name"> <!-- event.target.name -->
                                <!-- v-text used to bind text to element -->
        <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
      </div>

      <div class="control">
        <label for="description" class="description">Project Description:</label>
        <input type="text" name="description" class="input" v-model="form.description">
        <span class="help is-danger" v-text="form.errors.get('description')" v-if="form.errors.has('description')" ></span>
      </div>

      <div class="control">
        <button class="button is-danger" :disabled="form.errors.any()">Create</button>
      </div>
    </form>
  </div>

  <script src="/js/vendor.js"></script>
  <script src="/js/app.js"></script>
</body>
</html>