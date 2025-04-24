<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Category Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
    }
    .home-container {
      max-width: 700px;
      margin: 80px auto;
      padding: 40px;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      text-align: center;
    }
    h1 {
      font-weight: bold;
      color: #0d6efd;
    }
    p {
      font-size: 1.1rem;
      color: #555;
    }
  </style>
</head>
<body>

<div class="home-container">
  <h1>Category Manager</h1>
  <p>This is a simple CRUD application built with Laravel and Bootstrap. It allows users to create, view, update, and delete categories from a database. The project demonstrates basic routing, controller actions, form handling, and dynamic data rendering using Blade templates.</p>
  <a href="/categories" class="btn btn-primary btn-lg mt-3">View Categories</a>
</div>

</body>
</html>
