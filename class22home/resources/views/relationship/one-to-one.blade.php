<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one-to-one</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <h2 class="text-center">Class 22 | Eloquent Relationships | One To One</h2>
    <hr>
    <div class="container">
        <!-- <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Zip Code</th>
            </tr>

        </table> -->
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>id</th>
                <th>userName</th>
                <th>Address</th>
            </tr>
            @foreach ($profiles as $profile)

            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->user->name }}</td>
                <td>{{ $profile->address }}</td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>
