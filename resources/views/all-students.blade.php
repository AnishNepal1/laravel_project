<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/view-students.blade.php -->
    <div class="container">
        <h2>View Students</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->phone_number }}</td>
                            <td>
                                @if ($student->gender=='1')
                                Male
                                @elseif ($student->gender=='2')
                                Female
                                @elseif ($student->gender=='3')
                                Others
                                @endif
                            </td>
                            <td>
                                <a href="{{url('edit-student',$student->id)}}">Edit</a>
                                <a href="{{url('delete-student',$student->id)}}">Delete</a>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>