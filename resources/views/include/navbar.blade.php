<nav class="navbar ">
    <div class="container">
        <div class="collapse navbar-collapse" id="app-navbar-collapse" >
            <ul class="mainnav nav navbar-nav" style="padding-top: 16px; font-size:20px; font-weight: bold">
              
              <li ><a style=" border:solid #8DC640; border-radius: 0px 50px; padding:10px 35px 10px 35px; " href="/">شارك معنا</a></li>
              <li ><a style="color:white; border:solid #8DC640; background-color:#8DC640; border-radius: 0px 50px; padding:10px 45px 10px 45px; " href="/">تبرع</a></li>
              <li ><a href="/">EN</a></li>
              <li ><a href="/contactus">تواصل معنا</a></li>
              <li ><a href="/">حملات</a></li>
              <li><a href="/">اخبار وتقارير</a></li>
              <li ><a href="/">اصدارات</a></li>
              <li ><a href="/about">عن الحملة</a></li>

            </ul>
            <!-- Branding Image -->
            <a class="navbar-brand nb" href="{{ url('/') }}">
                {{-- {{ config('app.name', 'Donate') }} --}}
                <img src="{{ URL::to('images/logo.png') }}" >
            </a>
        </div>
        
    </div>
</nav>