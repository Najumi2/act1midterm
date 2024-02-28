<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; 
            color: #000000; 
        }
        
        .container {
            max-width: 600px;
            margin: auto; 
            padding: 20px;
            background-color: #f8f9fa; 
            border-radius: 10px;
            margin-top: 20px; 
        }

        h1, h2, h3, h4, h5, h6 {
            color: #d9534f; 
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-4">New Contact Form Submission</h1>
            </div>
        </div>
        <hr style="background-color: #d9534f;"> 
        <div class="row">
            <div class="col">
                <p class="lead">You have a message:</p>
                <ul>
                    <li><strong>Name:</strong> {{ $name }}</li>
                    <li><strong>Email:</strong> {{ $email }}</li>
                </ul>
            </div>
        </div>
        <hr style="background-color: #d9534f;">
        <div class="row">
            <div class="col">
                <p class="lead">Message:</p>
                <p>{{ $text }}</p>
                @if($attachment)
                <p class="lead">Attachment:</p>
                <p>{{ $attachment->getClientOriginalName() }}</p>
                @endif
                Thanks,
                <p>by {{ $name }}</p>
            </div>
        </div>
    </div>
</body>
</html>
