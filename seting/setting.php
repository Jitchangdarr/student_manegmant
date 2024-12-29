<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dark/Light Mode</title>
    <style>
        :root {
            --bg-color: #ffffff;
            --text-color: #000000;
            --primary-color: #0066cc;
            --secondary-color: #f5f5f5;
            --border-color: #dddddd;
        }

        [data-theme="dark"] {
            --bg-color: #181818;
            --text-color: #eaeaea;
            --primary-color: #1e88e5;
            --secondary-color: #242424;
            --border-color: #444444;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar {
            background-color: var(--primary-color);
            color: var(--text-color);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: var(--text-color);
            text-decoration: none;
            margin-right: 15px;
        }

        .theme-switch {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .theme-switch input {
            display: none;
        }

        .slider {
            position: relative;
            width: 50px;
            height: 24px;
            background-color: var(--secondary-color);
            border-radius: 24px;
            transition: background-color 0.3s;
        }

        .slider::before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--text-color);
            border-radius: 50%;
            top: 2px;
            left: 2px;
            transition: transform 0.3s, background-color 0.3s;
        }

        input:checked+.slider {
            background-color: var(--primary-color);
        }

        input:checked+.slider::before {
            transform: translateX(26px);
        }

        main {
            padding: 20px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1rem;
            line-height: 1.5;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            background-color: var(--secondary-color);
            border-top: 1px solid var(--border-color);
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="theme-switch">
            <input type="checkbox" id="theme-toggle">
            <label class="slider" for="theme-toggle"></label>
        </div>
    </nav>

    <main>
        <h1>Welcome to Professional Dark/Light Mode</h1>
        <p>Experience a smooth transition between light and dark themes with a professional design.</p>
    </main>

    <footer>
        <p>&copy; 2024 Professional Mode Example. All rights reserved.</p>
    </footer>

    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const currentTheme = localStorage.getItem('theme') || 'light';

        document.documentElement.setAttribute('data-theme', currentTheme);
        themeToggle.checked = currentTheme === 'dark';

        themeToggle.addEventListener('change', () => {
            const theme = themeToggle.checked ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
        });
    </script>
</body>

</html>