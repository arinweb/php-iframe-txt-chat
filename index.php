<?php
$fileName = "chat.txt";
if ($_POST) {
  if (!file_exists($fileName)) {
    touch($fileName);
  }
  $deger = "\n".$_POST['yazi'];
  $ac = @fopen($fileName, "a");
  fwrite($ac, $deger);
  fclose($ac);
  header("Refresh:0");
}

?>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <form action="" method="post">
    <input type="text" name="yazi" />
    <button>Gönder</button>
  </form>

  <div id="icerik">
    <iframe src="<?= $fileName; ?>" width="500px" height="500px"></iframe>
  </div>

  <style>
    * {
      margin: 0px;
      padding: 0px;
      border: none;
      outline: none;
    }
    form {
      padding: 10px;
    }
    form input {
      width: 100%;
      border: 2px solid deepskyblue;
      font-size: 1rem;
      padding: 10px;
    }
    form button {
      padding: 10px;
      border-radius: 5px;
    }
    #icerik {
      background-color: deepskyblue;
      color: red;
      width: 100%;
      height: 300px;
    }
    iframe {
      width: 100%;
      height: 100%;
    }
  </style>

  <script language="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
