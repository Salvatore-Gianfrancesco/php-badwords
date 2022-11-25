<?php

$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

// echo $paragraph;
// echo '<br>';

$new_paragraph = str_replace($badword, '***', $paragraph);
// echo $new_paragraph;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badword</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
</head>

<body>
    <div class="container mt-5">
        <h3>Original paragraph</h3>
        <p><?php echo $paragraph; ?></p>
        <div class="mb-4">Lunghezza: <?php echo strlen($paragraph); ?> caratteri.</div>

        <h3>Censored paragraph</h3>
        <p><?php echo $new_paragraph; ?></p>
        <div class="mb-4">Lunghezza: <?php echo strlen($new_paragraph); ?> caratteri.</div>
    </div>

    <!-- Bootstrap JS -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>