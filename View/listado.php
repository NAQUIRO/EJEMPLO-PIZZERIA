<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ofertas - Pizzería Peachepe</title>
    <link rel="stylesheet" href="../View/css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Pizzería Peachepe</h1>
        </div>
    </header>

    <main class="container">
        <div class="nav-container">
            <h2>Gestión de Ofertas</h2>
            <a href="../Controller/nuevaOferta.php" class="btn">Nueva Oferta</a>
        </div>

        <div class="ofertas-grid">
            <?php
            foreach ($data['ofertas'] as $oferta) {
                ?>
                <div class="oferta-card">
                    <img src="../View/images/<?=$oferta->getImagen()?>" alt="<?= $oferta->getTitulo(); ?>" class="oferta-imagen">
                    <div class="oferta-contenido">
                        <h3 class="oferta-titulo"><?= $oferta->getTitulo(); ?></h3>
                        <p class="oferta-descripcion"><?= $oferta->getDescripcion()?></p>
                        <div class="oferta-acciones">
                            <a href="../Controller/borrarOferta.php?id=<?= $oferta->getId() ?>" class="btn btn-danger">Borrar Oferta</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') ?> Pizzería Peachepe</p>
        </div>
    </footer>
</body>
</html>