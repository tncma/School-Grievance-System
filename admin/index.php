<!doctype HTML>
<html>
  <head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootswatch.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
  </head>
  <body>
    <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Admin Login</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="well">
              <form class="bs-example form-horizontal" action="admin-check.php" method="post">
                <fieldset>
                  <legend>Welcome</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">District</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="dis" id="inputEmail" placeholder="District">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Constituency</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="cons" id="inputEmail" placeholder="Constituency">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="pass" id="inputEmail" placeholder="Password">
                    </div>
                  </div><br>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
