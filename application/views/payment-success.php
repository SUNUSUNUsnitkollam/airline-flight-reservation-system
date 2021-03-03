<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Payment done</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>


        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="thanks-containt">

                    <h1 class="text-center email-icon"><i class="fa fa-check" aria-hidden="true"></i></h1>

                    <h1>Hello, <?php echo $this->session->userdata('username'); ?></h1>
                    <p>Payment successfully done, your transaction id is <?php
                        if (isset($txnid)) {
                            echo $txnid;
                        }
                        ?></p>


                    <h2>Having problems or questions?</h2>
                    <p>If you donâ€™t know how to proceed please donâ€™t hesitate to  <a href="<?php echo base_url() ?>contact-us">contact our support team</a></p>


                    <p class="text-center" style="margin-top: 25px;">
                        <a style="border: 1px solid #fff;padding: 5px; text-decoration: none;"class="btn my-btn" href="<?php echo base_url(); ?>ln" role="button">Begin Lesson</a>
                    </p>
                    <div class="clearfix"></div>
                </div>

                <div class="social-container">
                  

                    <ul class="share-social text-center">
                        <li>
                            <a href=""><i id="social-fb" class="fa fa-facebook fa-2x social"></i></a>
                        </li>
                        <li><a href=""><i id="social-tw" class="fa fa-twitter fa-2x social"></i></a></li>
                        <li><a href=""><i id="social-gp" class="fa fa-google fa-2x social"></i></a></li>
                        <li><a href="<?php echo base_url(); ?>contact-us"><i id="social-gp" class="fa fa-envelope fa-2x social"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
