<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hyundai Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar {padding-top: 0rem;padding-bottom: 0rem;}
    </style>
    
    @yield('css')
</head>
<body>
   @include('layout.header')

   @yield('body')

   @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script>
       // Function to toggle visibility of the navbar toggler and close button
       function toggleNavbar() {
           var navbarToggler = document.querySelector('.navbar-toggler');
           var navbarCollapse = document.getElementById('navbarNav');
           var closeButton = document.querySelector('.btn-close');

           if (navbarCollapse.classList.contains('show')) {
               // If navbar is already shown, hide it and show the toggler
               navbarCollapse.classList.remove('show');
               navbarToggler.style.display = 'block';
               closeButton.style.display = 'none';
           } else {
               // If navbar is hidden, show it and hide the toggler
               navbarCollapse.classList.add('show');
               navbarToggler.style.display = 'none';
               closeButton.style.display = 'block';
           }
       }

       // Add event listener to toggle button to use the function
       document.querySelector('.navbar-toggler').addEventListener('click', toggleNavbar);
   </script>
   @yield('js')
</body>
</html>