<html>

<head>
    <title>Studenti View</title>
</head>
<body>
    <table>
        <tr>
            <th>ID: </th>
            <th>{{$studenti->getId()}}</th>
        </tr>
        <tr>
            <th>Full Name: </th>
            <th>{{$studenti->getFullName()}}</th>
        </tr>
        <tr>
            <th>Birthday: </th>
            <th>{{$studenti->getBirthdate()}}</th>
        </tr>
        <tr>
            <th>Gender: </th>
            <th>{{$studenti->getGender()}}</th>
        </tr>
    </table>
</body>
</html>

