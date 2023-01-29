<?php
if(isset($_POST['submit'])){
if(!isset($error)){
    require('fpdf/fpdf.php');
    //create html of the data

    ob_start();
    $title = 'Business Plan';
    $body = ob_get_clean();
  
    $body = iconv("UTF-8", "UTF-8//IGNORE", $body);

    //require('fpdf/fpdf.php');

    $pdf = new FPDF('p','mm','A4');
    $pdf->AddPage($body);
    //$pdf-> SetTitle($title); 
    //arial bold 15
    $pdf->SetFont('Arial','B',15);
    $w = $pdf->GetStringWidth($body)+6;
    $pdf->SetX((210-$w/2));
  
    //Color of frame, Background and text;
    $pdf->SetDrawColor(221,241,221,1);
    $pdf->SetFillColor(13,140,0,5);
    //$pdf->SetTextColor(255,255,255,1);
    //tickness
    $pdf->SetLineWidth(1); 
    //$pdf->Image('',0,0);
    //Location X Y H 
    $pdf->Cell($w, 9, $title,1 ,1, '',true);   
    $pdf->ln(2);
    $pdf->Cell(0, 20, 'Welcome to '.@$cName,0 ,1, 'C'); 
    $pdf->Cell(0, 20, 'We are located at: '.@$cAddr,'',15, 'R'); 
    $pdf->Cell(0, 20, 'contact us with: '.@$cEmail,'',10, 'c'); 
    $pdf->Cell(0, 20, 'We deal with: '.@$cType,'',5, 'c'); 
    $pdf->Cell(0, 20, '1.0 Introduction The purpose of the networking : '.@$cType,'',29, 'L');
    $pdf->Cell(2, ln);
    $pdf->Cell(0, 20, 'to assist students in understanding the is for ' .@$cType,'',5, 'L');
    $pdf->Cell(0, 20, 'to assist students in understanding the is for ' .@$cType,'',5, 'L');
    $pdf->Cell(0, 20, 'to help students place in context their current . ' .@$cType,'',5, 'L');
    $pdf->Cell(0, 20, ' to assist students in planning the is for. ' .@$cType,'',5, 'L');  
    
    //$pdf->SetMargins('left','','');
   /* $pdf->SetFont('Arial','BIU',40);
    //require_once __DIR__ . '/mpdf7/mpdf.php';

   // $pdf = new Fpdf('c');

    //write html to pdf
    $pdf->Write(10, '');
    $pdf->Cell(10,5,$body);
    //$pdf->Cell(60,10,$body,80,50,'C');*/
    //output pdf
    $Name = @"$cName.pdf";
    $pdf->Output($Name,'F');
    ob_end_flush();
    //save to server
    //$mpdf->output('bifound.pdf','F')

   
    }
}