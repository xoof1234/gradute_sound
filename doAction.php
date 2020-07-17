<?php

# 檢查檔案是否上傳成功
if ($_FILES['myFile']['error'] === UPLOAD_ERR_OK){
  echo '檔案名稱: ' . $_FILES['myFile']['name'] . '<br/>';
  echo '檔案類型: ' . $_FILES['myFile']['type'] . '<br/>';
  echo '檔案大小: ' . ($_FILES['myFile']['size'] / 1024) . ' KB<br/>';
  echo '暫存名稱: ' . $_FILES['myFile']['tmp_name'] . '<br/>';

  # 檢查檔案是否已經存在
  if (file_exists('D:/code/gradute/gradute_sound/upload/' . $_FILES['myFile']['name'])){
    echo '檔案已存在。<br/>';
  } else {
    $file = $_FILES['myFile']['tmp_name'];
    $dest = 'D:/code/gradute/gradute_sound/upload/' . $_FILES['myFile']['name'];

    # 將檔案移至指定位置
    move_uploaded_file($file, $dest);
  }
} else {
  echo '錯誤代碼：' . $_FILES['myFile']['error'] . '<br/>';
}
if (!file_exists('D:/code/gradute/gradute_sound/upload/' ))
        mkdir('D:/code/gradute/gradute_sound/upload/' , 0777, true);  // 建立目錄
?>