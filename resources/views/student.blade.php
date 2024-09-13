DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{url('CSS/style.css')}}">
</head>

<body>
    <nav>
        <ul>
            <li><a href<!="{{url("/dashboard")}}">Home</a></li>
            <li><a href="{{url("/students")}}">Student List</a></li>
        </ul>
    </nav>
    <header>
        <h1>Student Management</h1>
    </header>
    <h2>Add Student</h2>
    <form action="/students/insert" method="POST" required class="form">
        @csrf
        <label for="">Name:</label><br>
        <input type="text" name="name" class="input" required><br>
        <label for="">Age:</label><br>
        <input type="text" name="age"   class="input" required><br>
        <label for="">Grade:</label><br>
        <select type="text" name="grade"  class="input" required>
            <option value="A" name="grade">A</option>
            <option value="B" name="grade">B</option>
            <option value="C" name="grade">C</option>
            <option value="D" name="grade">D</option>
            <option value="F" name="grade">F</option>
        </select>
        <br>
        <input type="submit" class="submit">
    </form>

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($students as $stu)
            <tr >
                <td>{{$stu->id}}</td>
                <td>{{$stu->stu_name}}</td>
                <td>{{$stu->age}}</td>
                <td>{{$stu->grade}}</td>
                <td><form action="{{route('students/delete',$stu->id)}}" method="GET" >
                    @csrf 

                    <input type="submit" class="button" value="ลบข้อมูล" onclick="return confirm('Are you sure you want to delete this student?')"></input>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>