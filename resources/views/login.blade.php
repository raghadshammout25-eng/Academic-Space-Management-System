<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>نظام المواعيد الطبية الذكي</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>نظام المواعيد الطبية الذكي</h1>
    <div class="login-box">
      <h2>تسجيل الدخول</h2>
     
<p class="subtitle">رعاية أسرع ،حياة أفضل
  <form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <input type="email" name="email" placeholder="البريد الإلكتروني" required><br>
    <input type="password" name="password" placeholder="كلمة المرور" required><br>
    <button type="submit">دخول</button>
    <p class="forgot-password"><a href="#">نسيت كلمة المرور؟</a></p>
  </form>
  
    </div>
  </div>
</body>
</html>