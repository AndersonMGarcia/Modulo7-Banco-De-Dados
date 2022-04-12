<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe DateTime</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            /*
            $date = new DateTime();
            $date->setTimezone(new DateTimeZone('America/Sao_Paulo'));
            $date->add(DateInterval::createFromDateString('5 years 2 days 5 minutes'));# Add 2 dias e 5 minutos 
            $date->sub(DateInterval::createFromDateString('1 years')); # subraindo 1 ano da data atual
            echo $date->format('d/m/Y H:i:s');// formatando a hora para o formato dia/mes/ano
            */

            
            
            $date1 = new DateTime('2022-01-01');
            $date2 = new DateTime('2021-01-01');
            

            if ($date1 > $date2){
                echo $date1->format('d/m/Y')." é ";
                echo "maior que ". $date2->format('d/m/Y');
            }else{
                echo $date2->format('d/m/Y')." é ";
                echo "maior que ". $date1->format('d/m/Y');
            }

            ### Verificando a diferença de dias entre uma data e outra

            $hoje = new DateTime();
            $dataEvento = new DateTime('2022-04-13 22:00:00');
            $hoje->setTimezone(new DateTimeZone('America/Sao_Paulo'));
            $dataEvento->setTimezone(new DateTimeZone('America/Sao_Paulo'));
            
            echo "<hr>";
            echo "Data atual: ". $hoje->format('d/m/Y')."<br>";
            echo "Data do evento: ". $dataEvento->format('d/m/Y')."<br>";
            $diff = $hoje->diff($dataEvento);
            echo "Falta(m) ". $diff->format('%y ano(s), %m mês(s), %a dias e %h horas, %i minutos e %s segundos '). '  para o evento.';

        ?>
    </div>
</body>
</html>