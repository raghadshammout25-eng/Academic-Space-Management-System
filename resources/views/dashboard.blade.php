<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>لوحة التحكم</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2>مرحبًا {{ Auth::user()->name }} 👋</h2>
      <p class="subtitle">أنت الآن في لوحة التحكم الخاصة بنظام المواعيد الطبية.</p>

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">تسجيل الخروج</button>
      </form>
    </div>
  </div>
</body>
</html>
