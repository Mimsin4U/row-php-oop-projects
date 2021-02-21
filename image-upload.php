<?php

require_once './vendor/autoload.php';

use App\classes\ImageUpload;

$data = [
  'name'            => null,
  'massage'         => null,
  'storageLocation' => null
];

if (isset($_POST['btn'])) {
  $imageUpload = new ImageUpload();
  $data = $imageUpload->uploadImg();
}

?>

<?php include './includes/my-header.php'?>
  <section class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-3">
          <div class="card">
            <div class="card-header">
              <h1 style="text-align: center">Image Upload</h1>
            </div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label">Image Name:</label>
                  <div class="col-md-9">
                    <input type="text" name="_name" class="form-control">
                  </div>
                </div>
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label"></label>
                  <div class="col-md-9">
                    <input type="file" name="img">
                  </div>
                </div>
                <div class="row form-group">
                  <label for="" class="col-md-3 col-from-label"></label>
                  <div class="col-md-9">
                    <input class="btn btn-primary" type="submit" name="btn" class="form-control" value="Upload">
                  </div>
                </div>
              </form>
              <div class="<?php echo ($data['massage'] === 'Uploaded Successfully!') ? "text-success" : "text-danger"; ?>">
                <?php echo $data['massage']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row py-5">
        <div class="col-md-6 offset-3">
          <div class="card">
            <div class="card-header">
              <h1 style="text-align: center">Uploaded Data:</h1>
            </div>
            <div class="card-body">
              <table class="table table-dark" border="2px">
                <tr>
                  <th>Given Name:</th>
                  <th>Given Image:</th>
                </tr>
                <tr>
                  <td><?php echo $data['name']; ?></td>
                  <td><img src="<?php echo $data['storageLocation']; ?>" alt="<?php echo $data['name']; ?>" height="200" /></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="./assets/js/jquery-1.12.4.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>