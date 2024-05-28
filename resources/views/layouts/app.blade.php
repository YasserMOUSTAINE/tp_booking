<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle with Popper.js (for Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

    <div>
        <nav>
            <div class="navbar">
              
                
                <ul class="links">
                  <li><a href="#"><b class="color">Home</b></a></li>
                  <li>
                    <a href="{{ route('hotels.index') }}"><b class="color">Hotel</b></a>
                    
                  </li>
                  <li>
                    <a href="{{ route('reservations.index') }}"><b class="color"> Reservations</b></a>
                  </li>
                  <li>
                  <a href="{{ route('internautes.index') }}"><b class="color"> Internautes</b></a>
                  </li>            
              </div>
        
              
        
            </div>
          </nav>
            <main>
                @yield('main')
            </main>
    </div>
    
</body>
</html>