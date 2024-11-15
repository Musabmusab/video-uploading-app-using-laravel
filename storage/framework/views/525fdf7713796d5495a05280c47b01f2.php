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
  <a class="btn btn-info m-3" href="<?php echo e(url('show')); ?>">Back</a>
  <header class="header py-3 text-center">
    <h1>Video Gallery</h1>
  </header>

<!-- Video Detail Section -->
<div class="container mt-5">
    <div class="row">
        <!-- Video Player -->
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <video controls class="card-img-top" style="border-radius: 8px;">
                    <source src="/assets/<?php echo e($data->file); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                <div class="card-body">
                    <h2 class="video-title">Video Title : <?php echo e($data->name); ?></h2>
                    
                </div>
            </div>
        </div>

        <!-- Sidebar Section -->
        <div class="col-lg-4 col-md-12">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h1><i>Discription</i> </h1> <?php echo e($data->dec); ?>

                </div>
            </div>
        </div>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php /**PATH D:\laravel 11 project\video uploading app\routing and controller\resources\views/detail.blade.php ENDPATH**/ ?>