<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Header -->
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    
    <!-- Form -->
    <form action="/welcome" method="post">
        @csrf

        <!-- Firstname -->
        <p>First name:</p>
        <input type="text" name="firstname" id="firstname">

        <!-- Last name -->
        <p>Last name:</p>
        <input type="text" name="lastname" id="lastname">

        <!-- Gender -->
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>

        <!-- Nationallity -->
        <p>Nationallity:</p>
        <select name="nationallity" id="nationallity">
            <option value="indonesian">Indonesian</option>
            <option value="american">American</option>
            <option value="british">British</option>
            <option value="arabian">Arabian</option>
        </select>

        <!-- Language Spoken -->
        <p>Language Spoken:</p>
        <input type="checkbox" name="indonesia`" id="language">
        <label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="english" id="">
        <label for="english">English</label><br>
        <input type="checkbox" name="other" id="">
        <label for="other">Other</label><br>

        <!-- Bio -->
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>