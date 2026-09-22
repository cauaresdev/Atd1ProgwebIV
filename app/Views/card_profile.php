<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil - Conta de Teste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary-subtle min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden" style="width: 320px;">
        <div class="bg-warning text-center py-2">
            <span class="fw-bold text-dark small">Conta de Teste</span>
        </div>
        
        <div class="card-body text-center p-4 bg-white">
            <div class="mb-3">
                <img src="<?= base_url('Profile_icon.png') ?>" alt="Icone dev" class="rounded-circle border border-2 border-white shadow-sm" width="100" height="100" style="object-fit: cover;">
            </div>
            
            <h4 class="fw-bold mb-1" style="color: #0b2c5c;">Ana Silva</h4>
            <p class="text-muted small mb-3">Desenvolvedora Web</p>
            
            <p class="text-dark small mb-4 px-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            
            <div class="d-flex justify-content-center gap-2">
                <button type="button" class="btn btn-primary rounded-pill px-4 py-2 small fw-medium">
                    Mensagem
                </button>
                <button type="button" class="btn btn-success rounded-pill px-4 py-2 small fw-medium" style="background-color: #359752; border-color: #359752;">
                    Conectar
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>