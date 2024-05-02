<?php
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');
?>
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Patient's Details</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable of Patients</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New User</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="./addData.php" method="POST">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Name:</label>
                      <input type="text" name="name" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Email:</label>
                      <input type="email" name="email" class="form-control" id="recipient-email">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Phone Number:</label>
                      <input type="number" name="phone" class="form-control" id="recipient-phone">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Password:</label>
                      <input type="password" name="password" class="form-control" id="recipient-password">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="saveData">Add</button>
                </div>
                </form>
              </div>
            </div>
            <!-- modal close -->
        </div>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
             <th>Id no.</th>
            <th>Patient's name</th>
            <th>Email</th>
            <th>Phone no</th>
            <!-- <th>Password</th> -->
           
          </tr>
          </thead>
          <tbody>
        <?php
        include('./config/dbcon.php');

        // Fetch data from the database
        $sql = "SELECT id, name, email, phone, password FROM addData";
        $result = $conn->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>"; // Display ID
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                // echo "<td>" . $row["password"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->

    </div>
  </div>
</div>

<?php include('include/footer.php'); ?>