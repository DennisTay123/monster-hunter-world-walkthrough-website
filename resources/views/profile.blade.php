<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('/css/profile.css') }}" rel="stylesheet">
</head>
<div class=e122_527>
  <div class="e122_569"></div><span  class="e126_39">UserName</span><span  class="e126_42">Email</span><span  class="e126_44">Email</span><span  class="e126_43">Email</span>
  <div class="e126_40"></div>
  <div class="e126_41"></div>
  <div class="e126_45"></div><span  class="e126_46">User Profile</span>
  <div class=e135_646>
    <div class="e135_647"></div>    
    <div class=e135_648>
    <a href="{{ url('/login') }}" class="e135_649">Login</a>
    <a href="{{ url('/register') }}" class="e135_650">Register</a>
    </div>
    <div class=e135_651>
      <a href="{{ url('/home') }}" class="e138_794">Home</a>
      <a href="{{ url('/monster') }}" class="e135_652">Directory</a>
    <a href="{{ url('/posts') }}" class="e135_653">Posts</a>
    <a href="{{ url('/profile') }}" class="e135_654">Profile</a>
  </div>
  <a href="{{ url('/home') }}" class="e135_655"></a>
  </div>
</div>
</body>
</html>