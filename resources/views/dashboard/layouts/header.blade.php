<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid mt-2">
    <nav aria-label="breadcrumb">
      <h5 class="font-weight-bolder text-white mb-0">{{ $title }}</h5>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="{{ route('profile') }}" class="nav-link text-white font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">{{ $jwt->nama }}</span>
          </a>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </a>
        </li>
        <li class="nav-item dropdown px-2 d-flex align-items-center">
         
        </li>
        <li class="nav-item pe-2 d-flex align-items-center">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="nav-link text-white p-0" style="border: none;background: none;">
              <i class="fa-solid fa-right-from-bracket fixed-plugin-button-nav cursor-pointer"></i>
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>