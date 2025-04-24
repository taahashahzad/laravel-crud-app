<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: 60px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        h2 {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2 class="text-center text-primary mb-4">Edit Category</h2>
    
    <form method="POST" action="/update-category/{{ $category->id }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $category->title }}" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
    </form>
</div>

</body>
</html>
