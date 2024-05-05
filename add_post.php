<?php require_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Lisa uus postitus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container mt-3">
        <h1>Lisa uus postitus</h1>
        <form action="add_post_handler.php" method="post" class="mt-3 text-white">
            <div class="mb-3">
                <label for="title" class="form-label">Pealkiri:</label>
                <input type="text" id="title" name="title" class="form-control bg-dark text-white" aria-describedby="titleHelp">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Tekst:</label>
                <textarea id="content" name="content" class="form-control bg-dark text-white" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autor:</label>
                <input type="text" id="author" name="author" class="form-control bg-dark text-white">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Pildi aadress:</label>
                <input type="text" id="image" name="image" class="form-control bg-dark text-white">
            </div>
            <div class="d-grid">
                <input type="submit" value="Lisa postitus" class="btn btn-primary">
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
