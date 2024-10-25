<!-- resources/views/errors/404.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    @vite(['resources/scss/app.scss'])
</head>

<body>
    <div class="tw-flex tw-flex-col tw-gap-2 tw-justify-center tw-items-center tw-text-center" style="height: 100vh;">
        <h1 class="tw-text-4xl tw-font-bold">404</h1>
        <h2 class="tw-text-2xl">Page Not Found</h2>
        <p>Sorry, the page you are looking for does not exist.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Go to Home</a>
    </div>
</body>

</html>
