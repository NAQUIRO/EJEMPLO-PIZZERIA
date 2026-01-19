<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Oferta - Pizzería Peachepe</title>
    <link rel="stylesheet" href="../View/css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Pizzería Peachepe</h1>
            <p>Crear nueva oferta</p>
        </div>
    </header>

    <main class="container">
        <div class="form-container">
            <h2 class="form-title">Nueva Oferta</h2>
            <form action="../Controller/grabarOferta.php" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*" required>
                </div>
                
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Crear Oferta" class="btn">
                    <a href="../Controller/index.php" class="btn btn-secondary" style="margin-left: 10px;">Cancelar</a>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') ?> Pizzería Peachepe </p>
        </div>
    </footer>
</body>
</html>