<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thunder Theme Panel</title>
    <link rel="stylesheet" href="/css/theme.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg-overlay"></div>
    <nav class="navbar">
        <div class="nav-left">
            <img src="/img/logo.png" class="logo" alt="Logo">
            <span class="brand">⚡ Thunder Nodes</span>
        </div>
        <div class="nav-right">
            <a href="/" class="nav-link">Dashboard</a>
            <a href="/account" class="nav-link">Account</a>
            <a href="/auth/logout" class="nav-btn">Logout</a>
        </div>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>

    <script>
      document.addEventListener('mousemove', e => {
        document.body.style.setProperty('--x', `${e.clientX}px`);
        document.body.style.setProperty('--y', `${e.clientY}px`);
      });
    </script>
</body>
</html>
