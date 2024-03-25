<!DOCTYPE html>
<html >
<head>
    <title>Document</title>
</head>
<body>
    <form action="main.php" method="POST">
        Name: <input type="text" name="name"><br><br>
        Phone Number: <input type="tel" name="phone"><br><br>
        Email: <input type="email" name="email"><br><br>
        Gender:
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other<br><br>
        Skills:
        <input type="checkbox" name="skills[]" value="html"> HTML
        <input type="checkbox" name="skills[]" value="css"> CSS
        <input type="checkbox" name="skills[]" value="javascript"> JavaScript
        <input type="checkbox" name="skills[]" value="python"> Python<br><br>
        Address: <textarea name="address" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Submit">
      </form>
      
</body>
</html>