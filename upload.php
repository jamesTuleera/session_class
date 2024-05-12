<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 tutorial</title>

    <link rel="stylesheet" href="bootstrrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrrap/css/bootstrap.min.css">

</head>

<body>
    <h1 class=" text-center mt-5 mb-5">Image upload</h1>



    



<div class="container ">

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3>Upload Image</h3>

            </div>
            <div class="card-body p-4">
                <form method="POST" action="php/image_upload.php" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="">Browse file</label>
                        <input type="file" name="image" accept="image/png, image/gif, image/jpeg" id="" class="form-control ">
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

<div class="container-fluid p-5 mt-5 bg-dark" style="position: fixed; z-index: 99; bottom: 0; ">




    <div class="container">
        <a href="index.html" class="btn btn-lg btn-warning">charset</a>
        <a href="upload.php" class="btn btn-lg btn-success">Click here</a>
        <button class="btn btn-lg btn-secondary">Click here</button>
        <button class="btn btn-lg btn-danger">Click here</button>
        <button class="btn btn-lg btn-muted">Click here</button>
        <button class="btn btn-lg btn-white">Click here</button>
        <button class="btn btn-lg btn-dark">Click here</button>
        <button class="btn btn-lg btn-primary">Click here</button>
        <button class="btn btn-lg btn-primary">Click here</button>
    </div>
    

</div>



<script>
    
</script>

</body>
</html>