<?php
echo "<table border=1>";
echo "<tr>";
echo "<td><b> NIM  </b></td>";
echo "<td>". $_POST["NIM"]. "</td>";
echo "</tr>";
echo "<tr>";
echo "<td><b> NAMA  </b></td>";
echo "<td>". $_POST["NAMA"]. "</td>";
echo "</tr>";
echo "<tr>";
echo "<td><b> JENIS KELAMIN  </b></td>";
echo "<td>". $_POST["KELAMIN"]. "</td>";
echo "</tr>";
echo "<tr>";
echo "<td><b> ALAMAT  </b></td>";
echo "<td>". $_POST["ALAMAT"]. "<br/>";
echo "</tr>";
echo "<tr>";
echo "<td><b> PROGRAM STUDI  </b></td>";
echo "<td>". $_POST["PRODI"]. "</td>";
echo "</tr>";
echo "<tr>";
echo "<td><b> BAHASA PEMOGRAMAN YANG DIKUASAI  </b></td>";
echo "<td>";
  if (isset($_POST["PASCAL/DELPHI"])) {
    echo $_POST["PASCAL/DELPHI"]. "<br>";
  }
  if (isset($_POST["C/C++"])) {
    echo $_POST["C/C++"]. "<br>";
  }
  if (isset($_POST["VISUALBASIC"])) {
    echo $_POST["VISUALBASIC"];
  }
echo "</td>";
echo "</tr>";
echo "</table>";
?>
