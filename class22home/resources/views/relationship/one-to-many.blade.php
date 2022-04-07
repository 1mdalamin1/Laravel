<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one-to-many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <h2 class="text-center">Class 23 | One to Many | Many to Many | Mutators | Accessor</h2>
    <hr>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Author</th>
                <th>Slug</th>
                <th>Zip Code</th>
            </tr>

            @foreach ($datas as $data)

            <tr>
                <td> {{ $loop->index + 1 }} </td>
                <td> {{ $data->name }} </td>
                <td> {{ $data->user->name }} </td>
                <td> {{ $data->slug }} </td>
                <td> - </td>
            </tr>
            @endforeach
        </table>
        <hr>

</body>
</html>
