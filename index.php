<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Carro.php';
require_once 'Moto.php';
require_once 'Locacao.php';

$carro1 = new Carro('Onix', 'ABC-1234', 120.00, 6, 4);
$carro2 = new Carro('HB20', 'XYZ-9876', 140.00, 4, 4);
$carro3 = new Carro('Civic', 'QWE-4567', 200.00, 7, 4);

$moto1 = new Moto('Honda CG', 'MOT-1111', 80.00, 8, 160);
$moto2 = new Moto('Yamaha Fazer', 'MOT-2222', 90.00, 5, 250);
$moto3 = new Moto('BMW GS', 'MOT-3333', 150.00, 10, 750);

$locacao = new Locacao();
$locacao->addVeiculo($carro1);
$locacao->addVeiculo($carro2);
$locacao->addVeiculo($carro3);
$locacao->addVeiculo($moto1);
$locacao->addVeiculo($moto2);
$locacao->addVeiculo($moto3);

$veiculosAlugados = $locacao->getVeiculos();
$valorTotalBase = $locacao->getTotalLocacaoBase();
$valorTotalFinal = $locacao->getTotalLocacaoFinal();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de Locação de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .resumo-locacao h5 { font-size: 1.2rem; font-weight: 500; }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        
        <div class="text-center mb-4">
            <h1 class="display-5">Simulação de Locação de Veículos</h1>
            <p class="text-muted"></p>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Tipo</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Placa</th>
                                <th scope="col" class="text-end">Diária (R$)</th>
                                <th scope="col" class="text-center">Dias</th>
                                <th scope="col">Info Extra</th>
                                <th scope="col" class="text-end">Valor Base (R$)</th>
                                <th scope="col" class="text-end">Valor Final (R$)</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach ($veiculosAlugados as $veiculo): ?>
                                <tr>
                                    <td><?= $veiculo->getTipo(); ?></td>
                                    <td><?= $veiculo->getModelo(); ?></td>
                                    <td><?= $veiculo->getPlaca(); ?></td>
                                    <td class="text-end"><?= number_format($veiculo->getValorDiaria(), 2, ',', '.'); ?></td>
                                    <td class="text-center"><?= $veiculo->getDiasAluguel(); ?></td>
                                    <td><?= $veiculo->getInfoExtra(); ?></td>
                                    <td class="text-end"><?= number_format($veiculo->getTotalDiariaBase(), 2, ',', '.'); ?></td>
                                    <td class="text-end"><?= number_format($veiculo->getTotalDiariaFinal(), 2, ',', '.'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mt-4 shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Resumo da Locação</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">Valor Total sem Desconto/Acréscimo:</h5>
                    <h5 class="card-title">R$ <?= number_format($valorTotalBase, 2, ',', '.'); ?></h5>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">Valor Total com Desconto/Acréscimo:</h5>
                    <h5 class="card-title">R$ <?= number_format($valorTotalFinal, 2, ',', '.'); ?></h5>
                </div>
            </div>
        </div>
        
        <footer class="text-center text-muted mt-5 mb-3">
            <p>Gerado em: <?= date('d/m/Y H:i:s'); ?></p>
        </footer>
    </div>
</body>
</html>