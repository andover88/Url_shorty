<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorten URL</title>
</head>
<body>
    <h1>Shorten Your URL</h1>
    <form action="{{ route('shorten.url') }}" method="POST">
        @csrf
        <input type="url" name="long_url" placeholder="Enter a long URL" required>
        <button type="submit">Make Me Short</button>
    </form>

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
</body>
</html>
