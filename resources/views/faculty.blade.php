<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of faculty</h1>
    <table border="1px">
        <thead>
            <th>ID</th>
            <th>NAME</th>
        </thead>
        @foreach( $faculty as  $faculties)
        <tr>
            <td>{{$faculties->facultyID}}</td>
            <td>{{$faculties->facultyName}}</td>
            @endforeach
        </tr>
    </table>
  
</body>
</html>