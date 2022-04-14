<?php include_once 'includes/Templates/header.php'; ?>

<section class="contenedor seccion">
  <h2>Calendario de Eventos</h2>

  <?php
    try {
      include_once('includes/Funciones/bd_conexion.php');
        $sql = "SELECT * FROM eventos";
        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
  ?>

  <div class="calendario">
    <?php
      $eventos = $resultado->fetch_assoc();
    ?>

    <pre>
      <?php
        var_dump($eventos);
       ?>
    </pre>

  </div>

  <pre>
    <?php $conn->close() ?>
  </pre>

</section>

<?php include_once 'includes/Templates/footer.php'; ?>
