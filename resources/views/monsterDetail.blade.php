<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('/css/monsterDetail.css') }}" rel="stylesheet">
</head>
<body>
<div class=e107_450>
  <div class="e107_515"></div>
  <div class="e107_516"></div><span  class="e107_517">Name</span><span  class="e107_518">Content</span>

  <div class=e135_622>
    <a href="{{ url('/monster') }}" class="e135_623">Monster</a>
    <a href="{{ url('/weapon') }}" class="e135_624">Weapon</a>
    <a href="{{ url('/armor') }}" class="e135_625">Armor </a>
</div>
  <div class=e135_626>
    <div class="e135_627"></div>
    <div class=e135_628>
      <a href="{{ url('/login') }}" class="e135_629">Login</a>
      <a href="{{ url('/register') }}" class="e135_630">Register</a>
    </div>
    <div class=e135_631>
      <a href="{{ url('/home') }}" class="e138_791">Home</a>
      <a href="{{ url('/monster') }}" class="e135_632">Directory</a>
      <a href="{{ url('/posts') }}" class="e135_633">Posts</a>
      <a href="{{ url('/profile') }}" class="e135_634">Profile</a>
  </div>
    <a href="{{ url('/home') }}" class="e135_635"></a>
  </div>
</div>
</body>
</html>