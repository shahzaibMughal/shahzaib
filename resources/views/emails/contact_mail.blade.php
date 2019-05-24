<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Received</title>
    <style>

        .container {
            background: #0a192f;
            color: #e6f1ff;
            text-align: center;
            padding: 40px;
        }
        p{
            color: #e6f1ff;
            font-size: 1.5em;
            text-align: left;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>New Contact Message Received</h1>
{{--        {{$complete_string}}--}}
        <p>Contactor Name:  <strong>{{$data['name']}}</strong> </p>
        <p>Contactor Email: <strong>{{$data['email']}}</strong> </p>
        <p>Message:  {{$data['msg']}}</p>
    </div>
</body>
</html>