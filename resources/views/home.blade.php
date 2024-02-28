<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Jade C. Estremera</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4" style="color: white; background-color: red;">LEAVE US A MESSAGE</h2>
                    @if(session('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ session('success') }}
                    </div>
                    @endif
                    
                    <form action="/send-email" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Your name (optional):</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="Anonymous">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email address:*</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="text" class="form-label">How can we help you?</label>
                            <textarea class="form-control" id="text" name="text" required style="resize: vertical;"></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="attach" class="form-label">Attachments:</label>
                            <input type="file" class="form-control" id="attach" name="attach">
                        </div>
                        <div class="text-end"> 
                            <button type="submit" class="btn btn-danger">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


