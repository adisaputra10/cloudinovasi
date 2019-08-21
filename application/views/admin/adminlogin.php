<!DOCTYPE html>
<html>
    <head>
    <title><?php echo $title_bar ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url() ?>assets/css/landingstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" type="text/css">
    </head>
    <body>
      <div class="section_one">
        <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="card">
                  <article class="card-body setpad">
                    <p class="lead"><? ?></p>
                        <div class="form-group">
                          <label>Your email</label>
                            <input name="" class="form-control" placeholder="Email" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                          <label>Your password</label>
                            <input class="form-control" placeholder="******" type="password">
                        </div> <!-- form-group// --> 
                        <div class="form-group"> 
                        </div> <!-- form-group// -->  
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                              <form method="GET" action="<?php echo base_url() ?>adminpage">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block btn-dark"> Sign In</button>
                                </div> <!-- form-group// -->                                                         
                              </form>
                            </div>
                        </div>
                  </article>
                </div> <!-- card.// -->
            </div>
        </div>
        </div>
      </div>

    </body>
</html>