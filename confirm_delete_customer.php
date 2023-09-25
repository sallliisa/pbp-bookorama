<?php
  require_once('./lib/db_login.php');

  $res = $db->query("SELECT * FROM customers WHERE customerid={$_GET['id']}");
?>

<?php include('./header.php') ?>
<div class="card mt-4">
  <div class="card-header">Konfirmasi Hapus</div>
  <div class="card-body">
    <div>Apakah anda yakin ingin menghapus data ini?</div>
    <table class="mt-2">
      <?php
        while ($row = $res->fetch_object()) {
          echo "<tr>";
            echo "<td>Nama</td>";
            echo "<td>:</td>";
            echo "<td>{$row->name}</td>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>Alamat</td>";
            echo "<td>:</td>";
            echo "<td>{$row->address}</td>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>Kota</td>";
            echo "<td>:</td>";
            echo "<td>{$row->city}</td>";
          echo "</tr>";
        }
      ?>
    </table>
    <div class="d-flex flex-row gap-2 mt-2">
      <?php
        echo "<a href='/delete_customer.php?id={$_GET['id']}' class='btn btn-danger'>Hapus</a>";
        echo "<a href='/view_customer.php' class='btn btn-primary'>Batal</a>"
      ?>
    </div>
  </div>
</div>
<?php include('./footer.php') ?>
