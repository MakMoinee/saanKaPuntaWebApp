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
    <link rel="stylesheet" href="/css/uploadStyle.css">
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="#d600d6"
                class="sidebar-brand-full bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="#d600d6"
                class="sidebar-brand-narrow bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
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
                                <li class="nav-item"><a class="nav-link" href="/buildings">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-buildings-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z" />
                                        </svg> Buildings</a></li>
                                <li class="nav-item"><a class="nav-link active" href="/offices">
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
                                {{-- <li class="nav-title">User Management</li>
                                <li class="nav-item"><a class="nav-link"
                                        href="/users">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="#FFFFFF" class="bi bi-people-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                        </svg> Users
                                    </a></li> --}}
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
                            <a class="dropdown-item" href="#" data-coreui-target="#profileModal"
                                data-coreui-toggle="modal">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg> Change Password</a>
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
                        <li class="breadcrumb-item active"><span>Offices</span></li>
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <button data-coreui-toggle="modal" data-coreui-target="#addOfficeModal"
                                                class="btn btn-info" style="color:white;">Add Office</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">
                                                <th class="text-center">
                                                    <svg class="icon" fill="#000000" version="1.1" id="Capa_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="16"
                                                        height="16" viewBox="0 0 495.545 495.545"
                                                        xml:space="preserve">
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
                                                    </svg>
                                                </th>
                                                <th>Office Name</th>
                                                <th class="text-center">Building</th>
                                                <th>Floor</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($offices as $item)
                                                <tr class="align-middle">
                                                    <td class="text-center">
                                                        <div class="avatar avatar-md"><img class="avatar-img"
                                                                src="/images/work.png" alt="user@email.com"><span
                                                                class="avatar-status bg-success"></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $item['officeName'] }}</div>
                                                        <div class="small text-medium-emphasis">
                                                            | Added: {{ $item['createdAt'] }}</div>
                                                    </td>
                                                    <td class="text-center">
                                                        @foreach ($buildings as $b)
                                                            @if ($b['docID'] == $item['building'])
                                                                {{ $b['buildingName'] }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        {{ $item['floor'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn btn-success" style="color:white;"
                                                            onclick="clearViewData('{{ $item['docID'] }}','{{ $item['floorMapPath'] }}');"
                                                            data-coreui-target="#viewOfficeModal{{ $item['docID'] }}"
                                                            data-coreui-toggle="modal">View</button>
                                                        <div class="modal fade "
                                                            id="viewOfficeModal{{ $item['docID'] }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="viewOfficeModalLabel{{ $item['docID'] }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="viewOfficeModalLabel{{ $item['docID'] }}">
                                                                            View Office</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <form
                                                                                action="{{ route('offices.update', ['office' => $item['docID']]) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data"
                                                                                autocomplete="off">
                                                                                @method('put')
                                                                                @csrf
                                                                                <center>
                                                                                    <div class="form-group">
                                                                                        <input class="form-control"
                                                                                            required type="text"
                                                                                            name="officeName"
                                                                                            id="officeName{{ $item['docID'] }}"
                                                                                            placeholder="Office Name"
                                                                                            value="{{ $item['officeName'] }}"
                                                                                            autofocus>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="form-group">
                                                                                        <label for="building"
                                                                                            style="float:left;font-size: 14px;margin-bottom: 10px;">Choose
                                                                                            Building:</label>
                                                                                        <select class="form-control"
                                                                                            name="building"
                                                                                            id="">
                                                                                            @foreach ($buildings as $b)
                                                                                                @if ($item['building'] == $b['docID'])
                                                                                                    <option
                                                                                                        id="{{ $b['docID'] }}"
                                                                                                        value="{{ $b['docID'] }}"
                                                                                                        selected>
                                                                                                        {{ $b['buildingName'] }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="{{ $b['docID'] }}">
                                                                                                        {{ $b['buildingName'] }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="form-group">
                                                                                        <input class="form-control"
                                                                                             type="text"
                                                                                            name="floor"
                                                                                            id="floor{{ $item['docID'] }}"
                                                                                            placeholder="Floor"
                                                                                            value="{{ $item['floor'] }}">
                                                                                    </div>
                                                                                    <div class="form-group"
                                                                                        style="margin-top: 10px;">
                                                                                        <button class="file-upload-btn"
                                                                                            type="button"
                                                                                            onclick="$('#file-upload-input3{{ $item['docID'] }}').trigger( 'click' )">Add
                                                                                            Floor Map
                                                                                            Image</button>

                                                                                        <div class="image-upload-wrap3"
                                                                                            id="image-upload-wrap3{{ $item['docID'] }}">
                                                                                            <input
                                                                                                class="file-upload-input3"
                                                                                                dataid="{{ $item['docID'] }}"
                                                                                                id="file-upload-input3{{ $item['docID'] }}"
                                                                                                name="files"
                                                                                                type='file'
                                                                                                onchange="readURL3(this,'{{ $item['docID'] }}');"
                                                                                                accept="image/*" />
                                                                                            <div class="drag-text">
                                                                                                <h3>Drag and drop a file
                                                                                                    or select add Image
                                                                                                </h3>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="file-upload-content3"
                                                                                            id="file-upload-content3{{ $item['docID'] }}">
                                                                                            <img class="file-upload-image3"
                                                                                                id="file-upload-image3{{ $item['docID'] }}"
                                                                                                src=""
                                                                                                alt="your image"
                                                                                                width="100%"
                                                                                                height="40%" />
                                                                                            <div class="image-title-wrap3"
                                                                                                id="image-title-wrap3{{ $item['docID'] }}">
                                                                                                <button type="button"
                                                                                                    onclick="removeUpload3('{{ $item['docID'] }}')"
                                                                                                    class="remove-image3"
                                                                                                    id="remove-image3{{ $item['docID'] }}">Remove
                                                                                                    <span
                                                                                                        class="image-title3"
                                                                                                        id="image-title3{{ $item['docID'] }}">Uploaded
                                                                                                        Image</span></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="form-group">
                                                                                        <label for="directions"
                                                                                            style="float:left;font-size: 14px;margin-bottom: 10px;">Directions</label>
                                                                                        <textarea class="form-control" name="directions" id="directions{{ $item['docID'] }}" cols="10"
                                                                                            rows="8">{{ $item['directions'] }}</textarea>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="form-group"
                                                                                        style="margin-top: 10px;">
                                                                                        <button
                                                                                            class="file-upload-btn4"
                                                                                            type="button"
                                                                                            onclick="$('#file-upload-input4{{ $item['docID'] }}').trigger( 'click' )">Add
                                                                                            Virtual Guide
                                                                                            Video</button>

                                                                                        <div class="image-upload-wrap4"
                                                                                            id="image-upload-wrap4{{ $item['docID'] }}">
                                                                                            <input
                                                                                                class="file-upload-input4"
                                                                                                id="file-upload-input4{{ $item['docID'] }}"
                                                                                                name="files2"
                                                                                                type='file'
                                                                                                onchange="readURL4(this,'{{ $item['docID'] }}');"
                                                                                                accept="video/*" />
                                                                                            <div class="drag-text">
                                                                                                <h3>Drag and drop a file
                                                                                                    or select video file
                                                                                                </h3>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="file-upload-content4"
                                                                                            id="file-upload-content4{{ $item['docID'] }}">
                                                                                            <img class="file-upload-image4"
                                                                                                id="file-upload-image4{{ $item['docID'] }}"
                                                                                                src="#"
                                                                                                alt="your image"
                                                                                                width="100%"
                                                                                                height="40%" />
                                                                                            <div class="image-title-wrap4"
                                                                                                id="image-title-wrap4{{ $item['docID'] }}">
                                                                                                <button type="button"
                                                                                                    onclick="removeUpload4('{{ $item['docID'] }}')"
                                                                                                    class="remove-image4"
                                                                                                    id="remove-image4{{ $item['docID'] }}">Remove
                                                                                                    <span
                                                                                                        class="image-title4"
                                                                                                        id="image-title4{{ $item['docID'] }}">Uploaded
                                                                                                        Video</span></button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <input type="hidden"
                                                                                            name="originalFloorMapPath"
                                                                                            value="{{ $item['floorMapPath'] }}">
                                                                                        <input type="hidden"
                                                                                            name="originalVideoURL"
                                                                                            value="{{ $item['videoURL'] }}">
                                                                                        <input type="hidden"
                                                                                            name="createdAt"
                                                                                            value="{{ $item['createdAt'] }}">
                                                                                        @if ($item['videoURL'] != '')
                                                                                            <br>
                                                                                            <div>
                                                                                                <a href="{{ $item['videoURL'] }}"
                                                                                                    target="_blank"
                                                                                                    class="btn btn-primary">Click
                                                                                                    Here to Preview
                                                                                                    Original
                                                                                                    Video Stored</a>
                                                                                            </div>
                                                                                        @endif
                                                                                    </div>


                                                                                </center>

                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-coreui-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary"
                                                                            style="background-color: #ff589e"
                                                                            name="btnUpdateOffice"
                                                                            value="yes">Update
                                                                            Office</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-danger" style="color:white;"
                                                            data-coreui-target="#deleteUserModal{{ $item['docID'] }}"
                                                            data-coreui-toggle="modal">Delete</button>
                                                        <div class="modal fade"
                                                            id="deleteUserModal{{ $item['docID'] }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="deleteUserModalLabel{{ $item['docID'] }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form
                                                                        action="{{ route('offices.destroy', ['office' => $item['docID']]) }}"
                                                                        method="POST">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <h5 class="modal-title"
                                                                                id="deleteUserModalLabel{{ $item['docID'] }}">
                                                                                Do
                                                                                you want to proceed deleting office ?
                                                                            </h5>
                                                                            <input type="hidden" name="floorMap"
                                                                                value="{{ $item['floorMapPath'] }}">
                                                                            <input type="hidden" name="videoURL"
                                                                                value="{{ $item['videoURL'] }}">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit"
                                                                                class="btn btn-primary"
                                                                                name="btnDeleteOffice"
                                                                                value="yes">Yes,
                                                                                Proceed</button>
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-coreui-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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
    <script src="./Dashboard_files/coreui-utils.js.download"></script>
    <script></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <div class="modal fade " id="addOfficeModal" tabindex="-1" role="dialog"
        aria-labelledby="addOfficeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addOfficeModalLabel">Add Office</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/offices" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <center>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="officeName"
                                        id="officeName" placeholder="Office Name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="building"
                                        style="float:left;font-size: 14px;margin-bottom: 10px;">Choose
                                        Building:</label>
                                    <select class="form-control" name="building" id="">
                                        @foreach ($buildings as $item)
                                            <option value="{{ $item['docID'] }}">{{ $item['buildingName'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="floor"
                                        id="floor" placeholder="Floor">
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                    <button class="file-upload-btn" type="button"
                                        onclick="$('.file-upload-input').trigger( 'click' )">Add Floor Map
                                        Image</button>

                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" name="files" type='file'
                                            onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <h3>Drag and drop a file or select add Image</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image"
                                            width="100%" height="40%" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()"
                                                class="remove-image">Remove <span class="image-title">Uploaded
                                                    Image</span></button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="directions"
                                        style="float:left;font-size: 14px;margin-bottom: 10px;">Directions</label>
                                    <textarea class="form-control" name="directions" id="" cols="10" rows="8"></textarea>
                                    {{-- <input class="form-control" required type="text" name="direction"
                                        id="direction" placeholder="Directions"> --}}
                                </div>
                                <br>
                                <div class="form-group" style="margin-top: 10px;">
                                    <button class="file-upload-btn" type="button"
                                        onclick="$('.file-upload-input2').trigger( 'click' )">Add Virtual Guide
                                        Video</button>

                                    <div class="image-upload-wrap2">
                                        <input class="file-upload-input2" name="files2" type='file'
                                            onchange="readURL2(this);" accept="video/*" />
                                        <div class="drag-text">
                                            <h3>Drag and drop a file or select video file</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content2">
                                        <img class="file-upload-image2" src="#" alt="your image"
                                            width="100%" height="40%" />
                                        <div class="image-title-wrap2">
                                            <button type="button" onclick="removeUpload2()"
                                                class="remove-image2">Remove <span class="image-title2">Uploaded
                                                    Image</span></button>
                                        </div>
                                    </div>
                                </div>
                            </center>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #ff589e"
                        name="btnSaveOffice" value="yes">Save Office</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('dashboard.update', ['dashboard' => $myDocID]) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="modal-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="oldpass">
                            <br>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <br>
                            <input type="password" class="form-control" placeholder="ConfirmPassword"
                                name="confirmPass">
                            <input type="hidden" name="originalPage" value="/offices">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btnUpdateProfile" value="yes">Yes,
                            Proceed</button>
                        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });

        function readURL2(input) {
            if (input.files && input.files[0]) {
                let max = 40 * 1024 * 1024;
                if (input.files[0].size > max) {
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Video File Exceed With File Limit: 40 MB, Please compress the video and try again',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    removeUpload2();
                } else {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.image-upload-wrap2').hide();

                        $('.file-upload-image2').attr('src', '/images/videocam.png');
                        $('.file-upload-content2').show();

                        $('.image-title2').html(input.files[0].name);
                    };

                    reader.readAsDataURL(input.files[0]);
                }


            } else {
                removeUpload2();
            }
        }

        function removeUpload2() {
            $('.file-upload-input2').replaceWith($('.file-upload-input2').clone());
            $('.file-upload-content2').hide();
            $('.image-upload-wrap2').show();
        }
        $('.image-upload-wrap2').bind('dragover', function() {
            $('.image-upload-wrap2').addClass('image-dropping');
        });
        $('.image-upload-wrap2').bind('dragleave', function() {
            $('.image-upload-wrap2').removeClass('image-dropping');
        });


        function readURL3(input, id) {
            console.log(id);
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $(`#image-upload-wrap3${id}`).hide();

                    $(`#file-upload-image3${id}`).attr('src', e.target.result);
                    $(`#file-upload-content3${id}`).show();

                    $(`#image-title3${id}`).html(input.files[0].name);
                };
                console.log("Files ===>>", input.files[0]);

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload3(id);
            }

            $(`#image-upload-wrap3${id}`).bind('dragover', function() {
                $(`#image-upload-wrap3${id}`).addClass('image-dropping');
            });
            $(`#image-upload-wrap3${id}`).bind('dragleave', function() {
                $(`#image-upload-wrap3${id}`).removeClass('image-dropping');
            });
        }

        function removeUpload3(id) {
            $(`#file-upload-input3${id}`).replaceWith($(`#file-upload-input3${id}`).clone());
            $(`#file-upload-content3${id}`).hide();
            $(`#image-upload-wrap3${id}`).show();

            // $(`#image-upload-wrap3${id}`).bind('dragover', function() {
            //     $(`#image-upload-wrap3${id}`).addClass('image-dropping');
            // });
            // $(`#image-upload-wrap3${id}`).bind('dragleave', function() {
            //     $(`#image-upload-wrap3${id}`).removeClass('image-dropping');
            // });
        }

        function readURL4(input, id) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $(`#image-upload-wrap4${id}`).hide();

                    $(`#file-upload-image4${id}`).attr('src', '/images/videocam.png');
                    $(`#file-upload-content4${id}`).show();

                    $(`#image-title4${id}`).html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload4(id);
            }

            $(`#image-upload-wrap4${id}`).bind('dragover', function() {
                $(`#image-upload-wrap4${id}`).addClass('image-dropping');
            });
            $(`#image-upload-wrap4${id}`).bind('dragleave', function() {
                $(`#image-upload-wrap4${id}`).removeClass('image-dropping');
            });
        }

        function removeUpload4(id) {
            $(`#file-upload-input4${id}`).replaceWith($(`#file-upload-input4${id}`).clone());
            $(`#file-upload-content4${id}`).hide();
            $(`#image-upload-wrap4${id}`).show();
        }

        function clearViewData(id, floorMapPath) {
            $(`#image-upload-wrap3${id}`).hide();
            $(`#image-upload-wrap4${id}`).hide();
            $(`#file-upload-content3${id}`).show();
            $(`#file-upload-content4${id}`).show();
            $(`#file-upload-image3${id}`).attr('src', floorMapPath);
            $(`#file-upload-image4${id}`).attr('src', '/images/videocam.png');


        }
    </script>


</body>

@if (session()->pull('errorOldPass'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: "Failed Update Admin Password, Old Password Doesn't Match",
                showConfirmButton: false,
                timer: 800
            });
        }, 500);
    </script>
    {{ session()->forget('errorOldPass') }}
@endif

@if (session()->pull('errorPassDontMatch'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: "Failed Update Admin Password, Password Don't Match",
                showConfirmButton: false,
                timer: 800
            });
        }, 500);
    </script>
    {{ session()->forget('errorPassDontMatch') }}
@endif

@if (session()->pull('successUpdatePass'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Updated Admin Password',
                showConfirmButton: false,
                timer: 800
            });
        }, 500);
    </script>
    {{ session()->forget('successUpdatePass') }}
@endif

@if (session()->pull('errorFileExceed'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Video File Exceed With File Limit: 40 MB, Please compress the video and try again',
                showConfirmButton: false,
                timer: 2000
            });
        }, 500);
    </script>
    {{ session()->forget('errorFileExceed') }}
@endif

@if (session()->pull('errorDeleteBuilding'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Failed to Delete Building, Please Try Again Later',
                showConfirmButton: false,
                timer: 2000
            });
        }, 500);
    </script>
    {{ session()->forget('errorDeleteBuilding') }}
@endif

@if (session()->pull('errorVideoFile'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Invalid file, Please Try Again With the following accepted video format: x-matroska, webm, mp4, 3gp, avi',
                showConfirmButton: false,
                timer: 2000
            });
        }, 500);
    </script>
    {{ session()->forget('errorVideoFile') }}
@endif
@if (session()->pull('errorInvalidFile'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Invalid file, Please Try Again With the following accepted image format: jpg, png, jpeg',
                showConfirmButton: false,
                timer: 2000
            });
        }, 500);
    </script>
    {{ session()->forget('errorInvalidFile') }}
@endif



@if (session()->pull('successDeleteBuilding'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Deleted Building',
                showConfirmButton: false,
                timer: 800
            });
        }, 500);
    </script>
    {{ session()->forget('successDeleteBuilding') }}
@endif

@if (session()->pull('successAddOffice'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Added Office',
                showConfirmButton: false,
                timer: 1200
            });
        }, 500);
    </script>
    {{ session()->forget('successAddOffice') }}
@endif

@if (session()->pull('successDeleteOffice'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Deleted Office',
                showConfirmButton: false,
                timer: 1200
            });
        }, 500);
    </script>
    {{ session()->forget('successDeleteOffice') }}
@endif

@if (session()->pull('successUpdateOffice'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Updated Office Record',
                showConfirmButton: false,
                timer: 1200
            });
        }, 500);
    </script>
    {{ session()->forget('successUpdateOffice') }}
@endif

@if (session()->pull('errorImageFile'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Image File Format is not valid, Please try again new format',
                showConfirmButton: false,
                timer: 1200
            });
        }, 500);
    </script>
    {{ session()->forget('errorImageFile') }}
@endif

@if (session()->pull('errorDeleteOffice'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Failed To Delete Office, Please Try Again Later',
                showConfirmButton: false,
                timer: 1200
            });
        }, 500);
    </script>
    {{ session()->forget('errorDeleteOffice') }}
@endif

</html>
