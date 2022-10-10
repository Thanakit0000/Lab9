<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

    <form action="./insertmember2.php" method="post">
        username : <input type="text" name="username"><br><br>
        password : <input type="password" name="password"><br><br>
        name : <input type="text" name="name"><br><br>
        address : <br> <textarea name="address" cols="40" rows="3"></textarea> <br><br>
        mobile : <input type="text" name="mobile" pattern="[0-9]{10}"><br><br>
        email : <input type="email" name="email" style="width: 250px;"><br><br>
        <input type="submit" value="เพิ่มสมาชิก">
    </form>
</body>

</html>