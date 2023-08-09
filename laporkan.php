<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>

    <?php include "navbar.php"?>

    <br>

<div class="container">

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">isi pengaduan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
    

      <div class="mb-3">
        <label for="formFile" class="form-label">masukan foto</label>
           <input class="form-control" type="file" id="formFile">
          </div>

        <button class="btn btn-primary" type="submit">Button</button>

    </div>
</body>
</html>