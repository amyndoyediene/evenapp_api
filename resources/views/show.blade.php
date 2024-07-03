<!-- resources/views/users/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Age: {{ $user->age }}</p>
</body>
</html>
