<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
</head>
<body>
    <div class="container mt-5">
        <h1>Starting PHP</h1>

        <form action="print.php" method="GET">
            <div class="mb-3">
              <label for="paragraph" class="form-label">Paragraph</label>
              <input type="text" name="paragraph" id="paragraph" class="form-control" placeholder="type your paragraph here">
            </div>

            <div class="mb-3">
              <label for="badword" class="form-label">Badword</label>
              <input type="text" name="badword" id="badword" class="form-control" placeholder="type your badword here">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>
</html>