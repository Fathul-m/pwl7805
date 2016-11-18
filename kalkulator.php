<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator sederhana dengan php</title>
</head>
<body>
<h1>Kalkulator sederhana dengan bahasa pemrograman php</h1>
<form action="kalkulator.php" method="POST">
 <table cellpadding="4">
  <tr>
   <td>Nilai 1 : <input type="text" name="nil1" size="5"></td>
  </tr>
  <tr>
   <td align="center" colspan="2"><select name="operasi">
    <option value="+">Ditambah</option>
    <option value="-">Dikurangi</option>
    <option value="/">Dibagi</option>
    <option value="*">Dikali</option>
    <option value="mod">Mod</option>
   </select></td>
  </tr>
  <tr>
   <td>Nilai 2 : <input type="text" name="nil2" size="5"></td>
  </tr>
 </table>Hasilnya adalah :
 <?php
 $nilai1 = $_POST['nil1'];
 $nilai2 = $_POST['nil2'];
 $oprator = $_POST['operasi'];
 if ($oprator == "+")
 {
  echo $nilai1+$nilai2;
 }elseif ($oprator == "-")
 {
  echo $nilai1-$nilai2;
 }elseif ($oprator == "*")
 {
  echo $nilai1*$nilai2;
 }elseif ($oprator == "/")
 {
  echo $nilai1/$nilai2;
 }elseif ($oprator == "mod")
 {
  echo $nilai1%$nilai2;
 }else
 {
  echo "Tidak dikenal";
 }

 ?><br><br>
<input type="submit" value="Hitung">
<input type="reset" value="Reset">

</form>
<br>

</body>
</html>