<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.css">
</head>
<body class="bg-secondary-subtle d-flex align-items-center justify-content-center vh-100">
    <div class="card border-0 shadow-sm rounded-4 p-4 p-sm-5" style="max-width: 450px; width: 100%;">
        
        <h3 class="text-center fw-bold mb-4 text-dark">Acessar Conta</h3>
        
        <form>
            <div class="mb-3">
                <input type="email" class="form-control form-control-lg fs-6 text-muted border-1" placeholder="Seu e-mail" required>
            </div>

            <div class="input-group mb-3">
                <!-- Identificador único adicionado ao input -->
                <input type="password" id="passwordInput" class="form-control form-control-lg fs-6 text-muted border-end-0 border-1" placeholder="Sua senha" required>
                <!-- Identificador único adicionado ao span (área de clique) -->
                <span id="togglePassword" class="input-group-text bg-white border-start-0 border-1 text-muted" style="cursor: pointer;">
                    <i class="bi bi-eye"></i>
                </span>
            </div>
            
            <button type="submit" class="btn btn-success w-100 py-2 mt-2 fw-bold" style="background-color: #2a874b; border-color: #2a874b;">
                Entrar
            </button>
        </form>
        
        <div class="text-center mt-4">
            <a href="#" class="text-secondary text-decoration-none small">Esqueceu a senha?</a>
        </div>
        
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script Refatorado -->
    <script>
        const passwordInput = document.getElementById('passwordInput');
        const toggleWrapper = document.getElementById('togglePassword');
        const toggleIcon = toggleWrapper.querySelector('i');

        toggleWrapper.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            
            // Alterna o tipo do input
            passwordInput.type = isPassword ? 'text' : 'password';
            
            // Alterna as classes do ícone de forma limpa
            toggleIcon.classList.remove(isPassword ? 'bi-eye' : 'bi-eye-slash');
            toggleIcon.classList.add(isPassword ? 'bi-eye-slash' : 'bi-eye');
        });
    </script>
</body>
</html>