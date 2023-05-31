<?php
// session_start();
// if(!isset($_SESSION['username'])){
//   header('Location: index.php');
// };
$q = "SELECT * FROM invoice";
$con = new mysqli('localhost', 'root', '', 'crm');
$data = $con->query($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
          <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">List_Invoice</h5>
                </div>

            <div class="card card-primary card-outline">
              <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>ID</th>
                        <th>Admin</th>
                        <th>Invoice_id</th>
                        <th>Products Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Vat</th>
                        <th>Discount</th>
                        <th>Payable</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="pID">
                    <?php while ($d = $data->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['dealer_id'] ?></td>
                        <td><?php echo $d['invoice_id'] ?></td>
                        <td><?php echo $d['product_id'] ?></td>
                        <td><?php echo $d['price'] ?></td>
                        <td><?php echo $d['quantity'] ?></td>
                        <td><?php echo $d['total'] ?></td>
                        <td><?php echo $d['vat'] ?></td>
                        <td><?php echo $d['discount'] ?></td>
                        <td><?php echo $d['payable'] ?></td>
                        <td><?php echo $d['created_at'] ?></td>
                        <td>
                        <a href="invoice_edit.php?invoice_id=<?php echo $d['invoice_id'] ?>" class="btn btn-success btn-xs">Edit</a>
                        <a href="del_invoice.php?id=<?php echo $d['id'] ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        <!-- <a href="dealer_view.php?id=<?php echo $d['id'] ?>" class="btn btn-xs btn-primary">View</a> -->
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
  
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- <script>
  $(function () {
    // Summernote
    $('.summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script> -->
</body>
</html>