<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Create Todo</h1>
<form action="/todo/create" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Todo Title" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Create Todo</button>
</form>
</body>
</html>

<!-- resources/views/todos.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<h1>Todo List</h1>
<table>
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($todos as $todo)
        <tr>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->description }}</td>
            <td>{{ $todo->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
