<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - URL Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">URL Shortener</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Features</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Shorten URLs</a></li>
                            <li><a class="dropdown-item" href="#">Manage Links</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pricing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Free</a></li>
                            <li><a class="dropdown-item" href="#">Pro</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron 1 -->
    <div class="jumbotron text-center bg-primary text-white py-5">
        <h1 class="display-4">Welcome to the Ultimate URL Shortener!</h1>
        <p class="lead">Create short and beautiful links for free.</p>
        <a class="btn btn-light btn-lg" href="#inputSection" role="button">Get Started</a>
    </div>

    <!-- Scroll Down Jumbotron -->
    <div class="jumbotron text-center py-5" style="background-color: #f8f9fa;">
        <h1 class="display-5">Scroll Down and Start Creating</h1>
    </div>

    <!-- Large Input Bar -->
 <!-- Large Input Bar -->
<div class="container text-center my-5" id="inputSection">
    <form action="/shorten-url" method="POST">
        @csrf <!-- Include CSRF token -->
        <input type="text" name="long_url" class="form-control form-control-lg mb-3" placeholder="http:// Make me short" required />
        <button type="submit" class="btn btn-primary btn-lg">Shorten URL</button>
    </form>
</div>


    <!-- Cards Section -->
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fast</h5>
                        <p class="card-text">Create short links instantly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Secure</h5>
                        <p class="card-text">Your links are safe and encrypted.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manageable</h5>
                        <p class="card-text">Track and manage all your links.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container text-center my-5">
        <h2 class="mb-4">What Our Users Say</h2>
        <div class="row">
            <div class="col-md-3">
                <blockquote class="blockquote">
                    <p>"Absolutely love this tool!"</p>
                    <footer class="blockquote-footer">Jane Doe</footer>
                </blockquote>
            </div>
            <div class="col-md-3">
                <blockquote class="blockquote">
                    <p>"Super fast and reliable."</p>
                    <footer class="blockquote-footer">John Smith</footer>
                </blockquote>
            </div>
            <div class="col-md-3">
                <blockquote class="blockquote">
                    <p>"Highly recommend to everyone!"</p>
                    <footer class="blockquote-footer">Alice Lee</footer>
                </blockquote>
            </div>
            <div class="col-md-3">
                <blockquote class="blockquote">
                    <p>"Best URL shortener out there."</p>
                    <footer class="blockquote-footer">Chris Martin</footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 URL Shortener. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
