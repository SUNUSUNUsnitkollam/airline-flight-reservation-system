<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php if (isset($description)): ?><?php echo $description; ?><?php endif; ?>">
        <meta name="keywords" content="<?php if (isset($keywords)): ?><?php echo $keywords; ?><?php endif; ?>">

        <link rel="shortcut icon" type="image/ico" href="<?php echo base_url() ?>vendor/tr/logos/favicon.ico"/>


        <link rel='canonical' href="<?php echo base_url(uri_string()); ?>"/>
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css?ver=0.23">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=0.23">

        <title> <?php if (isset($title)): ?><?php echo $title; ?><?php else: ?>Signin<?php endif; ?></title>
        <script>var base_url = "<?php echo base_url(); ?>";</script>
        <style>
            body{
                background: #eacece;
            }

            .myform-container{
                background: #fff;
                padding: 30px;
                margin: 20px 0;
            }

            .myform-container .error{
                border: 1px solid red;
            }

            .myform-container h1{
                font-size: 1.5em;
            }

            .myform-container h3{
                font-size: 1.5em;
            }

            .myform-container ul li{
                margin: 15px 0;
            }

            .get-start:hover{
                color: #eacece;
            }

            .get-start{
                background: #253c50;
                border: none;
                color: #fff;
                border-radius: 0;
                padding: 10px 20px;
            }

            .contact-info{
                margin: 15% 0;
            }

            .mycontactuspage{
                margin: 30px 0;
            }

            .form-errors{
                color: red;
            }

            label {
                font-weight: 400;
            }

            footer{
                text-align: center;
                padding: 30px;
            }

        </style>
    </head>
    <body>
