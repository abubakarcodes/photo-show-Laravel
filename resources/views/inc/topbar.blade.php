<div class="top-bar">
  <div class="row">
    @if (Route::has('login'))
      <div class="top-bar-left">
         <ul class="menu">
           <li class="menu-text">Photoshow</li>
            @if (Auth::check())
           <li><a href="/">Home</a></li>
           <li><a href="/albums/create">Create Albums</a></li>
              
         </ul>
          @else
                      <div class="top-bar-right">
                        <ul class="menu">
                          <li><a href="{{ url('/login') }}">Login</a></li>
                          <li><a href="{{ url('/register') }}">Register</a></li>
                        </ul>
                      </div>
                       
                    @endif
                
            @endif
        </div>
  </div>
       
      </div>