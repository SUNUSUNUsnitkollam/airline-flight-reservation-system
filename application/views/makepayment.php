<!DOCTYPE html>
<html>
    <head>
        <title>Administrator</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    </head>
    <style>

        .padding{
            padding:5rem !important;
        }
        .form-control:focus{
            box-shadow:10px 0px 0px 0px #fff !important;
            border-color:#4ca746;
        }
    </style>
    <body>
      <div class="padding">
        <div class="row">
            <div class="container d-flex justify-content-center">
                <div class="col-md-6 col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                      <form  class="form-group" action="<?php echo base_url()?>main/new"
                                        method="post">
                                    <span>CREDIT/DEBIT CARD PAYMENT</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <img src="https://img.icons8.com/color/36/000000/visa.png">
                                    <img src="https://img.icons8.com/color/36/000000/mastercard.png">
                                    <img src="https://img.icons8.com/color/36/000000/amex.png">
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="height:350px;">
                                 

                            <div class="form-group">
                                <label for="cc-number" class="control-label">CARD NUMBER</label>
                                <input type="tel" id="cc-number" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder=".... .... .... ...."required minlength="16"maxlength="16">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                <label for="cc-exp" class="control-label">CARD EXPIRY</label>
                                <input type="tel" id="cc-exp" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="../.."required minlength="5"maxlength="5">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="numeric" class="control-label">CARD HOLDER NAME</label>
                                <input type="text" class="input-lg form-control" pattern=".{3,}" required title="1 characters minimum" maxlength="15">
                            </div>
                            <div class="form-group">
                                <input type="button"  value="MAKE PAYMENT" class="btn btn-success btn-lg form-control">

                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>  
    </form>
</body>
</html>