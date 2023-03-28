<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/resources/css/app.css">
</head>
<body>
    <div class="d-flex flex-row flex-wrap gap-4 align-items-center justify-content-center p-5 bg-dark">
        @foreach($cards as $card)
            <div class="cardcont w-25 d-flex align-items-center justify-content-center flex-column ">
                <img src="{{ $card["thumb"] }}" alt="">
                <p class="fs-6 text-white">{{ $card["title"] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>