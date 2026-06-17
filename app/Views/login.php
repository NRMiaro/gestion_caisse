<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Connexion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6fb;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
        }

        .logo {
            width: 80px;
            height: 80px;
            background: #0d6efd;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: auto;
        }
    </style>
</head>

<body>

    <div class="container min-vh-100 d-flex align-items-center justify-content-center">

        <div class="card login-card p-4">

            <div class="text-center mb-4">
                <div class="logo mb-3">
                    <i class="bi bi-cart-check"></i>
                </div>

                <h2 class="fw-bold">Super-M</h2>
                <p class="text-muted">Connexion à la caisse</p>
            </div>

            <form method="POST" action="/authenticate">

                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="caissier@supermarche.mg"
                            required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            value="caissier123"
                            required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-3">
                    Se connecter
                </button>

            </form>

        </div>

    </div>

</body>

</html>