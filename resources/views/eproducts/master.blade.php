@extends('eproducts.base')

@section('main')
<body>
<div class="jumbotron">
  <div class="container text-center">
  <img src="{{asset('cyberpunk-jumbotron.png')}}" class="img-fluid" alt="Responsive image" id="heroPic">
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">  
  <div class="row">
  @foreach($eproducts as $eproduct)  
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">{{$eproduct->ename}}</div>
        <div class="panel-body"><img src="https://gamespot1.cbsistatic.com/uploads/scale_landscape/1578/15787979/3682227-ps5-console-2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer "><button type="button" class="btn btn-primary ">Buy Now</button></div>
      </div>
    </div>
    @endforeach
  </div>
</div>


<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
@endsection
