<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Upload Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      background-color: #1b1b1b;
      color: #ffffff;
    }
    .form-container {
      max-width: 600px;
      padding: 2rem;
      background-color: #2a2a2a;
      border-radius: 10px;
    }
    .form-label {
      color: #ff3b3b;
    }
    .btn-custom {
      background-color: #ff3b3b;
      color: #ffffff;
      border: none;
    }
    .btn-custom:hover {
      background-color: #e63a3a;
    }
    .footer {
      color: #ffffff;
      background-color: #1b1b1b;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="py-3 bg-dark">
   <a class="m-3 btn btn-success" href="{{url('/show')}}">Back</a>
    <div class="text-white ">
    <h1 class="text-center">Upload Your Video</h1></div>
  </header>

  <!-- Form Container -->
  <div class="container d-flex align-items-center justify-content-center" style="height: calc(100vh - 160px);">
    <div class="form-container w-100 ">




      <form method="post" action="{{url('/uploadproduct')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="text-white form-label">Video Title</label>
          <input type="text" name="name" class="form-control" id="title" placeholder="Enter video title">
        </div>
        <div class="mb-3">
          <label for="description" class="text-white form-label">Video Description</label>
          <textarea class="form-control" name="dec" id="description" rows="3" placeholder="Enter video description"></textarea>
        </div>
        <div class="mb-3">
          <label for="video" class="text-white form-label">Select Video</label>
          <input type="file" name="file" accept="video/*" class="form-control" id="video" accept="video/*">
        </div>
        <button type="submit" class="btn btn-custom w-100">Upload Video</button>
      </form>


    </div>
  </div>

  <!-- Footer -->
  <footer class="py-3 text-center footer bg-info">
    <p>&copy; 2024 Your Company. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

