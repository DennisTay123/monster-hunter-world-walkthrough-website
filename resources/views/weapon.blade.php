<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('/css/weapon.css') }}" rel="stylesheet">
</head>
<body>
<<div class=e138_711>
  <div class=e138_712>
    <div class=e138_713>
      <div class="e138_714"></div><span  class="e138_715">Bow</span>
    </div>
    <div class=e138_716>
      <div class="e138_717"></div><span  class="e138_718">Light Bowgun</span>
    </div>
    <div class=e138_719>
      <div class="e138_720"></div><span  class="e138_721">Heavy Bowgun</span>
    </div>
  </div><span  class="e138_722">Range</span>
  <div class=e138_723>
    <div class=e138_724>
      <div class="e138_725"></div><span  class="e138_726">Charge Blade</span>
    </div>
    <div class=e138_727>
      <div class="e138_728"></div><span  class="e138_729">Switch Axe</span>
    </div>
    <div class=e138_730>
      <div class="e138_731"></div><span  class="e138_732">Insect Glaive</span>
    </div>
    <div class=e138_733>
      <div class="e138_734"></div><span  class="e138_735">Great Sword</span>
    </div>
    <div class=e138_736>
      <div class="e138_737"></div><span  class="e138_738">Long Sword</span>
    </div>
    <div class=e138_739>
      <div class="e138_740"></div><span  class="e138_741">Dual Blades</span>
    </div>
    <div class=e138_742>
      <div class="e138_743"></div><span  class="e138_744">Sword & Shield</span>
    </div>
    <div class=e138_745>
      <div class="e138_746"></div><span  class="e138_747">Hammer</span>
    </div>
    <div class=e138_748>
      <div class="e138_749"></div><span  class="e138_750">Hunting Horn</span>
    </div>
    <div class=e138_751>
      <div class="e138_752"></div><span  class="e138_753">Lance</span>
    </div>
    <div class=e138_754>
      <div class="e138_755"></div><span  class="e138_756">Gunlance</span>
    </div>
  </div><span  class="e138_757">Melee</span>
  <div class=e138_758>
    <a href="{{ url('/monster') }}" class="e138_759">Monster</a>
    <a href="{{ url('/weapon') }}" class="e138_760">Weapon</a>
    <a href="{{ url('/armor') }}" class="e138_761">Armor </a>
  </div>
  <div class=e138_762>
    <div class="e138_763"></div>    
    @if (Route::has('login'))
    <div class=e138_764>
    @auth
    @else
    <a href="{{ url('/login') }}" class="e138_765">Login</a>
    @if (Route::has('register'))
    <a href="{{ url('/register') }}" class="e138_766">Register</a>
    @endif
    @endauth 
    </div>
    @endif
    <div class=e138_767>
      <a href="{{ url('/home') }}" class="e138_768">Home</a>
      <a href="{{ url('/monster') }}" class="e138_773">Directory</a>
    <a href="{{ url('/posts') }}" class="e138_769">Posts</a>
    <a href="{{ url('/profile') }}" class="e138_770">Profile</a>
  </div>
  <a href="{{ url('/home') }}" class="e138_771"></a>
  </div>
</div>
</body>
</html>