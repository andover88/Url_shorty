<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortened URL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        .url-link {
            font-size: 1.25rem;
            color: #007bff;
            text-decoration: none;
        }
        .url-link:hover {
            text-decoration: underline;
        }
        .btn-custom {
            margin-top: 20px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Shortened URL</h1>
        <a class="url-link" href="{{ $shortUrl }}" target="_blank">{{ $shortUrl }}</a>
        <br><br>
        <!-- Update the link to go back to the landing page -->
        <a class="btn btn-primary btn-custom" href="{{ url('/') }}">Shorten Another URL</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
