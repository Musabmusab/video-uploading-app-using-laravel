<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      background-color: #1b1b1b;
      color: #ffffff;
    }
    .header, .footer {
      background-color: #1b1b1b;
      color: #ffffff;
    }
    .video-title {
      color: #ff3b3b;
    }
    .video-card {
      background-color: #2a2a2a;
      border: none;
      border-radius: 8px;
    }
    .video-description {
      font-size: 0.9rem;
      color: #cccccc;
    }
    .ss{
        margin-left: 2px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <a class="btn btn-info m-3" href="{{url('/uploadpage')}}">Upload video</a>
  <header class="header py-3 text-center">
    <h1>Video Gallery</h1>
  </header>

  <!-- Video Gallery Container -->
  <div class="container my-5">
    <div class="row g-4">
      <!-- Video Item  -->

  @foreach ( $data as $data)


      <div class="col-lg-4 col-md-6">
        <div class="card video-card">
          <video controls class="card-img-top" style="border-radius: 8px;">
            <source src="/assets/{{$data->file}}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="card-body">
           <h5 class="video-title">Title: {{$data->name}}</h5>
            <p class="video-description">Description: {!!Str::limit($data->dec,20)!!}</p>
            <a  class="btn btn-info" href="{{url('detail',$data->id)}}">Detail</a>
            <a  class="btn btn-danger" href="{{url('delete',$data->id)}}">Delete</a>
          </div>

        </div>
      </div>
      @endforeach

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

