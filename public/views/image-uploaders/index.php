<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Uploader</title>
  <link rel="stylesheet" href="/image/public/css/image-uploader.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/image/public/js/file-upload.js"></script>
</head>
<body class="image-uploader">
  <div class="wrapper">
    <form action="/image/upload" method="post" enctype="multipart/form-data" class="image-form">
      <h2 class="title">Upload your image</h2>
      <p class="description">File should be Jpeg, Png,...</p>
      <div class="img-area" id="dropZone">
        <img src="/image/public/img/image.svg" class="img">
        <p class="img-description">Drag & Drop your image here</p>
      </div>
      <div class="or">
        Or
      </div>
      <div>
        <input type="file" name="uploadFile" id="uploadFile">
        <div id="btnInputFile" class="upload-button"><span>ファイルを選択する</span></div>
      </div>
    </form>
  </div>
</body>
</html>
