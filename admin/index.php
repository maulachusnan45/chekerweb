<?php include "header.php"; ?>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<style>
  .tableFixHead          { overflow-y: auto; height: 100%; }
.tableFixHead thead th { position: sticky; top: 0; }

</style>
<body>
<center>
<h3> Form Check Data</h3>

    <nav>
        <?php include "tambah.php"; ?>    
      </nav>
      </center>
      <a class="btn btn-outline-primary" href="logout.php"><i class="fas fa-sign-out-alt">logout</i></a>
      <center>
    <br>
    <div class="tableFixHead">
    <table border="1">
    <table class="table table-striped" style="width: 75%;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Nama Data</th>    
      <th scope="col">Tanggal Kadaluarsa</th>
      <th scope="col">provider</th>  
      <th scope="col">Status</th>
    </tr>
  </thead>
    <tbody>

        <?php
        $no_urut = 0;
        $sql = "SELECT * FROM ckr";
        $query = mysqli_query($db, $sql);

        while($ck = mysqli_fetch_array($query)){
          $no_urut++;

            echo "<tr>";
            echo"<td>$no_urut</td>";
            echo "<td>".$ck['id']."</td>";
            echo "<td>".$ck['nm']."</td>";
            echo "<td>".$ck['exp']."</td>";
            echo "<td>".$ck['pvr']."</td>";
            
            echo "<td>";
            $id=$ck['id'];
            $nm=$ck['nm'];
            $pvr=$ck['pvr'];
                        $tgl_sekarang=date("Y-m-d");
                        $tgl_exp=$ck['exp'];
if ($tgl_sekarang <=$tgl_exp ){
                           
                              echo "aktif";
                            }

                            elseif ($tgl_sekarang >= $tgl_exp )
                            
                            {
                              echo"<b>Data Mati</b>";
            
                              echo"<div class='modal fade' id='mati' tabindex='-1' role='dialog' aria-labelledby='matiLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                  <div class='modal-content'>
                                    <div class='modal-header'>
                                      <h5 class='modal-title' id='matiLabel'>Informasi Data</h5>
                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                      </button>
                                    </div>
                                    <table >
                                    <tr>
                                    <th>id</th>
                                      <th>Nama Data</th>
                                      <th>Tanggal Kadaluarsa</th>
                                    </tr>


                                  </table>
                                    <div class='modal-footer'>
                                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
                              <script src='js/bootstrap.min.js'></script>
                          <script>
                            $('#mati').modal('show');
                          </script>
                          
                              ";
                            }   
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
      </div>
    </center>


<?php include "footer.php"; ?>
<!---
/"
                                  while ($tgl_sekarang >=$tgl_exp) { 
                                    <tr>
                                      <td>$id</td>
                                      <td>$nm</td>
                                      <td>$tgl_exp</td>
                                    </tr>
                                  }
                                  "/--->