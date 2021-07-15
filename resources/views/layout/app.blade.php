<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    {{-- Datatables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        div.dataTables_wrapper {
            width: 100%;
            margin: 0 auto;
        }

        nav ul li:hover {
            background-color: #eceff1;
        }

        nav ul li.active {
            background-color: #37474f;
        }

    </style>
    <title>{{ $judul }} || Tahura Nuraksa</title>
</head>

<body>
    <ul id="slide-out" class="sidenav blue-grey darken-4">
        <li class="@if ($judul=='Flora' ) active @endif"><a
                class="teal-text text-lighten-2" style="text-decoration: none; color" href="/flora"><i
                    class="material-icons left teal-text text-lighten-2">park</i>Flora</a></li>
        <li class="@if ($judul=='Dashboard' ) active @endif"><a
                class="teal-text text-lighten-2" style="text-decoration: none;" href="/"><i
                    class="material-icons left teal-text text-lighten-2">dashboard</i>Dashboard</a></li>
        <li class="@if ($judul=='Fauna' ) active @endif"><a
                class="teal-text text-lighten-2" style="text-decoration: none;" href="/fauna"><i
                    class="material-icons left teal-text text-lighten-2">pets</i>Fauna</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav class="blue-grey darken-4">
            <div class="nav-wrapper">
                <a style="text-decoration: none;" href="/" class="brand-logo center teal-text text-lighten-2"><i
                        class="material-icons">cloud</i>Logo</a>
                <ul class="left hide-on-med-and-down">
                    <li class="@if ($judul=='Flora' ) active @endif"><a
                            class="teal-text text-lighten-2" style="text-decoration: none; color" href="/flora"><i
                                class="material-icons left teal-text text-lighten-2">park</i>Flora</a></li>
                    <li class="@if ($judul=='Dashboard' ) active @endif"><a class="teal-text text-lighten-2" style="text-decoration: none;" href="/"><i
                                class="material-icons left teal-text text-lighten-2">dashboard</i>Dashboard</a></li>
                    <li class="@if ($judul=='Fauna' ) active @endif"><a
                            class="teal-text text-lighten-2" style="text-decoration: none;" href="/fauna"><i
                                class="material-icons left teal-text text-lighten-2">pets</i>Fauna</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a class="teal-text text-lighten-2" style="text-decoration: none;" href="#"><i
                                class="material-icons right">account_circle</i>Login</a></li>
                </ul>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="page-footer blue-grey darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Tahura Nuraksa</h5>
                    <p class="grey-text text-lighten-4">TAMAN HUTAN RAYA NURAKSA KABUPATEN LOMBOK BARAT DAN KABUPATEN
                        LOMBOK TENGAH PROVINSI NUSA TENGGARA BARAT</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">More About Us</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © Tahura Nuraksa 2021
            </div>
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    {{-- Datatables --}}
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#example').DataTable({
                "scrollX": true
            });
        });
    </script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            var table = $('#example1').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                "searching": false,
                "paging": false,
                "paging": false,
                "info": false
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems, 0);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, true);
        });
    </script>
    <script>
        document.getElementById('b4').onclick = function() {
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes, delete it!',
                    closeOnConfirm: false,
                    //closeOnCancel: false
                },
                function() {
                    swal("Deleted!", "Your imaginary file has been deleted!", "success");
                });
        };
    </script>
</body>

</html>
