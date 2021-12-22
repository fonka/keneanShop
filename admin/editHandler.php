<?php

require_once "../php/adminCrude.php";

if(isset($_POST['titleElc'],
    $_POST['type'],
    $_POST['status'],
    $_POST['price'],
    $_POST['address'],
    $_POST['info'],
    $_POST['posterId']
)){

    $title = $_POST['titleElc'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    $posterId = $_POST['posterId'];
    $address = $_POST['address'];

    $size = " ";
    $processor = " ";
    $storage = " ";
    $core = " ";
    $ram = " ";





    if(isset($_POST['size'], $_POST['processor'], $_POST['core'], $_POST['storage'], $_POST['ram'])){
        $size = $_POST['size'];
        $processor = $_POST['processor'];
        $storage = $_POST['storage'];
        $core = $_POST['core'];
        $ram = $_POST['ram'];
    }

    if(isset($_FILES['elc1'])){
        $fName1 = $_FILES['elc1']['name'];
        $tmpName1 = $_FILES['elc1']['tmp_name'];
        $adPhotoE = $admin->electronicsPhotoChange('photoPath1', $fName1, $tmpName1, $posterId);
      }

      if(isset($_FILES['elc2'])){
        $fName2 = $_FILES['elc2']['name'];
        $tmpName2 = $_FILES['elc2']['tmp_name'];
        $adPhotoE = $admin->electronicsPhotoChange('photoPath2', $fName2, $tmpName2, $posterId);

      }

      if(isset($_FILES['elc3'])){
        $fName3 = $_FILES['elc3']['name'];
        $tmpName3 = $_FILES['elc3']['tmp_name'];
        $adPhotoE = $admin->electronicsPhotoChange('photoPath3', $fName3, $tmpName3, $posterId);

      }
    


    $out = $admin->updateElectronicsPost($type, $status, $title, $address, $price,
    $info, $ram, $processor, $size, $storage, $core, $posterId);


}
//vacancy edit handler
if(isset(
    $_POST['companyName'], $_POST['jobType'], 
    $_POST['jobTitle'], $_POST['positionType'],
    $_POST['Deadline'], $_POST['reqNo'], $_POST['location'],
    $_POST['description'],$_POST['pid']
  )){
    $companyName = $_POST['companyName'];
    $jobType =$_POST['jobType'];
    $jobTitle=$_POST['jobTitle'];
    $positionType=$_POST['positionType'];
    $Deadline=$_POST['Deadline'];
    $reqNo=$_POST['reqNo'];
    $location=$_POST['location'];
    $info=$_POST['description']; 
    $id = $_POST['pid'];


    $ask = $admin->updateVacancyPost($jobType, $positionType, $companyName, $jobTitle, $location, $Deadline, $id , $reqNo, $info  );

  }

  //tender post data handler block
  if(isset($_POST['tenderType'],
   $_POST['startDate'],
    $_POST['Deadline2'],
     $_POST['initialCost'],
     $_POST['location2'],
     $_POST['description2'],$_POST['uid'], $_POST['title']
     )
     ){

      $tenderType = $_POST['tenderType'];
      $startingDate = $_POST['startDate'];
      $deadLine=$_POST['Deadline2'];
      $location=$_POST['location2'];
      $initialCost=$_POST['initialCost'];
      $info = $_POST['description2'];
      $id2 = $_POST['uid'];
      $title = $_POST['title'];

      $db = $admin->updateTenderLister($tenderType, $startingDate, $deadLine, $location, $initialCost, $info, $id2, $title   );

     }

     //ad post edit handler
     if(isset($_POST['type'], $_POST['price'], $_POST['address'], $_POST['phone'], $_POST['title'],
     $_POST['pid'], $_POST['info'])){
       echo 'in the ad';

      $for = " ";

      if(isset($_POST['for'])){
        $for = $_POST['for']; 
      }

      $type = $_POST['type'];
      $price = $_POST['price'];
      $address =  $_POST['address'];
      $phone = $_POST['phone'];
      
      $title = $_POST['title'];
      $postId = $_POST['pid'];
      $info = $_POST['info'];

      if(isset($_FILES['photo1'])){
        $fName1 = $_FILES['photo1']['name'];
        $tmpName1 = $_FILES['photo1']['tmp_name'];
        $adPhotoE = $admin->adPhotoChange('photoPath1', $fName1, $tmpName1, $postId);
      }

      if(isset($_FILES['photo2'])){
        $fName2 = $_FILES['photo2']['name'];
        $tmpName2 = $_FILES['photo2']['tmp_name'];
        $adPhotoE = $admin->adPhotoChange('photoPath2', $fName2, $tmpName2, $postId);

      }

      if(isset($_FILES['photo3'])){
        $fName3 = $_FILES['photo3']['name'];
        $tmpName3 = $_FILES['photo3']['tmp_name'];
        $adPhotoE = $admin->adPhotoChange('photoPath3', $fName3, $tmpName3, $postId);

      }

      
      

      $adEdit = $admin->updateAdPost( $type, $price, $address, $phone, $for, $title, $info, $postId);


    }


      //car post handler
      if(isset($_POST['type2'],$_POST['status2'],$_POST['forRentOrSell'],$_POST['fuleKind'],$_POST['fixidOrN'],$_POST['price2'],$_POST['info2'],$_POST['pid'],
       $_POST['title'],
       $_POST['transmission'], $_POST['bodyStatus'], $_POST['km'], $_POST['ownerBroker'])){
      echo 'inx';
      $title = $_POST['title'];
      $type = $_POST['type2'];
      $status = $_POST['status2'];
      $forRentOrSell= $_POST['forRentOrSell'];
      $fixidOrN= $_POST['fixidOrN'];
      $fuleKind = $_POST['fuleKind'];
      $price = $_POST['price2'];
      $info = $_POST['info2'];
      $postId = $_POST['pid'];

      $transmission = $_POST['transmission'];
      $bodyStatus = $_POST['bodyStatus'];
      $km = $_POST['km'];
      $ob = $_POST['ownerBroker'];

      if(isset($_FILES['x1'])){
        $fName1 = $_FILES['x1']['name'];
        $tmpName1 = $_FILES['x1']['tmp_name'];
        $adPhotoE = $admin->carPhotoChange('photoPath1', $fName1, $tmpName1, $postId);
      }

      if(isset($_FILES['x2'])){
        $fName2 = $_FILES['x2']['name'];
        $tmpName2 = $_FILES['x2']['tmp_name'];
        $adPhotoE = $admin->carPhotoChange('photoPath2', $fName2, $tmpName2, $postId);

      }

      if(isset($_FILES['x3'])){
        $fName3 = $_FILES['x3']['name'];
        $tmpName3 = $_FILES['x3']['tmp_name'];
        $adPhotoE = $admin->carPhotoChange('photoPath3', $fName3, $tmpName3, $postId);

      }      




      $out12 = $admin->updateCarPost($title,$type, $status, $fuleKind, $postId,
       $fixidOrN,$price,$info,$forRentOrSell, $transmission, $bodyStatus, $km, $ob );
    }


        //house or land post data inserter
        if(isset(
          $_POST['houseOrLand'], $_POST['city'],$_POST['subCity'], $_POST['wereda'],
           $_POST['forRentOrSell'], $_POST['area'], $_POST['cost'], $_POST['fixidOrN'], 
           $_POST['info'],$_POST['pid'], $_POST['title'], $_POST['ownerBroker']
        )){
          echo 'inn house';

          // these variables will not be set if user choose house so initial value will be empty
          $bedRoomNo = ' ';
          $bathRoomNo = ' ';
          $type = " ";
          if(isset(
            $_POST['bedRoomNo'],
            $_POST['bathRoomNo'],
            $_POST['type']
          )){
            $bedRoomNo = $_POST['bedRoomNo'];
            $bathRoomNo = $_POST['bathRoomNo'];
            $type = $_POST['type'];
          }
          $title = $_POST['title'];
          $houseOrLand =$_POST['houseOrLand'];
          $city =$_POST['city'];
          $subCity=$_POST['subCity'];
          $wereda= $_POST['wereda'];
          $forRentOrSell=$_POST['forRentOrSell'];
          $area=$_POST['area'];
          $price=$_POST['cost'];
          $fixidOrN=$_POST['fixidOrN'];
          $info=$_POST['info'];
          $postId = $_POST['pid'];
          $ob = $_POST['ownerBroker'];

          if(isset($_FILES['xy1'])){
            $fName1 = $_FILES['xy1']['name'];
            $tmpName1 = $_FILES['xy1']['tmp_name'];
            $adPhotoE = $admin->housePhotoChange('photoPath1', $fName1, $tmpName1, $postId);
          }
    
          if(isset($_FILES['xy2'])){
            $fName2 = $_FILES['xy2']['name'];
            $tmpName2 = $_FILES['xy2']['tmp_name'];
            $adPhotoE = $admin->housePhotoChange('photoPath2', $fName2, $tmpName2, $postId);
    
          }
    
          if(isset($_FILES['xy3'])){
            $fName3 = $_FILES['xy3']['name'];
            $tmpName3 = $_FILES['xy3']['tmp_name'];
            $adPhotoE = $admin->housePhotoChange('photoPath3', $fName3, $tmpName3, $postId);
    
          }      


    
          
          $outH = $admin->updateHousePost($title, $type, $houseOrLand, $city, $subCity, $wereda,
          $forRentOrSell, $area, $bedRoomNo, $bathRoomNo, $price, $fixidOrN, $info, $postId, $ob );
          
    
        }

?>