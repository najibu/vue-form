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
    @include ('projects.list')

    <form method="POST" action="/projects">
      <div class="control">
        <label for="name" class="name">Project Name:</label>
        <input type="text" name="name" class="input">
      </div>

      <div class="control">
        <label for="description" class="description">Project Description:</label>
        <input type="text" name="description" class="input">
      </div>

      <div class="control">
        <button class="button is-danger">Create</button>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>
  <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
  <script src="/js/app.js"></script>
</body>
</html>