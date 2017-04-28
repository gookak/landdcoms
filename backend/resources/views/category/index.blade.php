<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>detail</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categorys as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->detail }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categorys->links() }}
</body>

</html>