

<div id="otherCity" >
            <div class="form-group">
              <label for="exampleInputEmail1">Other</Title></label>
              <input type="text" class="form-control" id="nameTitle" 
              aria-describedby="emailHelp" name="otherCity" placeholder="Company Name">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
</div>

<div id="otherSubCity" >
            <div class="form-group">
              <label for="exampleInputEmail1">Other</Title></label>
              <input type="text" class="form-control" id="nameTitle" 
              aria-describedby="emailHelp" name="subCity" placeholder="Company Name">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
</div>

<div id="typeCar" >
            <div class="form-group">
              <label for="exampleInputEmail1">Other</Title></label>
              <input type="text" class="form-control" id="nameTitle" 
              aria-describedby="emailHelp" name="type2" placeholder="Company Name">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
</div>

<div id="changeProfile">
<label for="exampleInputEmail1">Upload Profile Photo</label>
          <input type="file" class="form-control" id="photo" 
           name="photoq" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
</div>

<div id="adP1">
    <label for="exampleInputEmail1">Upload Profile Photo 1</label>
          <input type="file" class="form-control" id="photo" 
           name="photo1" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>

<div id="adP2">
    <label for="exampleInputEmail1">Upload Profile Photo 1</label>
          <input type="file" class="form-control" id="photo" 
           name="photo2" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>

<div id="adP3">
    <label for="exampleInputEmail1">Upload Profile Photo 1</label>
          <input type="file" class="form-control" id="photo" 
           name="photo3" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>


<div id="houseType" class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01"> Type : </label>
        </div>
        <select class="custom-select" name="type" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="women">Villa</option>
          <option value="men">Gojo</option>
        </select>
</div>


<div id="bedBath">
<div class="form-group">
              <label for="exampleInputEmail1">Number Of BedRoom :</Title></label>
              <input type="number" class="form-control" id="nameTitle" 
              aria-describedby="emailHelp" name="bedRoomNo" placeholder="Company Name">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Bath Of BedRoom :</Title></label>
              <input type="number" class="form-control" id="nameTitle" 
              aria-describedby="emailHelp" name="bathRoomNo" placeholder="Company Name">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
</div>

<div id="cBox">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
      <?php
      require_once "../php/adminCrude.php";
      $out2 = $admin->adsCategoryLister();
      while($row = $out2->fetch_assoc()){

              ?>
            <tr>
            <th scope="row"><?php echo $row['id'] ?></th>
            <td id="editAd<?php echo $row['id'] ?>">
            <?php echo $row['category'] ?>
             <button onclick="edit(<?php echo $row['id'] ?>)"  class="btn btn-dark">Edit</button> 
            <button class="btn btn-dark">Delete</button>
            </td>

            </tr>
              <?php            
          }
      
      
      ?>


  </tbody>
</table>
</div>


<div id="targetFor" class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01"> Target For: </label>
        </div>
        <select class="custom-select" name="for" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="women">Women</option>
          <option value="men">Men</option>
          <option value="both">Both</option>
        </select>
        </div>


<div id="carCform1">
          <label for="exampleInputEmail1">Upload Profile Photo 1</label>
          <input type="file" class="form-control" id="photo" 
           name="x1" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>

<div id="carCform2">
          <label for="exampleInputEmail1">Upload Profile Photo 1</label>
          <input type="file" class="form-control" id="photo" 
           name="x2" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div id="carCform3">
          <label for="exampleInputEmail1">Upload Profile Photo 1</label>
          <input type="file" class="form-control" id="photo" 
           name="x3" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>


    <div id="hform1">
    <label for="exampleInputEmail1">Upload Profile Photo 1</label>
          <input type="file" class="form-control" id="photo" 
           name="xy1" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div id="hform2">
    <label for="exampleInputEmail1">Upload Profile Photo 2</label>
          <input type="file" class="form-control" id="photo" 
           name="xy2" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div id="hform3">
    <label for="exampleInputEmail1">Upload Profile Photo 3</label>
          <input type="file" class="form-control" id="photo" 
           name="xy3" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>