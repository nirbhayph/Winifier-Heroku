<?php include "../api_endpoint/api.php"; ?>
<?php
if isset($_GET['project_name']){
  $project_name = $_GET['project_name'];
  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Data | Upload</title>
        <?php
        include "../header/header.php";
        ?>
    </head>

    <body>
        <?php
        include "../header/navigation.php";
        ?>
        <div class="wrapper">
            <div class="container-fluid">
              <br/><br/>
              <div class="row">
              <div class="col-md-12">
                  <div class="card-box">
                      <h4 class="m-t-0 m-b-30 header-title">Upload Data</h4>

                      <form role="form" action="<?php echo $api_base_url."server/upload_data.php"; ?>" method="POST">
                          <div class="form-group">
                              <input type="hidden" name="project_name" value="<?php echo $project_name; ?>">
                              <label for="dataInputText">Data URL</label>
                              <input type="text" class="form-control" name="data_upload_url" id="dataInputText" aria-describedby="textHelp" placeholder="Enter URL" autocomplete="off">
                              <small id="textHelp" class="form-text text-muted">Enter a ~ delimited .txt file URL</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Start Data Upload</button>
                      </form>
                  </div>
              </div>
              <!-- end col -->
              </div>
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
       <?php
       include "../footer/footer.php";
       ?>
    </body>

</html>
<?php } else {
  header('Location: https://winifier.herokuapp.com/home/error?error_message=Access%20Forbidden');
}?>