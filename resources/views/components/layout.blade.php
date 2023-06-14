<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>{{$pageTitle ?? 'MDM Todo'}}</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="siderbar">
        <img src="/assets/images/logo2.png" alt="">
    </div>
    <div class="content">
        <nav>
            <x-button href="{{$link ?? '/#' }}">
                {{$nameBtn ?? null}}
            </x-button>
        </nav>
        <main>
            {{$slot}}
        </main>
    </div>
</div>
</body>
</html>
