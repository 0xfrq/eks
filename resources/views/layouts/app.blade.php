<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Dashboard')</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f2f5;
      color: #14171a;
      display: flex;
      min-height: 100vh;
    }

    nav.sidebar {
      width: 250px;
      background-color: #ffffff;
      border-right: 1px solid #e6ecf0;
      padding: 20px;
      position: fixed;
      height: 100%;
    }

    nav.sidebar h2 {
      font-size: 24px;
      margin-bottom: 30px;
      color: #1da1f2;
    }

    nav.sidebar ul {
      list-style-type: none;
    }

    nav.sidebar ul li {
      margin-bottom: 20px;
    }

    nav.sidebar ul li a {
      text-decoration: none;
      color: #14171a;
      font-size: 18px;
      padding: 10px 15px;
      display: block;
      border-radius: 25px;
      transition: background 0.2s;
    }

    nav.sidebar ul li a:hover {
      background-color: #e8f5fd;
      color: #1da1f2;
    }

    .main {
      margin-left: 250px;
      padding: 20px 40px;
      flex: 1;
    }

    h1 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 22px;
      margin-top: 30px;
      margin-bottom: 10px;
      color: #1da1f2;
    }

    ul.section-links {
      list-style-type: none;
      padding-left: 0;
    }

    ul.section-links li {
      margin-bottom: 8px;
    }

    ul.section-links li a {
      color: #1da1f2;
      text-decoration: none;
    }

    ul.section-links li a:hover {
      text-decoration: underline;
    }

    footer {
      margin-top: 50px;
      font-size: 14px;
      color: #657786;
    }

    nav.bottom-nav {
      display: none;
    }

    @media (max-width: 768px) {
      nav.sidebar {
        display: none;
      }

      .main {
        margin-left: 0;
        padding: 20px;
        padding-bottom: 70px;
      }

      nav.bottom-nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #fff;
        border-top: 1px solid #ccc;
        padding: 10px 0;
        z-index: 1000;
      }

      nav.bottom-nav a {
        text-decoration: none;
        color: #14171a;
        font-size: 16px;
        text-align: center;
        flex-grow: 1;
      }

      nav.bottom-nav a:hover {
        color: #1da1f2;
      }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <nav class="sidebar">
    <h2>YourApp</h2>
    <ul>
      <li><a href="{{ route('dashboard') }}">Home</a></li>
      <li><a href="{{ route('posts.index') }}">Posts</a></li>
      <li><a href="{{ route('posts.create') }}">Create Post</a></li>
      <li><a href="/settings">Settings</a></li>
      <li><a href="/logout">Logout</a></li>
    </ul>
  </nav>

  <!-- Bottom nav (mobile) -->
  <nav class="bottom-nav">
    <a href="{{ route('dashboard') }}">Home</a>
    <a href="{{ route('posts.index') }}">Posts</a>
    <a href="{{ route('posts.create') }}">+</a>
    <a href="/settings">Settings</a>
  </nav>

  <!-- Main content -->
  <div class="main">
    @yield('content')
    <footer>
      <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
  </div>
</body>
</html>
