    <div class="container-fluid py-4">
      <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-2 text-white">Bookings</h1>
                    </div>
                    <div class="col-md-6">
                       
                    </div>
                    
                </div>
        <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Bookings Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" >
                  <thead>
                      <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date From</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Date To</th>
                      <th class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Room Name</th>
                      <th class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">User ID</th>
                      <th class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $row):?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['datetime_from'];?></h6>
                        </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['datetime_to'];?></h6>
                        </div>
                        </div>
                      </td>
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
                            <h6 class="mb-0 text-sm"><?php echo $row['user_id'];?></h6>
                        </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['status'];?></h6>
                        </div>
                        </div>
                      </td>                    
                      <td class="d-flex  justify-content-center">
                       
                        <a href="<?php echo site_url('Admin/delete_bookings/'.$row['booking_id'].'')?>" class="btn btn-danger" data-toggle="tooltip" data-original-title="Edit user">
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

