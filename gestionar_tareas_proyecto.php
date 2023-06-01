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
    <?php include "./components/sidebar.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tareas de proyecto</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="./create_task_for_project.php?idProyecto=<?php echo $_GET['idProyecto'] ?>">Crear tarea nueva para el proyecto</a></li>
              </ol>
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
                      <td><?php echo $tarea['idTareas'] ?></td>
                      <td><?php echo $tarea['descripcion'] ?></td>
                      <td><?php echo $tarea['fechaInicio'] ?></td>
                      <td><?php echo $tarea['fechaFinalizacion'] ?></td>
                      <td><?php echo $tarea['estado'] ?></td>
                      <td style="display: flex;flex-direction: column;justify-content: flex-start;">
                        <a href="./update_task_for_project.php?idTarea=<?php echo $tarea['idTareas'] ?>" class="btn btn-danger">Editar tarea</a>
                        <a href="./deleteTaskForProject.php?idTarea=<?php echo $tarea['idTareas'] ?>&idProyecto=<?php echo $_GET['idProyecto'] ?>" class="btn btn-danger">Eliminar tarea</a>
                      </td>
                    </tr>
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