<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <title><?php echo SITENAME; ?></title>
    <link rel="icon" href="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-us/production/en-us/static/favicon-0cf29ce019f7cd1e7b24f85ab6ff97da.ico">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg pt-3">
        <a class="navbar-brand" href="#">World of League</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item text-center">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index">Home</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index">Updates</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index">Manual</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index">Support</a>
                </li>
            </ul>

            <li class="dropdown">
                <a class="nav-link login" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                </a>
                <ul class="dropdown-menu login-form">
                    <li>
                        <form action="/examples/actions/confirmation.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <div class="clearfix">
                                    <label>Password</label>
                                    <a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
                                </div>

                                <input type="password" class="form-control" required="required">
                            </div>
                            <input type="submit" class="btn btn-primary btn-block" value="Login">
                        </form>
                    </li>
                </ul>
            </li>


            <li class="text-center">
                <a class="nav-link register" href="<?php echo URLROOT; ?>/pages/index">REGISTER</a>
            </li>
            </ul>
            <!-- 
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <div id='main'>