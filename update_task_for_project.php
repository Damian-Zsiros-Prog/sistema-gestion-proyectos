<?php
include "./components/verificationLogued.php";
require_once "./app/functionTask.php";
$dataTask = getTaskById($_GET['idTarea']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar tarea para proyecto | Sistema de gestion de proyectos</title>

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
              <h1>Editar tarea para proyecto</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="./editarTarea.php" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Descripcion:</label>
                <input type="text" name="descripcion" value="<?php echo $dataTask['descripcion'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Descripcion" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Fecha de inicio:</label>
                <input type="datetime-local" name="fechaInicio" class="form-control" value="<?php echo $dataTask['fechaInicio'] ?>" id="exampleInputEmail1" placeholder="Fecha de inicio" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Fecha de finalizacion:</label>
                <input type="datetime-local" name="fechaFinalizacion" class="form-control" value="<?php echo $dataTask['fechaFinalizacion'] ?>" id="exampleInputEmail1" placeholder="Fecha de finalizacion" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Estado:</label>
                <input type="text" name="estado" value="<?php echo $dataTask['estado'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Estado" required>
              </div>
              <input type="hidden" name="idTarea" value="<?php echo $_GET['idTarea'] ?>">
              <input type="hidden" name="idProyecto" value="<?php echo $dataTask['idProyecto'] ?>">
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Editar tarea para proyecto</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

        <!-- general form elements -->
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
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- Summernote -->
  <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- CodeMirror -->
  <script src="../../plugins/codemirror/codemirror.js"></script>
  <script src="../../plugins/codemirror/mode/css/css.js"></script>
  <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
  <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
</body>

</html>