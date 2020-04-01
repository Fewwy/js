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
      <div align="center">
        <p align="center">  Skore Upload</p>
        <form>
        <input type="file" id="myFile" name="SkoreUpload" onclick="saveTxt()">
        <input type="submit" value="Upload">
        </form>
      </div>
        <div align="center">
          <p align="center">  Upload Monster Pictures</p>
        <form>
            <label for="upload">File:</label>
            <input type="file" id="files" name="files[]" value="Upload Monsters" onchange="readURL(this)" multiple >
        </form> 
        </div>
        <div id="startbutton"> 
         <p align="center">Start the Game</p>
         <form align="center">
         <input type="button" id="btnStart" onclick="newGame()" value="New game" />
         <input type="button" id="btnPause" onclick="pauseResumeGame()" value="||" />
         </form>
        </div>
        <div id=pointstable align="center">
          <output id="currentScore"> </output>
</div>
</div>
<!-- MONSTERS -->


<div class="box" id="monstr1" onclick="killFunction(this, 'none')">
  <img src="" id="monstrimage">
</div>
<div class="box" id="monstr2" onclick="killFunction(this, 'none')">
<img src="" id="monstrimage">
</div>
<div class="box" id="monstr3" onclick="killFunction(this, 'none')">
<img src="" id="monstrimage">
</div>
<div class="box" id="monstr4" onclick="killFunction(this, 'none')">
<img src="" id="monstrimage">
</div>
<div class="box" id="monstr5" onclick="killFunction(this, 'none')">
<img src="" id="monstrimage">
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



</body>
</html>
