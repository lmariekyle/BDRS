<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Property Inquiry</title>
</head>
<body>
    <h3 class="font-playfair">Property Inquiry</h1>
    @auth
    <p class="text-[18px]">Client Email Address: {{$senderMail}}</p>
    <h2 class="">INQUIRY MESSAGE</h2>
    <p class="text-[18px]">{{$body}}</p>
    @else

    @endauth
</body>
</html>