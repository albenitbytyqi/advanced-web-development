<html>
<head>
    <title>Add Gym Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
    <body>
    <center>
        <form method="POST" action="{{route('add_member_gym')}}" enctype="multipart/form-data">
            @csrf
            <a class="btn btn-primary" href="{{route('viewGymMember')}}"> View Member</a><br><br>
            <label>First Name</label><br>
            <input type="text" name="first_name"><br>
            <label>Last Name</label><br>
            <input type="text" name="last_name"><br>
            <label>Birthdate</label><br>
            <input type="date" name="birthdate"><br>
            <label>Expire Date</label><br>
            <input type="date" name="expire_date"><br>
            <label>Profile Picture</label><br>
            <input type="file" name="profile_picture"><br><br>
            <input class="btn btn-success" type="submit" value="Save">
        </form>
    </center>
    </body>
</html>
