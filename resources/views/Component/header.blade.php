<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('homepage') }}" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Ondakino</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('homepage') }}" class="nav-item nav-link active">Home</a>
            <a href="javascript:void(0)" class="nav-item nav-link">About</a>
            <a href="javascript:void(0)" class="nav-item nav-link">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                <div class="dropdown-menu m-0">
                    <a href="javascript:void(0)" class="dropdown-item">Food</a>
                    <a href="javascript:void(0)" class="dropdown-item">Drink</a>
                    <a href="javascript:void(0)" class="dropdown-item">Others</a>
                </div>
            </div>
            <a href="{{ route('feedback') }}" class="nav-item nav-link">Feedback</a>
        </div>
        <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
    </div>
</nav>
