<?php
require('FPDF/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,20,'werabe',"0","1","C");
$pdf->SetLeftMargin(30);
$pdf->SetTextColor(0,0,0);

  include('../conn.php');
  include('../session.php');
  $user_id=$_SESSION['user_id'];
  $select=mysqli_query($conn,"select *from patient where ID='$user_id'");
  $row=mysqli_fetch_assoc($select);
$pdf->Cell(40,10,$row['Fname'],"0","0","C");
$pdf->Cell(40,10,$row['Lname'],"0","0","C");
//$pdf->WriteHTML('<h1>meki</h1>');
$pdf->Cell(100,10,$row['Description'],"1","0","C");
$pdf->SetFont('Arial','B',14);
$pdf->Output();
?>