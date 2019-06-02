<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">name</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $category->name }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
