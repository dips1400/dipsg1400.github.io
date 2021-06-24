<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Artist Create</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-g m-auto">
                <form method="POST" action="artistdisplay.php" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-center text-white">Insert Your Record</h1>
                    </div>
                    <div class="form-group">
                        <label for="pdescription">Painting Description</label>
                        <input type="text" class="form-control" name="pdescription">
                    </div><br>
                    <div class="form-group">
                        <label for="price">Painting Price</label>
                        <input type="text" class="form-control" name="price">
                    </div><br>
                    <div class="form-group">
                        <label for="price">Upload Images</label>
                        <input type="file" id="file" class="form-control" name="images">
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-outline-secondary">
                </div>
                </form>
                <br>
                <h5><a href="artistdisplay2.php"><input type="button" class="btn btn-primary" value="view user"></a></h5>
            </div>
        </div>
    </div>
    </body>
</html>
