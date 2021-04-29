<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style4.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="header">
        <img src="https://sun9-6.userapi.com/impg/8nWK7a__y3swGK8g_A3lcv5nBl6ufqd8UbACAg/wOa6U5uXwi4.jpg?size=500x500&quality=96&proxy=1&sign=df4b1b74bfabda32265c5f0f1aa4c03d&type=album" alt=""
        class = "icon" onclick="window.location='{{ url('/')}}'">
        <li class="home">
            <ul onclick="window.location='{{ url('/')}}'"> HOME </ul>
            <ul onclick="window.location='{{ url('about')}}'">ABOUT ME</ul>
            <ul onclick="window.location='{{ url('contact')}}'">CONTACT</ul>
        </li>
    </div>
    <div class="reg">
    <div class="index3">
        <p>Your name and surname:</p>
        <input type="text" name="" id="name">
        <p>Your e-mail</p>
        <input type="text" name="" id="name">
        <p>Your photo:</p>
        <input type="text" name="" id="name">
        <p>Your message:</p>
        <input type="text" name="" class="message"><br>
        <button align="center" onclick="send()">Send</button>
        <p id="success">Your message was sended succesfully!</p>
    </div>
</div>
</body>
<script type="text/javascript" src="js.js"></script>
</html>