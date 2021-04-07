<html>
<head>
    <title>Add Gym Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<center>
    <form method="POST" action="{{route('editGymMember')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$gymMember->getId()}}">
        <label>First Name</label><br>
        <input type="text" name="first_name" value="{{$gymMember->getFirstName()}}"><br>
        <label>Last Name</label><br>
        <input type="text" name="last_name" value="{{$gymMember->getLastName()}}"><br>
        <label>Birthdate</label><br>
        <input type="date" name="birthdate" value="{{$gymMember->getBirthdate()}}"><br>
        <label>Expire Date</label><br>
        <input type="date" name="expire_date" value="{{$gymMember->getExpireDate()}}"><br>
        <label>Profile Picture</label><br>
        <input type="file" name="profile_picture" value="{{$gymMember->getProfilePicture()}}"><br><br>
        <input class="btn btn-success" type="submit" value="Save">
    </form>
</center>
</body>
</html>
