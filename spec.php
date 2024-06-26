<?php  include('header.php')?>
<?php  require('config.php')?>


<?php 
if (isset($_GET['search'])) {
  $sql = "SELECT * FROM spec1 WHERE s_name LIKE '%".$_GET['search']."%' ORDER BY s_name ASC";
}else{
  $sql = "SELECT * FROM spec1 ORDER BY s_name ASC";
}

$result = $conn->query($sql);
?>

<div class="row">
  <div class="col-10 mx-auto">

    <nav class="navbar navbar-light bg-light justify-content-between rounded">
      <h2>Specialties</h2>
      <form class="form-inline" method="POST" action="processors/search-spec.php?from=spec1">
        <input name="s_search" class="form-control mr-sm-2" type="search" placeholder="Search Specialty" aria-label="Search"> 
        <button class="btn btn-dark my-2 my-sm-0 d-none d-sm-inline" type="submit">Search</button>
      </form>
    </nav>
    <div class="row">

     <?php 
     if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        ?>

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
          <div class="bg-white rounded shadow-sm"><img src="<?php echo $row["s_image"];?>" alt="<?php echo $row["s_name"];?>" class="img-fluid card-img-top gallery-image">
            <div class="p-4">
              <h5> <a href="#" class="text-dark text-truncate"><?php echo $row["s_name"];?></a></h5>
              <p class="small text-muted mb-0 text-truncate"><?php echo $row["s_desc"];?></p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p></p>
                <button
                type="button"
                class="btn btn-primary active" 
                data-toggle="modal" 
                data-target="#modal<?php echo $row['s_id']?>" 
                >Overview</button>
                <a href="controller.php?page=<?=$row['s_name']?>" class="btn btn-secondary active">More</a>
                
              </div>
            </div>
          </div>
        </div>
        <!-- End -->

        <div class="modal fade" id="modal<?php echo $row['s_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['s_name']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="<?php echo $row['s_image']?>" class="img-fluid">
                  </div>
                  <div class="col-lg-6 text-justify">
                    <p><?php echo $row["s_desc"];?></p>
                  </div>
                </div>
                <div class="row  p-2">
                  <small class="container text-truncate d-none"><a href="<?php echo $row['s_image']?>"><?php echo $row['c_image']?></a></small>            
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="controller.php?page=<?=$row['s_name']?>" class="btn btn-success">More</a>
              </div>
            </div>
          </div>
        </div>
        <?php  
      }
    }else{
      echo '<h6 class="p-3">Sorry! we could not find anything that matches your search...</h6>';
    }
    $conn->close();
    ?>

  </div>      
</div>  
</div>  
<?php  include('footer.php')?>