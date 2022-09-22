
    <?php
      require_once 'lib/conn.php';

      $id_cliente = (int)$_GET['id_cliente'];
      $id_endereco = (int)$_GET['id_endereco'];

      $sql = "DELETE FROM tbl_cliente WHERE id_cliente= :id_cliente END DELETE FROM tbl_endereco INNER JOIN tbl_endereco ON tbl_cliente.id_endereco = tbl_endereco.id_endereco";
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(":id_cliente",$id_cliente, ":id_endereco", $id_endereco);
      $stmt->execute();

      
    ?>
    <div class="alert alert-success">
      <i class="far fa-check-circle"></i> Cliente excluido com sucesso!
      <meta http-equiv="refresh" content=" 10 ;url=List_client.php">