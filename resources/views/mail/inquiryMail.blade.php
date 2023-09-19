<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Property Inquiry</title>
</head>
<body>
    @auth
    <p class="text-[18px]">Email Address: {{$senderMail}}</p>
    <p class="text-[18px]">{{$body}}</p>
    @else

    @endauth
</body>
</html>