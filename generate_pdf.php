<?php
require(fpdf/fpdf.php); //incluso a biblioteca FPDF

class PDF extends FPDF
{
    // Cabeçalho da página
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Relatório de Vendas', 0, 1, 'C');
        $this->Ln(10);
    }

    // Rodapé da página
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }
}

//criando o PDF
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

//conteúdo do PDF
$pdf->Cell(0,10, 'Nome: Allex Silva', 0, 1);
$pdf->Cell(0,10, 'Profissao: dev web', 0, 1);
$pdf->Ln(10);

//sobre mim
$pdf->Cell(0,10, 'Sobre mim:', 0, 1);
$pdf->MultiCell(0,10, 'Sou um desenvolvedor web com experiência em PHP, JavaScript e MySQL. Tenho conhecimento em frameworks como Laravel e React.');
$pdf->Ln(10);

//habilidades
$pdf->Cell(0,10, 'Habilidades:', 0, 1);
$skills = [
    'Desenvolvimento Web: HTML, CSS, JavaScript, PHP',
    'Banco de Dados: MySQL',
    'Controle de Versão: Git',
    'Resolução de Problemas e Pensamento Crítico',
    'Trabalho em Equipe e Comunicação Eficaz'
];

foreach ($skills as $job) {
    $pdf->Cell(0,10, '- ' . $job, 0, 1);
}
$pdf->Ln(10);

//contato
$pdf->Cell(0,10, 'Contato:', 0, 1);
$pdf->Cell(0,10, 'Email: alexcleitor@hotmail.com', 0, 1);
$pdf->Cell(0,10, 'Telefone: (27) 997102937', 0, 1);
$pdf->Output('D','Allex_Silva_CV.pdf'); //gera o PDF para download

?>