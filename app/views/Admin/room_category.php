    <div class="container-fluid py-4">
      <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-white">Room Category</h1>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info m-1 float-right btn-sm text-white" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-user-plus fa-lg text-white"></i>&nbsp;&nbsp;Add new room category</button>
                    </div>
                    
                </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Room Category table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" >
                  <thead>
                      <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Category Name</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Availability</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Max Person</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Size</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Bed</th>


                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $row):?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['category_name'];?></h6>
                        </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['availability'];?></h6>
                        </div>
                        </div>
                      </td>
                      

                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Available</span>
                      </td>
                      <td>
                        <div class="align-middle text-center text-sm">
                            <img src="<?php echo BASE_URL."Files/room_category/".html_escape($row['image']);?>" width="40%">
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['price'];?></h6>
                        </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['max_persons'];?></h6>
                        </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['size'];?></h6>
                        </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['bed'];?></h6>
                        </div>
                        </div>
                      </td>
                    
                      <td class="d-flex  justify-content-center">
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?php echo  $row['category_id'];?>"><i class="fas fa-edit"></i>&nbsp;
                          Edit
                        </a> &nbsp; &nbsp;
                        <a href="<?php echo site_url('Admin/delete_category/'.$row['category_id'].'')?>" class="btn btn-danger" data-toggle="tooltip" data-original-title="Edit user">
                          <i class="fas fa-trash"></i> &nbsp;
                          Delete
                        </a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Room Category</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?= site_url('Admin/add_room_category')?>" method="post" enctype= "multipart/form-data">
        <div class="form-group">
            <label class="form-control-label">Room Category Name:</label>
            <input type="text" name="category_name" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Availability:</label>
            <input type="text" name="availability" class="form-control">
        </div>
          <div class="form-group">
            <label class="form-control-label">Description:</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Price:</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Max Persons:</label>
            <input type="text" name="max_persons" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">No of Bed:</label>
            <input type="text" name="bed" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Size in Meter squared:</label>
            <input type="text" name="size" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Photo:</label>
            <input type="file" name="room_image" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Status:</label>
            <select name="status" class="form-control">
              <option value="Available">Available</option>
              <option value="Not Available">Not Available</option>
            </select>
        </div>
  
          
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Update Student -->
<?php foreach ($data as $row):?>
<div class="modal" id="myModal<?php echo $row['category_id'];?>">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Room Category</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?= site_url('Admin/update_category')?>" method="post" enctype= "multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="category_id" value="<?php echo $row['category_id'];?>" class="form-control">
            <input type="hidden" name="room_image_hidden" value="<?php echo $row['image'];?>" class="form-control">

        </div>
        <div class="form-group">
            <label class="form-control-label">Room Category Name:</label>
            <input type="text" name="category_name" value="<?php echo $row['category_name'];?>" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Availability:</label>
            <input type="text" name="availability" value="<?php echo $row['availability'];?>" class="form-control">
        </div>
          <div class="form-group">
            <label class="form-control-label">Description:</label>
            <input type="text" name="description" value="<?php echo $row['description'];?>" class="form-control">
        </div>
         <div class="form-group">
            <label class="form-control-label">Price:</label>
            <input type="text" name="price" value="<?php echo $row['price'];?>" class="form-control">
        </div>
         
        <div class="form-group">
            <label class="form-control-label">Max Persons:</label>
            <input type="text" name="max_persons" value="<?php echo $row['max_persons'];?>" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Size:</label>
            <input type="text" name="size" value="<?php echo $row['size'];?>" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Bed:</label>
            <input type="text" name="bed" value="<?php echo $row['bed'];?>" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Photo:</label>
            <input type="file" name="room_image" value="<?php echo $row['image'];?>" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Status:</label>
            <select name="status" class="form-control">
              <option value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
              <option value="Available">Available</option>
              <option value="Not Available">Not Available</option>
            </select>
        </div>
  
          
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>
<?php endforeach;?>