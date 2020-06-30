<!DOCTYPE html>

<html>

<head>
    <title>Sign Up</title>
</head>

<body>

    <h1>Buat Account Baru!</h1>
    <form action="{{url('welcome')}}" method="post" >
        @csrf <!-- {{ csrf_field() }} -->
        <h3>Sign Up Form</h3>
        <p>First name</p>
        <input name=fname>
        <p>Last name</p>
        <input name=lname>
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <p>Nationality:</p>
        <select name="Nationality" required>
            <option value="indonesia">Indonesia</option>
            <option value="matematika">Inggris</option>
            <option value="matematika">Malaysia</option>
            <option value="matematika">Singapura</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" id="bindo" name="bindo" value="Bahasa Indonesia">
        <label for="bindo"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="bing" name="bing" value="English">
        <label for="bing"> English</label><br>
        <input type="checkbox" id="other" name="other" value="other">
        <label for="other"> Other</label><br>
        <p>Bio:</p>
        <textarea rows="12" cols="35"></textarea><br>
        <button href="welcome">Sign Up</button>
    </form>
</body>

</html>