<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertido</title>
    <link rel="stylesheet" href="conv.css">
</head>
<body>
    <main>
        <section>

            <header> 
                <strong><h1>Conversor de Moedas</h1></strong>
            </header>
        </section>
        <?php 
        $cot = number_format(4.97, 2) ;
        $real = $_POST["realMoney"] ?? null;
        $doll = $real/ $cot;

         //Formatação de moedas com internacionalização.
         
         $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

         echo "Seus ".numfmt_format_currency($padrao, $real, "BRL")." equivalem a ". numfmt_format_currency($padrao, $doll, "USD");

         //Formatação "normal"
         //echo "Seus R\$ ". number_format($real, 2, ",", ".") . "equivalem a US\$ " . number_format($doll, 2, ",", "." );
         ?>
        
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>


    
</body>
</html>








         
        

        
        
        
        



        
    
