<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="DnD Adventures">
  <meta name="author" content="Aleksandr Voznesenskii">
  <meta http-equiv="cache-control" content="no-cache">
  <meta name="robots" content="noindex,follow">
  <meta name="googlebot" content="nosnippet,noarchive">
  <link rel="stylesheet" type="text/css" href="../hra.css">
  
  <script src="jquery.min.js"></script>
  <title>Hra</title>

</head>



<body>
  <script src="move.js"></script>
<!-- menu for the upload skore, images and game start -->
<div id="menu"> 
      <div>
        <p align="center">  Skore Upload</p>
        <form action="/action_page.php">
        <input type="file" id="myFile" name="SkoreUpload">
        <input type="submit" value="Upload">
        </form>
      </div>
        <div>
          <p align="center">  Upload Monster Pictures</p>
         <?php
    if (isset($_FILES['upload'])) {
        //todo: handle the uploaded file
        echo "Your file was uploaded successfully";
    } else {
    ?>
        <form action="fileupload.php" method="post" enctype="multipart/form-data">
            <label for="upload">File:</label>
            <input type="file" name="upload" id="upload">
            <input type="submit" name="submit" value="Upload">
        </form>
    <?php
    }
?>
        </div>

        <div onclick="generateRandomLocation(this)"> 
         <p align="center">Start the Game</p>
         <form align="center">
         <input type="button" value="OK"  >
         </form>
        </div>
</div>

<!-- MONSTERS -->


<div id="box" onclick="killFunction(this)">  
</div>


<!-- Entrances starting points -->  
<div align="center" id="obdelnik">
<div id="entrance"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
<div id="entrance"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
<div id="entrance"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
<div id="entrance"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
<div id="entrance"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
</div>
<!-- SCRIPT FOR GENERATING STARTING LOCATION OF MONSTER -->
<script>function generateRandomLocation(){
  var entranceadress = [140,250,360,465,575];
  var Y = 0;
  var X = 5;
  Y = entranceadress[Math.floor(Math.random() * entranceadress.length)];
  var movemonstr = document.getElementById("box");
  movemonstr.style.position = "absolute"; 
  movemonstr.style.top = Y + 'px';
  movemonstr.style.left = X + 'px';
}

</script>
<script>
  function killFunction(){
  var monstr = document.getElementById("box");
  monstr.addEventListener("click", killmonstr);
  function killmonstr() {
  document.getElementById("box").display: none;}

</script>
<!--  script for warning of the images upload NOT READY YET-->
<script>
function monsterupload() {
  alert("You need to upload images of monsters");
}
</script>



</body>
</html>