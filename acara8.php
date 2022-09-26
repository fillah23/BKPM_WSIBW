<?php
/*
* Kalkulator Sederhana Dengan PHP OOP
*/
class Matematika
{
  private $x;
  private $y;

  public function Tambah($a, $b)
  {
    $this->x = $a;
    $this->y = $b;
    $hasil = $this->x + $this->y;
    return $hasil;
  }

  public function Kali($a, $b)
  {
    $this->x = $a;
    $this->y = $b;
    $hasil = $this->x * $this->y;
    return $hasil;
  }

  public function Kurang($a, $b)
  {
    $this->x = $a;
    $this->y = $b;
    $hasil = $this->x - $this->y;
    return $hasil;
  }

  public function Bagi($a, $b)
  {
    $this->x = $a;
    $this->y = $b;
    $hasil = $this->x / $this->y;
    return $hasil;
  }

  public function TampilkanForm()
  {
    echo '<form method="POST">';
    echo '<input type="number" name="x"> &nbsp;';
    echo '<select name="operasi">
      <option value="tambah">+</option>
      <option value="kali">x</option>
      <option value="kurang">-</option>
      <option value="bagi">/</option>
    </select> &nbsp;';
    echo '<input type="number" name="y"> &nbsp;';
    echo '<label>=</label> &nbsp;';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
  }
}

$data = new Matematika();
$data->TampilkanForm();

if ($_POST) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  if ($_POST['operasi'] == "tambah") {
    echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kali") {
    echo "Hasil ".$x." x ".$y." = ".$data->Kali($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kurang") {
    echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "bagi") {
    echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y)."<br /><br />";
  }
}
?>