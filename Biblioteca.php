<!-- Estilização css -->
<audio src="./Audio/late nights.mp3" autoplay volume></audio> 
<Style>
body {
    background-image: url('https://images2.alphacoders.com/683/683906.jpg');
    text-align: center;
    color: black;
    margin-top: 20%;
    margin-bottom:15%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 25px;
}

</style>
<p>
<!-- Php -->

<?php
$h1=$_GET["h1"];
$h2=$_GET["h2"];
$h3=$_GET["h3"];
$op=$_GET["op"];

$mes = 'deste mês';

switch ($op) {
    case 'Professor':
        $devo = $h3 + 10;
        if ($devo>31) {
            $devo = $devo - 31;
            $mes = 'do proximo mês';    
        }
        Echo"O livro emprestado foi ".$h1." pelo professor(a) ".$h2." e tem que ser devolvido no dia ".$devo." ".$mes;
        break;
    
    case 'Aluno':
        $devo = $h3 + 3;
        if ($devo>31) {
            $devo = $devo - 31;
            $mes = 'do proximo mês';
        }
        Echo"O livro emprestado foi ".$h1." pelo aluno(a) ".$h2." e tem que ser devolvido no dia ".$devo." ".$mes;
        break;
            
    default:
        Echo"Selecione o tipo de leitor";
        break;
}
?>
<br><br><br><br><br>
</p><a href="Biblioteca.html" Title="Voltar a pagina anterior">Voltar<a>