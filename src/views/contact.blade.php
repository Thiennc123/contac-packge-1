<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>

    <h1>My First Page11111s</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
