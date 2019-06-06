<!DOCTYPE html>
<html>
<head>
    <title>JobLister</title>
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="header clearfix">
            <nav>
            <ul class="nav nav-pills float-right">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="create.php">Create Listing</a>
                </li>

            </ul>
            </nav>
            <a href="index.php"><h3 class="text-muted"><?php echo SITE_TITLE; ?></h3></a>
        </div>
        <?php displayMessage(); ?>
