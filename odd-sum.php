<?php

require_once './vendor/autoload.php';

use App\classes\OddSum;

$data = [
  'leftSide' => '',
  'sum' => ''
];

if (isset($_POST['btn'])) {
  $oddSum = new OddSum();
  $data    = $oddSum->getOddSum();
}

?>

<?php include './includes/my-header.php'?>
  <section class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-3">
          <div class="card">
            <div class="card-header">
              <h1 style="text-align: center">Sum of Odd numbers</h1>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label">First Number:</label>
                  <div class="col-md-9">
                    <input type="number" name="first_number" class="form-control">
                  </div>
                </div>
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label">Second Number:</label>
                  <div class="col-md-9">
                    <input type="number" name="second_number" class="form-control">
                  </div>
                </div>
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label">Your Result is:</label>
                  <div class="col-md-9">
                    <textarea class="form-control" rows="5"><?php echo $data['leftSide'] . $data['sum']; ?></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <label for="" class="col-md-3 col-from-label"></label>
                  <div class="col-md-9">
                    <input class="btn btn-warning" type="submit" name="btn" class="form-control" value="Get Sum of Odds">
                  </div>
                </div>
              </form>
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