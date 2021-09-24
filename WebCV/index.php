<!DOCTYPE html>
<html lang="en">

<head>
    <!--panggil database-->
    <?php 
    include("config.php");

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV FREDY</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index.js">
    <link rel="icon" type="image/png" href="logo/architect.svg">

</head>

<body>
    <!--bagian navbar-->
    <div class="bg-img" style="color:white; height: 500px; padding:10rem; text-align:center;">
        <h1>CV FERDY</h1>
        <p class="fs-5">CV FERDY adalah kontraktor Bangunan di Batam, kami melayani jasa renovasi rumah, interior,
            teralis, design
            rumah dan masih banyak lagi. Perusahaan ini sudah berdiri sejak 20 tahun yang lalu dan selama melakukan
            pekerjaan selalu dilakukan dengan orang profesional</p>

        <a href="https://wa.me/6289650097678">
            <button type="button" class="btn btn-primary">
                Hubungi Kami
            </button>
        </a>

       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="fs-5">CV FERDY adalah kontraktor Bangunan di Batam, kami melayani jasa renovasi rumah, interior,
            teralis, design
            rumah dan masih banyak lagi. Perusahaan ini sudah berdiri sejak 20 tahun yang lalu dan selama melakukan
            pekerjaan selalu dilakukan dengan orang profesional</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        
    </div>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        asdasdasdasdasdasd
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>