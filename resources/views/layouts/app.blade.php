<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Menus</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg:       #f5f0e8;
            --nav-bg:   #1b4332;
            --nav-text: #a8d5b5;
            --active-bg:#2d6a4f;
            --accent:   #d4a843;
            --text:     #2c2c2c;
            --card-bg:  #ffffff;
            --footer:   #1b4332;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ── NAV ── */
        nav {
            background-color: var(--nav-bg);
            padding: 0 40px;
            display: flex;
            align-items: center;
            gap: 2px;
            border-bottom: 3px solid var(--accent);
        }

        nav .brand {
            font-family: 'Playfair Display', serif;
            color: #fff;
            font-size: 1.2rem;
            margin-right: auto;
            letter-spacing: 1px;
        }

        nav a {
            color: var(--nav-text);
            text-decoration: none;
            padding: 18px 22px;
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: color 0.2s, background 0.2s;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0; left: 50%; right: 50%;
            height: 3px;
            background: var(--accent);
            transition: left 0.25s, right 0.25s;
        }

        nav a:hover { color: #fff; }
        nav a:hover::after { left: 0; right: 0; }

        nav a.active {
            color: var(--accent);
            background-color: var(--active-bg);
            font-weight: 700;
        }
        nav a.active::after { left: 0; right: 0; }

        /* ── MAIN ── */
        main {
            flex: 1;
            padding: 50px 40px;
            max-width: 960px;
            width: 100%;
            margin: 0 auto;
        }

        main h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.4rem;
            color: var(--nav-bg);
            margin-bottom: 16px;
            border-left: 5px solid var(--accent);
            padding-left: 16px;
        }

        main p {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #555;
        }

        /* ── FOOTER ── */
        footer {
            background-color: var(--footer);
            color: var(--nav-text);
            text-align: center;
            padding: 22px 20px;
            font-size: 0.85rem;
            letter-spacing: 0.3px;
            border-top: 3px solid var(--accent);
        }

        footer strong { color: var(--accent); }
    </style>
</head>
<body>

    <nav>
        <span class="brand">✦ Menus</span>

        <a href="{{ route('home') }}"
           class="{{ request()->routeIs('home') ? 'active' : '' }}">
            Home
        </a>
        <a href="{{ route('photos') }}"
           class="{{ request()->routeIs('photos') ? 'active' : '' }}">
            Photos
        </a>
        <a href="{{ route('contact') }}"
           class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            Contact
        </a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        Desarrollado por <strong>Aaron Aviles</strong> &nbsp;·&nbsp; Materia: Desarrollo Web &nbsp;·&nbsp; {{ date('Y') }}
    </footer>

</body>
</html>