<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="check-form.js"></script>
</head>
<body>
<h1>Form test</h1>
<form action="/demo" onsubmit="return validateForm()">
    <input type="text" name="nameInput"  id="nameInput">
    <input type="submit" value="submit">
</form>
</body>
</html>