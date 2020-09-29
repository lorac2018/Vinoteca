<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wiskwine</title>

        <!-- Fonts -->
        
        
    
    <link href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/album/album.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/product/product.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


              <style>
            html, body {
                background-color: #fff;
                color: #636b8f;
                font-family: 'Raleway';
                font-weight: 200;        
                height: 200px;    
                margin: 200;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .cats{
              
              padding: 10px;
              border-radius: 25px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>
   
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Wiskwine
                </div>
            </div>
             
                <div class="container">
                     <table style="width:120%">
                            
                           <th width="25%" valign="top">
                            
                                 <p align="center"> SubCategories </p>
                                   
                                       @foreach ($subcategories as $s)
                                            <a class="py-2 d-none d-md-inline-block" href="?cat={{$s->name}}"> {{ $s->name }} </a>
                                            <br>
                                       @endforeach
                                    
                                            <a class="py-2 d-none d-md-inline-block" href="/lorac/public"> Cancelling Filters </a>

                         
                            </th>
                            <?php $i=0; ?>
                            <th>@foreach ($products as $p)
          
                          <div class="col-md-4">
                                  <div class="card mb-4 box">
                                      <img class="card-img-top" src="{{ asset('img/' . $p->image) }}" width="200px" height="300px">
                                          <div class="card-body"><font face="verdana" color="black"> Name {{ $p->name }}</font>
                                              <p>  Brand {{ $p->brand }} </p>
                                                  <p class="card-text"> Price {{ $p->price }} €</p>
                                                      <p class = "card-text"> Level of Alcohol {{$p->levelofalcohol}} </p>
                
                                          </div>
                                  </div>
                          </div>
                          <?php $i++; ?>
                          @endforeach  
                          <?php if($i==0) echo"No Products Associated"; ?>
                           {{$products->links()}}
                          </th>
      
         </table>
      </div>
    </div>

  <footer class="text">
        <a href="#">Back to top</a>
      </p>
      <p>Vinoteca WiskWine &copy; Carolina Araújo</p>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>



    </body>
    </body>
</html>
