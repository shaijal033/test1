


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bst/css/bootstrap.min.css">
    
</head>
<body>
<div class="container">
        <div class="row">
            <form method="post" action="p2.php" enctype="multipart/form-data">
            <div class="col-4 offset-3 card ">
                <h3 class="text-center">Contact Form</h3>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="varchar" name="name"   class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="varchar" name="age"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="varchar" name="email"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="varchar" name="mobile" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Upload your Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <input type="submit" value="Enter" class="btn btn-primary">
            </div>
</form>
        </div>
    </div>
</body>
</html>


