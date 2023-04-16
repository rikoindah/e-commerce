<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Invoice</title>
</head>
<body style="padding: 10px;">
    <center>
 		<h4>Invoice Pembelian</h4>
 	</center>
 	<br>
     <div class="row">
 				<div class="col-lg-4">
 					<table class="table">
 						<tr>
 							<th>No. Invoice</th>
 							<th>:</th>
 							<td>order->id </td>
 						</tr>
 						<tr>
 							<th>Tanggal Invoice</th>
 							<th>:</th>
 							<td>$order->created_at</td>
 						</tr>
 						<tr>
 							<th>Pelanggan</th>
 							<th>:</th>
 							<td>$order->user->name</td>
 						</tr>
 					
 					</table>					
 				</div>
 			</div>
             <h5><b>Daftar Pembelian</b></h5>

<table border: 1px solid>
    <thead>
        <tr>
            <th width="18%">Kode Produk</th>
            <th>Nama Produk</th>
            <th width="1%" style="text-align: center;">Harga</th>
            <th width="1%" style="text-align: center;">Jumlah</th>
            <th width="1%" style="text-align: center;">Total</th>
        </tr>
    </thead>
    <tbody>
  
            <tr>
                <td>produk_kode</td>
                <td>
                    
                    <br>
                    <small class="text-muted"></small>
                </td>
                <td style="text-align: center;"></td>  
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>  
            </tr>
            <?php 
        
        ?>
    </tbody>
</table>
</body>
</html>