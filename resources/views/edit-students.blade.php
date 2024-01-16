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
        <h2>Edit Student</h2>
        <form method="post" action="{{url('/edit-student',$student->id)}}">
            @csrf <!-- CSRF token for security -->
            <!-- Student Name -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name"  value="{{$student->name}}" >
            </div>
            <!-- Phone Number -->
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" name="phone_number" id="phone" value="{{$student->phone_number}}" >
            </div>
            <!-- Gender -->
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="1" >Male</option>
                    <option value="2" >Female</option>
                    <option value="3" >Others</option>
                </select>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    
</body>
</html>