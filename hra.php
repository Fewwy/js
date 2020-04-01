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
<script>if (window.File && window.FileReader && window.FileList && window.Blob) {
  alert(„FILE API je podporován.“);
} else {
  alert(„FILE API není v tomto prohlížeči plně podporován.“);
}</script>

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

        <div id="startbutton"> 
         <p align="center">Start the Game</p>
         <form align="center">
         <input type="button" id="btnStart" onclick=newGame() value="New game" />
         <input type="button" id="btnPause" onclick="pauseResumeGame()" value="||" />
         </form>
        </div>
        <div id=pointstable align="center">
          <output id="currentScore"> </output>
        </div>
</div>

<!-- MONSTERS -->


<div class="box" id="monstr1" onclick="killFunction(this, 'none')">
</div>
<div class="box" id="monstr2" onclick="killFunction(this, 'none')">
</div>
<div class="box" id="monstr3" onclick="killFunction(this, 'none')">
</div>
<div class="box" id="monstr4" onclick="killFunction(this, 'none')">
</div>
<div class="box" id="monstr5" onclick="killFunction(this, 'none')">
</div>
<!-- Entrances starting points -->  
<div align="center" id="obdelnik">
<div id="entrance1"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
<div id="entrance2"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
<div id="entrance3"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
<div id="entrance4"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
<div id="entrance5"> 
<img src="http://210169.czweb.org/img/entrance.jpg" id="pictureentrance" width="45" height="50" align="left">
</div>
</div>
<!-- SCRIPT FOR GENERATING STARTING LOCATION OF MONSTER -->




<!-- 

<script>
  document.getElementById("startbutton").addEventListener("click", function generateRandomLocation(){
  var entranceadress = [140,250,360,465,575];
  var Y = 0;
  var X = 5;
  Y = entranceadress[Math.floor(Math.random() * entranceadress.length)];
  var movemonstr = document.getElementsByClassName('box');
  movemonstr.style.top = Y + 'px';
  movemonstr.style.left = X + 'px';
});
</script>

<script>
function monsterupload() {
  alert("You need to upload images of monsters");
}
</script>
 -->


</body>
</html>
