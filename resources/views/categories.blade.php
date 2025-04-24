<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .table th, .table td {
      vertical-align: middle;
    }
    .btn-action {
      margin-right: 5px;
    }
    h2 {
      font-weight: bold;
    }
    .action-buttons {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h2 class="text-primary mb-4">Categories</h2>  
  
  <div class="action-buttons">
    <a href='/createCategory' class="btn btn-success">+ New Category</a>
    <a href='/' class="btn btn-secondary">🏠 Home</a>
  </div>
  
  <div class="card shadow-sm">
    <div class="card-body p-0">
      <table class="table table-hover mb-0">
        <thead class="table-primary">
          <tr>
            <th>S.No.</th>
            <th>Title</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $category->title }}</td>
            <td>
              <a href="/edit-category/{{ $category->id }}" class="btn btn-sm btn-outline-primary btn-action">Edit</a>
              <a href="/delete-category/{{ $category->id }}" class="btn btn-sm btn-outline-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
