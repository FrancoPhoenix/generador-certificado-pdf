<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

if (!empty($_POST['firstname']) &&
    !empty($_POST['lastname']) &&
    !empty($_POST['course'])) {

  $fullname = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $courseName = $_POST['course'];
  $certificationDate = date("M d, Y");
  $filename = 'Certificado de Culminación - ' . $courseName;

  $theme = file_get_contents('./theme.php', true);
  $html = str_replace('{{ fullname }}', $fullname, $theme);
  $html = str_replace('{{ courseName }}', $courseName, $html);
  $html = str_replace('{{ certificationDate }}', $certificationDate, $html);

  $dompdf = new Dompdf();
  $dompdf->loadHtml($html);
  $dompdf->setPaper('A4', 'landscape');
  $dompdf->render();

  $dompdf->stream($filename);
} else {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
