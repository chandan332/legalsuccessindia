<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Legal Success India</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/png" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/scss/app.scss', 'resources/ts/app.ts'])
    @livewireStyles
</head>

<body>
    <div class="container overflow-hidden">
        {{ $slot }}
    </div>
    @livewireScripts
</body>

</html>
