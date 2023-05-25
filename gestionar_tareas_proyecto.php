<?php
include "./components/verificationLogued.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestionar tareas de proyecto | Sistema de gestion de proyectos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include "./components/sidebar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tareas de proyecto</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Descripcion</th>
                      <th>Fecha inicio</th>
                      <th>Fecha finalizacion</th>
                      <th>Estado</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      require_once "./app/functionProyectos.php";
                      $tares = getTaskForProyect($_GET['idProyecto']);
                      foreach ($tares as $key => $tarea) {
                        ?>
                       <tr> 
                          <td><?php echo $tarea['idTareas']?></td>
                          <td><?php echo $tarea['descripcion']?></td>
                          <td><?php echo $tarea['fechaInicio']?></td>
                          <td><?php echo $tarea['fechaFinalizacion']?></td>
                          <td><?php echo $tarea['estado']?></td>
                          <td style="display: flex;flex-direction: column;justify-content: flex-start;">
                            <a href="./ver_tareas_proyecto.php?idProyecto=<?php echo $value['idTareas']?>">Editar tarea</a>
                            <a href="./deleteProyecto.php?idProyecto=<?php echo $value['idTareas']?>">Eliminar tarea</a>
                          </td></tr>
                        <?php
                      }                    
                    ?>
                  </tbody>
                </table>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
</body>
</html>
