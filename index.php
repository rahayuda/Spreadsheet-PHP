  <!DOCTYPE html>
  <html lang="en">
    
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Bottom Navbar Bootstrap</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  
  <body>
      <div class="container-fluid mt-4 mb-4">
		    <div class="card">
              <div class="card-body">
                  <table class="table table-sm table-striped small">
                      <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama</th>
						  <th>Lokasi</th>
                          <th>Kota Madya</th>
                          <th>Kecamatan</th>
                          <th>Kelurahan</th>
						  <th>Luas</th>
						  <th>Jenis</th>
                      </tr>
                      <?php 
                          include('data.php'); 
                          $no = 1;
                      ?>
                      <!-- $newArray adalah variabel yang didapatkan dari data.php  -->
                      <?php foreach ($newArray as $value) { ?>
                          <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $value["kodifikasi"]; ?></td>
                              <td><?php echo $value["nama"]; ?></td>
							  <td><?php echo $value["lokasi"]; ?></td>
                              <td><?php echo $value["kotamadya"]; ?></td>
                              <td><?php echo $value["kecamatan"]; ?></td>
                              <td><?php echo $value["kelurahan"]; ?></td>
							  <td><?php echo $value["luas"]; ?></td>
							  <td><?php echo $value["jenis"]; ?></td>
                          </tr>
          
                      <?php } ?>
                  </table>
				</div>
			</div>
      </div>
  
  </body>
  
  </html>