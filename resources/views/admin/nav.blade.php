<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/admin')}}">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('product.create')}}">
                  <span data-feather="file"></span>
                  Add Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('product.index')}}">
                  <span data-feather="shopping-cart"></span>
                  List Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('category.index')}}">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('users.create')}}">
                  <span data-feather="shopping-cart"></span>
                  Add Users
                </a>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                  <span data-feather="shopping-cart"></span>
                  List Users
                </a>
              </li>
              
            </ul>
          </div>
        </nav>