    <div class="container-fluid py-4">
      <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-white">Rooms</h1>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info m-1 float-right btn-sm text-white" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-user-plus fa-lg text-white"></i>&nbsp;&nbsp;Add new room</button>
                    </div>
                    
                </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Room Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" >
                  <thead>
                      <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Room Name</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Category</th>
                      <th class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Price</th>
                      <th class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Max Person</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data[1] as $row):?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['room_name'];?></h6>
                        </div>
                        </div>
                      </td>
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
                      <td class="d-flex  justify-content-center">
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?php echo  $row['category_id'];?>"><i class="fas fa-edit"></i>&nbsp;
                          Edit
                        </a> &nbsp; &nbsp;
                        <a href="<?php echo site_url('Admin/delete_room/'.$row['room_id'].'')?>" class="btn btn-danger" data-toggle="tooltip" data-original-title="Edit user">
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
        <h4 class="modal-title">Add New Room</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?= site_url('Admin/add_new_room')?>" method="post" enctype= "multipart/form-data">
        <div class="form-group">
            <label class="form-control-label">Room Name:</label>
            <input type="text" name="room_name" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">Room Category:</label>
            <select name="category_id" class="form-control">
              <?php foreach ($data[2] as $key) {?>
              <option value="<?php echo $key['category_id']?>"><?php echo $key['category_name'];?></option>
              <?php }?>
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
<?php foreach ($data[1] as $row):?>
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