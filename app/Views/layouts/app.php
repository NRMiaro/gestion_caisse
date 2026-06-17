<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'SuperPOS' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6fb;
            margin:0;
        }

        .sidebar{
            width:260px;
            position:fixed;
            top:0;
            left:0;
            bottom:0;
            background:#fff;
            border-right:1px solid #dee2e6;
            overflow-y:auto;
            display:flex;
            flex-direction:column;
            z-index:1000;
        }

        .content{
            margin-left:260px;
            min-height:100vh;
            padding:25px;
        }

        .sidebar .nav-link{
            color:#495057;
            border-radius:10px;
            padding:12px 15px;
            transition:.2s;
        }

        .sidebar .nav-link:hover{
            background:#f1f5f9;
        }

        .sidebar .nav-link.active{
            background:#0d6efd;
            color:white;
        }

        .card-pos{
            border:none;
            border-radius:16px;
            box-shadow:0 2px 8px rgba(0,0,0,.05);
        }

    </style>

    <?= $this->renderSection('styles') ?>

</head>
<body>

    <?= $this->include('partials/sidebar') ?>

    <main class="content">

        <?= $this->renderSection('content') ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?= $this->renderSection('scripts') ?>

</body>
</html>