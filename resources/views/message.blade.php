<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Bogdan Muravyov</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/home" class="nav-link active" aria-current="page">Home</a></li>
        </ul>
    </header>
</div>
<div class="container">
    <h1>Enter your massage!</h1><br>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/message/store">
        @csrf
        <input type="email" name="email" id="email" placeholder="Enter your E-mail" class="form-control"><br>
        <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Enter your message" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
    <br>
    <h1>All messages</h1>
    @foreach($messages as $message)
        <div class="alert  alert-info">
            <p>{{ $message->created_at }}</p>
            <h3>{{ $message->email }}</h3>
            <h5>{{ $message->name }}</h5>
            <p>{{ $message->message }}</p>
        </div>
    @endforeach
</div>
</body>
</html>
