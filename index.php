<?php
header("Refresh:30");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $manutencao = [
        'Defeito de Casa de Maq', 'Manut Preventiva', 'Manut Mec Máquina',
        'Manut Elet Máquina', 'Instalação de Maq', 'Falta de Água '
    ];
    $pcp = ['Falta de Insumo', 'Falta de Venda', 'decisão do PCP', 'Almoxarifado'];
    $processo = ['Regulagem de Maq', 'Setup', 'Teste e Amostra', 'Regulagem de Robô'];
    $producao = ['Falta de Operador', 'Limpeza de Maq', 'Organização e 5s'];
    $farramentaria = ['Manut Mec Molde', 'Manut Ele Molde', 'Ajuste de Saida de Gás'];
    $qualidade = ['Decisão do CQ'];
    $materiaPrima = ['Falta de Material', 'Defeito de Material'];
    $paradas = [$pcp, $processo, $materiaPrima, $farramentaria, $qualidade, $manutencao, $producao];
    $maquinas = [
        ['51',   $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['104',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '403T', '2000', $status = rand(1000, 2200)],
        ['105',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['106',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['107',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['108',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['202',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['203',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['204',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['205',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['206',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['207',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['208',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['209',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['210',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['211',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['212',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['213',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['214',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['230',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['252',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['253',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['260',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['302',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['303',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['452',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['451',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['531',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['604',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '1481', '2000', $status = rand(1000, 2200)],
        ['701',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['802',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['803',  $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['1000', $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)],
        ['1080', $status = rand(90, 106), $status = rand(0, 10), $paradas[rand(0, 6)], '182P', '2000', $status = rand(1000, 2200)]

    ];
    ?>
    <div class="container">
        <?php
        foreach ($maquinas as list($value1, $value2, $value3, $value4, $value5, $value6, $value7)) {

            $paradaDaMaquina  = $value4[rand(0, count($value4) - 1)];

            $valor = $value3;
            $bg = '';
            $oeeMaquina = $value2;
            $fimDeProducao = $value6 - 100;

            if ($valor <= 9) {
                $paradaDaMaquina = '';
                if ($oeeMaquina < 95) {
                    if ($value7  >= $value6 - 100) {
                        $bg = 'fim-de-producao-fora-de-ciclo';
                    } else {
                        $bg = 'fora-de-ciclo';
                    }
                } else if ($oeeMaquina > 105) {
                    if ($value7  >= $value6 - 100) {
                        $bg = 'fim-de-producao-abaixo-de-ciclo';
                    } else {
                        $bg = 'abaixo-do-ciclo';
                    }
                } else {
                    if ($value7  >= $value6 - 100) {
                        $bg = 'fim-de-producao';
                    } else {
                        $bg = 'rodando';
                    }
                }
            } else {
                if ($paradaDaMaquina == '') {
                    $paradaDaMaquina = 'Motivo inderterminado';
                }
                if ($paradaDaMaquina == 'Setup') {
                    $bg = 'setup';
                } else if ($value4 == $processo) {
                    if ($paradaDaMaquina == 'Teste e Amostra') {
                        $bg = 'teste';
                    } else {
                        $bg = 'regulagem';
                    }
                } else if ($value4 == $farramentaria) {
                    $bg = 'ferramentaria';
                } else if ($value4 == $producao) {
                    $bg = 'producao';
                } else if ($value4 == $pcp) {
                    $bg = 'pcp';
                } else if ($value4 == $qualidade) {
                    $bg = 'cq';
                } else if ($value4 == $materiaPrima) {
                    $bg = 'materia';
                } else {
                    $bg = 'manutencao';
                }
            }
        ?>
            <div class="conteiner-maquina <?php echo $bg ?>">
                <div class="container-nome">
                    <h2 class="nome"><?php echo $value1; ?></h2>
                    <ul class="info">
                        <li class="oee">Oee : <?php echo $value2; ?>%</li>
                        <li class="prog">Prog : <?php echo $value6; ?></li>
                        <li class="prod">Prod : <?php echo $value7; ?></li>
                    </ul>
                    <div>
                        <h4>1h:24mn</h4>

                    </div>

                </div>
                <div class="motivo-parada">
                    <h3 class="molde"><?php echo $value5; ?></h3>
                    <h3 class="motivo-da-parada"><?php echo $paradaDaMaquina ?></h3>
                </div>

            </div>
        <?php } ?>

    </div>
    <script src="index.js"></script>
</body>

</html>