<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>APARTLINE</title>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<body>

<!-- Add apartment -->
<div class="modal fade" id="apartmentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Aprtment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="bookApartment">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    <label for="">Apartment Name</label>
                    <input type="text" name="apartment" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Pax</label>
                    <input type="text" name="pax" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Guest Name</label>
                    <input type="text" name="guest_name" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Apartment</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit apartment Modal -->
<div class="modal fade" id="apartmentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Apartment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updateApartment">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="id" id="id" >

                <div class="mb-3">
                    <label for="">Apartment</label>
                    <input type="text" name="apartment" id="update_apartment" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Location</label>
                    <input type="text" name="location" id="update_location" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">pax</label>
                    <input type="text" name="pax" id="update_pax" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">guest_name</label>
                    <input type="text" name="guest_name" id="update_guest" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Room</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- View apartment Modal -->
<div class="modal fade" id="apartmentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Partment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">apartment</label>
                    <p id="view_apartment" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">location</label>
                    <p id="view_location" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">pax</label>
                    <p id="view_pax" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">guest name</label>
                    <p id="view_guest_name" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>PHP Ajax CRUD without page reload using Bootstrap Modal
                        
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#apartmentAddModal">
                            Add Apartment
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>apartment</th>
                                <th>location</th>
                                <th>pax</th>
                                <th>guest</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM apartment";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['apartment'] ?></td>
                                        <td><?= $row['location'] ?></td>
                                        <td><?= $row['pax'] ?></td>
                                        <td><?= $row['guest'] ?></td>
                                        <td>
                                            <button type="button" value="<?=$row['id'];?>" class="viewApartmentBtn btn btn-info btn-sm">View</button>
                                            <button type="button" value="<?=$row['id'];?>" class="editApartmentBtn btn btn-success btn-sm">Edit</button>
                                            <button type="button" value="<?=$row['id'];?>" class="deleteApartmentBtn btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).on('submit', '#bookApartment', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_apartment", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#apartmentAddModal').modal('hide');
                        $('#bookApartment')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editApartmentBtn', function () {

            var id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code.php?id=" + id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#id').val(res.data.id);
                        $('#update_apartment').val(res.data.apartment);
                        $('#update_location').val(res.data.location);
                        $('#update_pax').val(res.data.pax);
                        $('#update_guest').val(res.data.guest);

                        $('#apartmentEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateApartment', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_apartment", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#apartmentEditModal').modal('hide');
                        $('#updateApartment')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewApartmentBtn', function () {

            var id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?id=" + id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#view_apartment').text(res.data.apartment);
                        $('#view_location').text(res.data.location);
                        $('#view_pax').text(res.data.pax);
                        $('#view_guest_name').text(res.data.guest);

                        $('#apartmentViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deleteApartmentBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_apartment': true,
                        'id': id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });

    </script>

</body>
</html>