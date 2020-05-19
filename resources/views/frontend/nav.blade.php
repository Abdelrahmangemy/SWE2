<header>
      <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #0c5460">
  <a class="navbar-brand" href="#"><img src="{{url('images/logo3.png')}}" width="200px" style="background-color: white"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('shop')}}">Shop</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php $cats = DB::table('categories')->get(); ?>
          @foreach($cats as $cat)
                    <a class="dropdown-item" href="{{url('category',$cat->id)}}">{{ucwords($cat->name)}}</a>
          @endforeach
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{url('/contact')}}">Contact Us</a>
      </li>
      <li class="nav-item">
                <a href="{{url('WishList')}}" class="nav-link">
                    <i class="fa fa-star"></i> Wishlist
                    <span style="color: green;font-weight: bold;">{{(App\Wishlist_model::count())}}</span>
                </a>
            </li>
            <?php if(Auth::check()){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01" >
                        <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
                        <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                        <a class="dropdown-item" href="{{url('/')}}/profile">Profile</a>
                    </div>
                </li>
            <?php }else{ ?>
            <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
            <?php }?>

            <li class="nav-item" style="list-style-type: none;">
                <a href="{{url('/cart')}}" class="nav-link">&nbsp;Cart&nbsp;({{Cart::count()}} items)&nbsp;({{Cart::total()}} $)</a>
            </li>
    </ul>
  </div>
</nav>
    </header>