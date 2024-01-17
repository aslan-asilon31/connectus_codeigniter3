<!-- application/views/template.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <h1><?php echo $header; ?></h1>
    </header>
    <div>
        <?php echo $content; ?>
    </div>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Company</p>
    </footer>
</body>
</html>
