<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UPLOAD MEME</h1>
    <form action="upload_process.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo" accept="image/*" required>
    <input type="submit" value="Upload">
    </form>
</body>
</html>