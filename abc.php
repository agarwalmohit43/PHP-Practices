<?php
if(isset($_POST['nickname'])){
    $name=$_POST['nickname'];
    require ("fpdf181/fpdf.php");

    class abc extends FPDF{
        function Header()
        {
            // Logo
            $this->Image('2.jpg',10,6,30);
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Move to the right
            $this->Cell(80);
            // Title
            $this->Cell(30,10,'Java',1,1,'C');
            // Line break
            $this->Ln(20);
        }
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
        }
    }
    $pdf=new abc();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",16);
    $pdf->Cell(0,10,"welcome {$name}",1,1);
    $pdf->output();

}
?>
<html>
<head>
    <title>Mohit Pdf</title>
</head>
<body>
<form action="abc.php" method="post">
    <input type="text" name="nickname"/>
    <input type="submit">
</form>

</body>
</html>
