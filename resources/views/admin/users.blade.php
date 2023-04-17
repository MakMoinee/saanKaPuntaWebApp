<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/images/logo.png" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html;
      charset=UTF-8">
    <!--<base href="./">-->
    <base href=".">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
      shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link rel="manifest" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="./Dashboard_files/simplebar.css">
    <link rel="stylesheet" href="./Dashboard_files/simplebar(1).css">

    <link href="./Dashboard_files/style.css" rel="stylesheet">

    <link rel="stylesheet" href="./Dashboard_files/prism.css">
    <link href="./Dashboard_files/examples.css" rel="stylesheet">
    <script type="text/javascript" async="" src="./Dashboard_files/js"></script>
    <script src="./Dashboard_files/667090843876081" async=""></script>
    <script src="./Dashboard_files/identity.js.download" async=""></script>
    <script type="text/javascript" async="" src="./Dashboard_files/fbevents.js.download"></script>
    <script type="text/javascript" async="" src="./Dashboard_files/analytics.js.download"></script>
    <script async="" src="./Dashboard_files/gtm.js.download"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KX4JH47');
    </script>
    <link href="./Dashboard_files/coreui-chartjs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI
          Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI
          Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right:
              0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <li class="nav-item">
                                    <a class="nav-link" href="/dashboard">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-speedometer2"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                            <path fill-rule="evenodd"
                                                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                        </svg> Dashboard
                                    </a>
                                </li>
                                <li class="nav-title">Content Management</li>
                                <li class="nav-item"><a class="nav-link"
                                        href="https://coreui.io/demos/bootstrap/4.2/free/colors.html">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-buildings-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z" />
                                        </svg> Buildings</a></li>
                                <li class="nav-item"><a class="nav-link" href="/offices">
                                        <svg class="nav-icon" fill="#000000" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16"
                                            viewBox="0 0 495.545 495.545" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M364.374,207.697V25.508H156.687v100.57H0v343.717h156.687v0.241h338.858V207.69H364.374V207.697z M103.291,455.226
            v-82.651H67.976v82.651H14.579V140.65h142.108v314.576H103.291z M480.968,455.464H296.352V308.503h-63.158v146.961h-61.937V126.078
            v-85.99h178.536v182.188h131.175V455.464z M190.144,75.303h30.369v67.539h-30.369V75.303z M248.334,75.303h30.358v67.539h-30.358
            V75.303z M304.308,75.303h30.371v67.539h-30.371V75.303z M190.144,179.022h30.369v74.828h-30.369V179.022z M248.334,179.022h30.358
            v74.828h-30.358V179.022z M304.308,179.022h30.371v74.828h-30.371V179.022z M388.721,324.421h-30.359v-69.362h30.359V324.421z
             M388.721,435.426h-30.359v-71.18h30.359V435.426z M452.478,324.421h-30.358v-69.362h30.358V324.421z M452.478,435.426h-30.358
            v-71.18h30.358V435.426z M38.569,164.88h30.359v69.357H38.569V164.88z M38.569,274.058h30.359v71.179H38.569V274.058z
             M102.329,164.88h30.358v69.357h-30.358V164.88z M102.329,274.058h30.358v71.179h-30.358V274.058z" />
                                            </g>
                                        </svg>Offices
                                    </a></li>
                                <li class="nav-title">User Management</li>
                                <li class="nav-item"><a class="nav-link active" href="/users">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="#FFFFFF" class="bi bi-people-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                        </svg> Users
                                    </a></li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 256px; height: 841px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility:
          hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display:
            none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 247px; transform: translate3d(0px, 0px, 0px);
            display: block;"></div>
            </div>
        </ul>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector(&#39;#sidebar&#39;)).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    {{-- <li class="nav-item"><a class="nav-link"
                            href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="#">Users</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="#">Settings</a></li> --}}
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="./Dashboard_files/8.png"
                                    alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg> Profile</a>
                            <a class="dropdown-item" href="/signout">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span>Users</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">
                                                <th class="text-center">
                                                    <svg class="icon" width="16px" height="16px"
                                                        viewBox="0 0 24 24" fill="#FFFFFF"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.5 6.5C1.5 3.46243 3.96243 1 7 1C10.0376 1 12.5 3.46243 12.5 6.5C12.5 9.53757 10.0376 12 7 12C3.96243 12 1.5 9.53757 1.5 6.5Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M14.4999 6.5C14.4999 8.00034 14.0593 9.39779 13.3005 10.57C14.2774 11.4585 15.5754 12 16.9999 12C20.0375 12 22.4999 9.53757 22.4999 6.5C22.4999 3.46243 20.0375 1 16.9999 1C15.5754 1 14.2774 1.54153 13.3005 2.42996C14.0593 3.60221 14.4999 4.99966 14.4999 6.5Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M0 18C0 15.7909 1.79086 14 4 14H10C12.2091 14 14 15.7909 14 18V22C14 22.5523 13.5523 23 13 23H1C0.447716 23 0 22.5523 0 22V18Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M16 18V23H23C23.5522 23 24 22.5523 24 22V18C24 15.7909 22.2091 14 20 14H14.4722C15.4222 15.0615 16 16.4633 16 18Z"
                                                            fill="#000000" />
                                                    </svg>
                                                </th>
                                                <th>Full Name</th>
                                                <th class="text-center">Email</th>
                                                <th>User Type</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $item)
                                                <tr class="align-middle">
                                                    <td class="text-center">
                                                        <div class="avatar avatar-md"><img class="avatar-img"
                                                                src="/images/user.png" alt="user@email.com"><span
                                                                class="avatar-status bg-success"></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $item['lastName'] }}, {{ $item['firstName'] }}
                                                            {{ $item['middleName'] }}</div>
                                                        {{-- <div class="small text-medium-emphasis"><span>New</span>
                                                            | Registered: Jan 1, 2020</div> --}}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $item['email'] }}
                                                    </td>
                                                    <td>
                                                        @if ($item['userType'] == 1)
                                                            Admin
                                                        @else
                                                            Student
                                                        @endif
                                                        {{-- <div class="small text-medium-emphasis"><span>New</span>
                                                            | Registered: Jan 1, 2020</div> --}}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success"
                                                            style="color: white">View/Edit</button>
                                                        <button class="btn btn-danger"
                                                            style="color: white">Delete</button>
                                                    </td>


                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>

    <script src="./Dashboard_files/coreui.bundle.min.js.download"></script>
    <script src="./Dashboard_files/simplebar.min.js.download"></script>

    <script src="./Dashboard_files/chart.min.js.download"></script>
    <script src="./Dashboard_files/coreui-chartjs.js.download"></script>
    <script src="./Dashboard_files/coreui-utils.js.download"></script>
    <script src="./Dashboard_files/main.js.download"></script>
    <script></script>

</body>
@if (session()->pull('successLogin'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Login',
                showConfirmButton: false,
                timer: 800
            });
        }, 500);
    </script>
    {{ session()->forget('successLogin') }}
@endif

</html>
