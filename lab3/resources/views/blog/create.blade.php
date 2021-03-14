<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style></style>
</head>
<body>
    <form method="POST"action="{{ route('add-form') }}">
    @csrf
    <input type="text" name="title" placeholder="Title" id="">
    <input type="text" name="body" id="" placeholder="Body"> 
    <button type="submit"> SUBMIT </button>
    </form>
</body>
</html>