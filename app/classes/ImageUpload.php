<?php

namespace App\classes;

class ImageUpload
{
  public function uploadImg(){
    $data = [];
    $data['name'] = $_POST['_name'];
    if ($_FILES['img']['name']){
      $fileInfo = getimagesize($_FILES['img']['tmp_name']);

      if ($fileInfo){
        $fileType =  pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        if ($fileType == 'jpg' || $fileType == 'svg' || $fileType == 'jpeg') {
          $directory               = 'assets/img/';
          $imgName                 = $_FILES['img']['name'];
          $imgTmpName              = $_FILES['img']['tmp_name'];
          $storageLocation         = $directory . $imgName;
          $data['storageLocation'] = $storageLocation;

          move_uploaded_file($imgTmpName, $storageLocation);

          $data['massage'] = 'Uploaded Successfully!';
        } else {
          $data['massage'] = 'Sorry ! Image type must be svg or jpg or jpeg !';
          $data['storageLocation'] = null;
        }
      } else {
        $data['massage'] = 'Sorry ! File must be an Image. Pls Cheack file Type.';
        $data['storageLocation'] = null;
      }

    }else{
      $data['massage'] = 'Please Choose An Image!';
      $data['storageLocation'] = null;
    }
    return $data;
  }
}
