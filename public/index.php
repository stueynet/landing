<?php
require '../vendor/autoload.php';
$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();
$sitename = getenv('SITE_NAME');
$forsale = getenv('FOR_SALE');
$sale_url = getenv('SALE_URL');

$intro = $forsale ? 'for sale' : 'in the foundry';

$sitename = $sitename ? $sitename : 'example.com'

?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $sitename; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <style>
        .jumbotron{
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('https://placeimg.com/800/300/tech');
        }

        h1{
            background-color: rgba(255,255,255,0.7);
            padding: 40px 80px;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="jumbotron">
    <div class="container text-center">
        <h1><?php echo $sitename; ?></h1>
    </div>
</div>
<div class="container text-center">
    <h2>This domain is <?php echo $intro; ?></h2>
    <hr/>
    <?php if($forsale): ?>
        <p class="lead">Make an offer <a href="<?php echo $sale_url; ?>">here</a></p>
    <?php else :  ?>
        <p class="lead">Enquire about it <a href="mailto:&#119;&#104;&#111;&#105;&#115;&#64;&#115;&#116;&#117;&#101;&#121;&#110;&#101;&#116;&#46;&#99;&#111;&#109;">here</a></p>
    <?php endif; ?>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"><\/script>')</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>