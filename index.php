<?php
// include autoloader
require_once 'autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('
<img src="logo.png">
      <table border="1" cellpadding="5px" cellspacing="0" class="table table-bordered" width="100%">
        <tr>
          <td align="left" valign="top">Intended Use:</td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label>Portfolio Evaluation</label></td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">QC/Audit</label></td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Lending</label></td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">REO/Foreclosure</label></td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Other</label>
            <input style="border:none; border-bottom:1px solid #000;" class="form-control" type="text"></td>
        </tr>
        <tr>
          <td align="left" valign="top">Data Source(s) Used:</td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Tax Record</label></td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Appraiser Files</label></td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">MLS</label></td>
          <td align="left" valign="top" colspan="2"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Other</label>
            <input style="border:none; border-bottom:1px solid #000;" class="form-control" type="text"></td>
        </tr>
        <tr>
          <td align="left" valign="top"> Interest: </td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Fee Simple</label></td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Leased Fee</label></td>
          <td align="left" valign="top"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Leased Hold</label></td>
          <td align="left" valign="top" colspan="2"><input type="checkbox" checked="" value="check1" name="check" id="check1">
            <label for="check1">Other</label>
            <input style="border:none; border-bottom:1px solid #000;" type="text" class="form-control"></td>
        </tr>
      </table>
      
      
');

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
//$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();

$dompdf->setPaper('A3', 'landscape');  
$dompdf->render();
$pdf = $dompdf->output();
$file_location = "pdfReports/".time().".pdf";
file_put_contents($file_location,$pdf); 


?>