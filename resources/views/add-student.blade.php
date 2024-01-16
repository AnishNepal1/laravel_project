<!-- add-students.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <h2>Add Student</h2>
    <form method="post" action="{{url('/add-student')}}">
        
        @csrf <!-- CSRF token for security -->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                    @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
    @endif
        <!-- Student Name -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" >
        </div>
        <!-- Phone Number -->
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone_number" id="phone" class="form-control">
        </div>
        <!-- Gender -->
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" class="form-control">
                <option value="1" >Male</option>
                <option value="2" >Female</option>
                <option value="3" >Others</option>
            </select>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
</body>
</html>