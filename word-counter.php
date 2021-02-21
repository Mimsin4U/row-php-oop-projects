<?php

require_once './vendor/autoload.php';

use App\classes\WordCounter;

$result = [
  'word' => '',
  'charecter' => ''
];
// $test='';
if (isset($_POST['btn'])) {
  $wordCounter = new WordCounter();
  $result = $wordCounter->getWordCharecter();
}

?>

<?php include './includes/my-header.php'?>
  <section class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-3">
          <div class="card">
            <div class="card-header">
              <h1 style="text-align: center">Word & Charecter Counter</h1>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label">Enter String</label>
                  <div class="col-md-9">
                    <input type="text" name="given_string" class="form-control">
                  </div>
                </div>
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label">Result</label>
                  <div class="col-md-9">
                    <textarea rows="6" class="form-control"><?php echo $result['word'] . "\n" . $result['charecter']; ?></textarea>
                  </div>
                </div>
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label"></label>
                  <div class="col-md-9">
                    <input class="btn btn-success" type="submit" name="btn" class="form-control" value="Get Result">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include './includes/my-footer.php'?>