<?php
  header("Content-type: text/html; charset=utf-8");
  if ($_FILES["file"]["error"] > 0)
    {
    echo "上传失败<br />";
    echo "<br />";
    echo "问题代码: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      $name = iconv('utf-8','gb2312',"upload/".$file["name"]);
      echo "上传成功！<br />";
      echo "<br />";
    echo "文件名: " . $_FILES["file"]["name"] . "<br />";
    echo "格式: " . $_FILES["file"]["type"] . "<br />";
    echo "大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "upload/" . $_FILES["file"]["name"]);
    echo "存入: " . "upload/" . $_FILES["file"]["name"];
      }
?>