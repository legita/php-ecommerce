<div class="col-sm-4">
<h1 align="center">Keranjang</h1>
<hr>
<div align="left">
	<form>
	
	<div>
		<td>Nama Pesanan</td>
		<td>:</td>
		<td><input type="text" name="nama" placeholder="Isi nama pesanan" required></td>
	</div>

	<div>
		<td>Jumlah Pesanan</td>
		<td>:</td>
		<td><input type="number" name="jm" placeholder="Isi Jumlah Pesanan"><font style="color: red; size: 3">*jumlah</font></td>
	</div>
		
	<div>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jk" value="L">Laki-laki
			<input type="radio" name="jk" value="P">Perempuan</td>
	</div> 
		
	<div>
		<td>Nama Bank</td>
		<td>:</td>
		<td><select name="nama bank">
				<option value="-">-</option>
						 <option value="Mandiri"></option>
						 <option value="BNI">BNI</option>
						 <option value="BCA">BCA</option>
						 <option value="BRI">BRI</option> 		 
			</select>
		</td>
	</div>
		
	<div>
		<td>No. Tlp / Hp</td>
		<td>:</td>
		<td><input type="text" name="no. tlp / hp" placeholder="Isi nomer telpon anda"></td>
	</div>
		
	<div>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat" rows="5" cols="30" placeholder="Isi alamat anda"></textarea></td>
	</div>
	</form>
		
		<div>
			<form>
			<div>
				<td align="center"><input type="reset" name="reset" value="Reset">
					<button onclick="myFunction()">Daftar</button>
					<script> 
					function myFunction() {
					window.open("terimakasih.html");}</script>
				</td>
			</div>
			</form>
		</div>
</div>
</div>
