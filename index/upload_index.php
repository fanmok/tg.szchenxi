<?php
  header("Content-type: text/html; charset=utf-8");
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error<br />";
    echo "<br /";
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      $name = iconv('utf-8','gb2312',"../".$file["name"]);
      echo "Success!<br />";
      echo "<br />";
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "../" . $_FILES["file"]["name"]);
    echo "Stored in: " . "../" . $_FILES["file"]["name"];
    }
?>