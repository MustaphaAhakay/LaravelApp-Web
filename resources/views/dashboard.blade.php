 {{-- @extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1"> 
  {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="">
  {{-- bootstrap modale --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  {{-- end bs modal --}}
             {{-- added to applique bootstrap --}}
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
             {{-- -- --}}
            
 
 <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

:root {
    --main-color: #027581;
    --color-dark: #1D2231;
    --text-grey: #8390A2;
}

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style-type: none;
    box-sizing: border-box;
}

#sidebar-toggle {
    display: none;
}

.sidebar {
    height: 100%;
    width: 240px;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 100;
    background: var(--main-color);
    color: #fff;
    overflow-y: auto;
    transition: width 500ms;
}

.sidebar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    padding: 0rem 1rem;
}

.sidebar-menu {
    padding: 1rem;
}

.sidebar li {
    margin-bottom: 1.5rem;
}

.sidebar a {
    color: #fff;
    font-size: .8rem;
}

.sidebar a span:last-child {
    padding-left: .6rem;
}

#sidebar-toggle:checked ~ .sidebar {
    width: 60px;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-header h3 span,
#sidebar-toggle:checked ~ .sidebar li span:last-child {
    display: none;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-header,
#sidebar-toggle:checked ~ .sidebar li {
    display: flex;
    justify-content: center;
}

#sidebar-toggle:checked ~ .main-content {
    margin-left: 60px;
}

#sidebar-toggle:checked ~ .main-content header {
    left: 60px;
    width: calc(100% - 60px);
}

.main-content {
    position: relative;
    margin-left: 240px;
    transition: margin-left 500ms;
}

header {
    position: fixed;
    left: 240px;
    top: 0;
    z-index: 100;
    width: calc(100% - 240px);
    background: #fff;
    height: 60px;
    padding: 0rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #ccc;
    transition: left 500ms;
}

.search-wrapper {
    display: flex;
    align-items: center;
}

.search-wrapper input {
    border: 0;
    outline: 0;
    padding: 1rem;
    height: 38px;
}

.social-icons {
    display: flex;
    align-items: center;
}

.social-icons span,
.social-icons div {
    margin-left: 1.2rem;
}

.social-icons div {
    height: 38px;
    width: 38px;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(img/1.jpg);
    border-radius: 50%;
}

main {
    margin-top: 60px;
    background: #f1f5f9;
    min-height: 90vh;
    padding: 1rem 3rem;
}

.dash-title {
    color: var(--color-dark);
    margin-bottom: 1rem;
}

.dash-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: 3rem;
}

.card-single {
    background: #fff;
    border-radius: 7px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
}

.card-body {
    padding: 1.3rem 1rem;
    display: flex;
    align-items: center;
}

.card-body span {
    font-size: 1.5rem;
    color: #777;
    padding-right: 1.4rem;
}

.card-body h5 {
    color: var(--text-grey);
    font-size: 1rem;
}

.card-body h4 {
    color: var(--color-dark);
    font-size: 1.1rem;
    margin-top: .2rem;
}

.card-footer {
    padding: .2rem 1rem;
    background: #f9fafc;
}

.card-footer a {
    color: var(--main-color);
}

.recent {
    margin-top: 3rem;
    margin-bottom: 3rem;
}

.activity-grid {
    display: grid;
    grid-template-columns: 75% 25%;
    grid-column-gap: 1.5rem;
}

.activity-card,
.summary-card,
.bday-card {
    background: #fff;
    border-radius: 7px;
}

.activity-card h3 {
    color: var(--text-grey);
    margin: 1rem;
}

.activity-card table {
    width: 100%;
    border-collapse: collapse;
}

.activity-card thead {
    background: #efefef;
    text-align: left;
}

th, td {
    font-size: .9rem;
    padding: 1rem 1rem;
    color: var(--color-dark);
}

td {
    font-size: .8rem;
}

tbody tr:nth-child(even) {
    background: #f9fafc;
}

.badge {
    padding: .2rem 1rem;
    border-radius: 20px;
    font-weight: 700;
    font-size: .7rem;
}

.badge.success {
    background: #DEF7EC;
    color: var(--main-color);
}

.badge.warning {
    background: #F0F6B2;
    color: orange;
}

.td-team {
    display: flex;
    align-items: center;
}

.img-1,
.img-2,
.img-3 {
    height: 38px;
    width: 38px;
    border-radius: 50%;
    margin-left: -15px;
    border: 3px solid #efefef;
    background-size: cover;
    background-repeat: no-repeat;
}

.img-1 {
    background-image: url(img/1.jpg);
}

.img-2 {
    background-image: url(img/2.jpg);
}

.img-3 {
    background-image: url(img/3.jpeg);
}

.summary-card {
    margin-bottom: 1.5rem;
    padding-top: .5rem;
    padding-bottom: .5rem;
}

.summary-single {
    padding: .5rem 1rem;
    display: flex;
    align-items: center;
}

.summary-single span {
    font-size: 1.5rem;
    color: #777;
    padding-right: 1rem;
}

.summary-single h5 {
    color: var(--main-color);
    font-size: 1.1rem;
    margin-bottom: 0rem !important;
}

.summary-single small {
    font-weight: 700;
    color: var(--text-grey);
}

.bday-flex {
    display: flex;
    align-items: center;
    margin-bottom: .3rem;
}

.bday-card {
    padding: 1rem;
}

.bday-img {
    height: 60px;
    width: 60px;
    border-radius: 50%;
    border: 3px solid #efefef;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(img/3.jpeg);
    margin-right: .7rem;
}

.text-center {
    text-align: center;
}

.text-center button {
    background: var(--main-color);
    color: #fff;
    border: 1px solid var(--main-color);
    border-radius: 4px;
    padding: .4rem 1rem;
}

.table-responsive {
    overflow-x: auto;
}

@media only screen and (max-width: 1200px) {
    .sidebar {
        width: 60px;
        z-index: 150;
    }

    .sidebar .sidebar-header h3 span,
    .sidebar li span:last-child {
        display: none;
    }

    .sidebar .sidebar-header,
    .sidebar li {
        display: flex;
        justify-content: center;
    }

    .main-content {
        margin-left: 60px;
    }

    .main-content header {
        left: 60px;
        width: calc(100% - 60px);
    }
    
    #sidebar-toggle:checked ~ .sidebar {
        width: 240px;
    }

    #sidebar-toggle:checked ~ .sidebar .sidebar-header h3 span,
    #sidebar-toggle:checked ~ .sidebar li span:last-child {
        display: inline;
    }

    #sidebar-toggle:checked ~ .sidebar .sidebar-header {
        display: flex;
        justify-content: space-between;
    }
    
    #sidebar-toggle:checked ~ .sidebar li {
        display: block;
    }

    #sidebar-toggle:checked ~ .main-content {
        margin-left: 60px;
    }

    #sidebar-toggle:checked ~ .main-content header {
        left: 60px;
    }
}

@media only screen and (max-width: 860px) {
    .dash-cards {
        grid-template-columns: repeat(2,1fr);
    }
    
    .card-single {
        margin-bottom: 1rem;
    }
    
    .activity-grid {
        display: block;
    }
    
    .summary {
        margin-top: 1.5rem;
    }
}

@media only screen and (max-width: 600px) {
    .dash-cards {
        grid-template-columns: 100%;
    }
}

@media only screen and (max-width: 450px) {
    main {
        padding-left: 1rem;
        padding-right: 1rem;
    }
}


  </style>

</head>
<body>
    <input type="checkbox"  id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>easywire</span>
            </h3>
            <label for="sidebar-toggle" class="ti-menu-alt"></label for="sidebar-toggle">
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-face-smile"></span>
                        <span>Team</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-agenda"></span>
                        <span>Tasks</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/questionview/create">
                        <span class="ti-clipboard"></span>
                        <span>Ajouter Questions</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-folder"></span>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-time"></span>
                        <span>Timesheet</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-book"></span>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-settings"></span>
                        <span>Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>
            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                {{-- user name and logout --}}
                <div>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
            
                        <div>  {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                {{ __('Logout') }}
                            </a>
            
                        </div>
                    </li>
                </div>
                {{-- end user name and logout --}}
            </div>
        </header>
        <main>
            <h2 class="dash-title">Overview</h2>
            <div class="dash-cards">

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Account Balance</h5>
                            <h4>$30.0059</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-reload"></span>
                        <div>
                            <h5>Pendings</h5>
                            <h4>$19.500</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Procesed</h5>
                            <h4>$20.0059</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>

            </div>
         {{-- centenue variable  (table et  rightsidebar) --}}
            <section class="recent">
                @yield('content')
            </section>
            {{-- end contenue variable --}}

            {{-- ajax form  --}}
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
              
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
            {{-- end ajax form --}}
        </main>
    </div>
</body>
</html>