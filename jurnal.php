<!DOCTYPE html>
<html>
<head>
    <title>pendaftaran</title>
</head>
<body>
  <form action="submit.php" method="POST" enctype="multipart/form-data">
  <h1>Pendaftaran Mahasiswa</h1>
    <hr width="20%" align="left">
    <p>Isilah form pendaftaran berikut </p>
    <table>
      <tr>
               <td valign="top">Nama</td>
               <td><input type="text" maxlength="35" name="nama"></td>
      </tr>
    	<tr>
    	    <td valign="top">Nim</td>
    	    <td><input type="number" maxlength="10" name="nim"></td>
    	</tr>
      <tr>
               <td valign="top">Kelas</td>
               <td><input type="radio" name="kelas" value="D3-MI4101">D3-MI4101<br>
               <td><input type="radio" name="kelas" value="D3-MI4102">D3-MI4102<br>
               <td><input type="radio" name="kelas" value="D3-MI4103">D3-MI4103<br>
               <td><input type="radio" name="kelas" value="D3-MI4104">D3-MI4104<br>
               </td>
        </tr>
    	
        <tr>
               <td valign="top">Program Studi</td>
               <td><select name="prodi">
               <option value="Manajemen Informatika">Manajemen Informatika</option>
               <option value="Mulmed">Mulmed</option>
               <option value="IF">IF</option>
               <option value="TI">TI</option>
               <option value="DKV">DKV</option>
               </select><br><br>
        </tr>

        <tr>
               <td valign="top">Jenis Kelamin</td>
               <td><input type="radio"  name="JenisKelamin" value="laki-laki" required>laki-laki
                    <input type="radio"  name="JenisKelamin" value="perempuan" required>perempuan
               </td>
        </tr>
        <tr> 
            <td valign="top">Hobi</td>
            <td><input type="checkbox" name="hobi[]" value="Traveling">Traveling
                <input type="checkbox" name="hobi[]" value="Membaca">Membaca
                <input type="checkbox" name="hobi[]" value="Nonton">Nonton 
            </td>
            
            </tr>
        <tr>
               <td valign="top">Fakultas</td>
               <td><select name="fakultas">
               <option value="FIT">FIT</option>
               <option value="FKB">FKB</option>
               <option value="FIK">FIK</option>
               <option value="FTE">FTE</option>
               <option value="FRI">FRI</option>
               <option value="FEB">FEB</option>
               <option value="FIF">FIF</option>
               </select><br><br>
        </tr>
        <tr>
        <td>Alamat</td>
        <td>:<td>
          <td><input type="textarea" name="alamat" value="isi alamat anda"></td>
        </tr>
    	
      <tr>
    	    <td colspan="2"><input type="submit" value="Kirim" name="submit"></td>
    	</tr>
    </table>
</body>
</html>