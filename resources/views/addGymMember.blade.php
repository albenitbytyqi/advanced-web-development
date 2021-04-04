<html>
<head>
    <title>Add Gym Member</title>
</head>
    <body>
    <center>
        <form method="POST" action="{{route()}}">
            <label>First Name</label><br>
            <input type="text" name="first_name"><br>
            <label>Last Name</label><br>
            <input type="text" name="last_name"><br>
            <label>Birthdate</label><br>
            <input type="date" name="birthdate"><br>
            <label>Expire Date</label><br>
            <input type="date" name="expire_date"><br>
            <label>Profile Picture</label><br>
            <input type="file" name="profile_picture"><br>
            <input type="submit" value="Save">
        </form>
    </center>
    </body>
</html>
