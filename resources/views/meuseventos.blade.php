@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ url('../css/meuseventos.css') }}" />
    </head>

    {{-- Status do evento --}}
    <section id=inicio>
        <header>
            <div class="p-5 text-center bg-image" style="  
                    background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
                    height: 300px;">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.452);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h1 class="mb-3">Meus eventos</h1>
                            <a class="btn btn-primary btn-lg m-2" href="meuseventos" role="button" rel="nofollow"
                                target="_blank">Ativos</a>
                            <a class="btn btn-primary btn-lg m-2" href="meuseventosencerrados" target="_blank"
                                role="button">Encerrados</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>


    {{-- listagem de eventos ativos - de acordo com o prototipo de alta fidelidade 
    <section class="text-left" style="margin: 60px 0px">

        <body>
            <div class="container p-4 text-center">
                <div class="d-flex justify-content-center align-items-center h-100" style="column-gap:100px">
                    {{-- Imagem do evento 
                    <div class="col-md-3 img">
                        <img src="data:image/jpeg;base64,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"
                            alt="Placeholder">
                    </div>
                    {{-- Informações do evento 
                    <div class="col-md-6 info-evento" style="text-align:left">
                        <h2 class="card-title title">Nome do evento</h2>
                        <p class="card-text fa fa-calendar">&nbsp;dia tal do mês tal de 2021</p><br>
                        <p class="card-text fa fa-map-marker">&nbsp;Local: Google Meet</p><br>
                        <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                    </div>
                    {{-- Botoes de validação 
                    <div class="col-md-3 botoes">
                        <button href="#!" class="btn btn-warning" type="button" data-toggle="modal"
                            data-target="#validarpresenca">
                            <i class="fa fa-check-circle" aria-hidden="true">&nbsp;</i>
                            Validar presença
                        </button>
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#cancelarpresenca">
                            <i class="fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                           Cancelar inscrição
                        </button>
                    </div>
                </div>
            </div>
        </body>
    </section>
    {{-- Fim da listagem de ventos ativos --}}

    {{-- Listagem de eventos ativos - template 02 --}}
    <main class="mt-5">
        <div class="container">
            <section class="text-center" id=eventos>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do evento - 01</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;10/07/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;13:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Oline</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <button class=" btn btn-warning" type="button" data-toggle="modal"
                                    data-target="#validarpresenca" style="margin-top: 15px;>
                                    <i class=" fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                    Validar presença
                                </button>
                                <button class="btn btn-info" type="button" data-toggle="modal"
                                    data-target="#cancelarpresenca" style="margin-top: 15px;>
                                    <i class=" fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                    Cancelar inscrição
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do evento - 02</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;02/07/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;20:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Oline</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <div>
                                    <button class=" btn btn-warning" type="button" data-toggle="modal"
                                        data-target="#validarpresenca" style="margin-top: 15px;>
                                            <i class=" fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                        Validar presença
                                    </button>
                                    <button class="btn btn-info" type="button" data-toggle="modal"
                                        data-target="#cancelarpresenca" style="margin-top: 15px;>
                                            <i class=" fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                        Cancelar inscrição
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do evento - 03</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;04/07/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;19:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Oline</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <button class=" btn btn-warning" type="button" data-toggle="modal"
                                    data-target="#validarpresenca" style="margin-top: 15px;>
                                    <i class=" fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                    Validar presença
                                </button>
                                <button class="btn btn-info" type="button" data-toggle="modal"
                                    data-target="#cancelarpresenca" style="margin-top: 15px;>
                                    <i class=" fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                    Cancelar inscrição
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    {{-- Fim da listagem de eventos ativos - template 02 --}}


    {{-- Listagem de eventos encerrados
                <section class="text-left" id="meuseventosencerrados">
                    <main>
                        <div class="container column">
                            <div class="card flex-row flex-wrap">
                                <div class="card-header border-0">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRUYGBcYGhoaGhoaGhocGBgaGhoZGhcaGxkaICwjGhwoIhkXJDUkKC0vMjIyHCI4PTgxPCwxMi8BCwsLDw4PHRERHTIoIykzMTQ1MTE0MTExMTExMT0xPDMxMTExMTExMTExMTEyMTExMS8xMTExMTExMTExMTExMf/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQQFBgcDAgj/xABKEAACAQIDBQQGBgUJBwUAAAABAgMAEQQSIQUGEzFBIlFhcQcygZGhsRQjQlJy0RVTYpLBFiRDgpOisrPwMzRzdNLh8RdUY8LD/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAKhEAAgIBBAEEAAcBAQAAAAAAAAECEQMSITFBBBMiUWEUQnGBkaHh8DL/2gAMAwEAAhEDEQA/AM9FFAorvPICiiigBRS0gpaokKKKKAPVFFFAMKKKKBCiigUUAFFFFCAWlpKWqEFFFFABRRRQAtFFFBItafubsmyxRkan6yT5kH2WWqFsDB8WdFPqr2m8l/M2HtrZ92cNZGkPNjYeQ5/H5VzZ5flO/wASHMiaIopaSuc7QpDS0UAeaKDRQB5NFKaSgApKWg0CYlFFFAj5pFFPNi4ZZMRDE98sksaNY2OVnCmx6aGrLvpu9BhcRh4ogwWX1szXPrhdD00NdTmk1FnBHFKSclwU6itJ3v3Fhhwzy4cPmjOZgzZrx8ntfkR63kDUb/JrD/on6ZZ+LlvfN2b8bJ6vlUevFpNfNFvxpptPpWUkUtaFupurgpcEMTiM4txS7ZyqqsbML2tpYCo/ePB7JTDu2EmDzAplXiFrguofS3RSxprPHVp3B+LLTqtcWUyir1upubFJAcXjJCkViyqCFGRb3d2PIaGwFu++tqkk3S2djY3bAykOmnrMwvrYOkgzAGxsR8bWol5EU6CPizaszWirXuTu8mIxMsOIVhwkNwrWIdXVSCRz5mrQm5uzJXkgilcSx+uqyXZNbaqy6i9qJZ4p0xR8Wco2qMspasGythL+klwc3aUO6MVOXMFRmUjuvZTU1v3uhFhYklgDZQ+WQM2b1h2G8NRb+sKbyxTS+SF48nFy+CiiitQ3a3Cw8mGiknD8WRc5sxUAMboLW55ct/G9ZvhsK0kqxJ6zuEXzZrAnw6045YybS6FPBKKTfY6XYs30c4oqBDewZnVcxvayqTdtbjQdD3VHGtY3q3Qj+hsUeVmw8d4laQsihbFgEta5UEVXt2tnbKlhiE8tsQ5KlOIQcxcqgC26jL76iPkLTqfz0bS8WSkkvjspFLWpbT3W2RhyonkaIvfLmlIzWte2nS499R26e6+DxX0ljnZI53SIq5AMYAKnlrz5015MGr3JfhzTrYz6ip/c7dxsc5uxSJADIwGva5Kt9MxsdenuBtOI2RsRJDA8xWUdktxH7LcrFrcMN4GrlninREPFlJXwvszeinuJwFsS0EZz/WmJDp2u3lU6aa6Vou2fR/h0w0rRCQyohZbvcMVFyLeNiPbTlmjCr7Jh48p3XRl9FJXuGPMwW9rkC/dfrWhhXRdNytnnJnt2pWCr+EGw+N/cK1qCIIqoOSgD3VTN058PmAEsdolCgFgDe1hofC/vq5JiEb1XU+TA/KuGUtTbPXxxUIpHWkNeq8mpNAooooEeTRQaKBiGkpTSUAFBooNAmJRRRQI+e92x/PML/wAeH/MWrr6TP98wfs/zVqhbLxQimimILCKRJCBzIRgxAv10qc3p3oTGTQyrG6CHmGK3bthtLHwrXJBuaa+Gc2KcViab3tGpbV2sI8Xh4JLGPELKmv6xcmQHwYF18ytRG8Ozxh9kTQg3VBZfwmcMt/GxAqi75b1LjWheKOSIxZiCxW+YlCpXKdLFKk9t7/LicI8BgdZHVAz3XJmDKzEC97HKbaVzxwzVOu9zrlnhLUr62/gsW5cyJshnlXPGq4hpFsGzIGcuuU6G4uLVUt5ttbOlgKYXDcKXMpzcFE7IvmGZTevOzd7ki2fJgjFIzOky5wVyDi5rEgm+maqnW2PE9Tk75ObLnSgoqnsatvCM2w4+HfLwsOTb7qmPN7BbXyNQvomjb6RMw9QRAN+IuCnwEnxpjurvq2EjMMsZlh1ygEZ0zestm0dDcmxItc8xoJKf0hQxxtHgcHwma+rLGiKSPWyRk5z52qHGUU4KN2+TVThJrI3VLgld2WB2xj8vLKR7Q0Qb+9epvZMWC+lYp8OQcUCVmDFxYk3tY6BSQNVB5VmG6W8Ywc0k0iPIZEKnKVzZi6sWJY63sffXvBbz8PHvjVRskjPmjuMxR+l+VwQp9lEsM23Xwv3HDyIKKv5f7WPN3WlO2FM4tKZZc4HINw5NF/Z5W8LVoWIljxE+JwMoupjikA6lTowHkyof61Z1iN6om2hFjUgkXKDxEJTM7ZGQMCDbkVGv3aZbf3jafFHEwGWBsipo1nsOeqnkdNPCqlilNp1W39kQzRxxlbvf+jW9l7U4uKxMa+pBwUH42EjPbwHYXzU1nXo12fxca0hHZhDN/Xe6r8M59gprufvauCMxljklaVlYsrLe4zlixY6klr103X3vjwUMiCGRpZGZs4KZQctowbm9gbn2mpWOUFJJc0inlhNxcnxbNJ2fHiPpWJMqrwHEYi7QJGVcr3XpmveslOzvo+0Uh6R4mIL+AyoYz55StdNlb4YyOWOSWeSVFPbjJXtrYgjlz1uPECum3d4o8Ri4sUkUicMxl1Yrd+G4YWsedtNe4VWPFODaa2aIy5cc0mnun2WD0uevhvwzfOOn/oo/3eb/AIv/AOaVUd8N5kxzRFI3j4YcHOVN8xUi2U/s053Q3vTBRyRvFJIXfPdSoA7IWxzHwpvG/RUa3/0SyR/EOV7f4WT0RsPokoHrcXXyMSZfZcN8azGSNlLLIO2CQ9+eYHtX8b3qS3Z27LgpOJGA6lQskZNg4HLX7LDWx15nTWrfLv7gWbinAOZvvFIb3H/yZs3tteq92ObajdktwywUdVNET6ONmcTGhiOzCpc6faPZQHuNyW/q1pGCjxH02d3A+jskaxdoEgpfNdemYyN+6KzzYO+seHOIdsO7SzytISrLlUG5RCTYkAs2tutRezt78ZHJHJJiJZUVgXjJWzr9peWml7eyoyY5zk3XRphy48UUr7/6xtvHs/6PipYuiuSv4G7SfAgeyu+7mEzO0htZRYX7z+Q+de97duxY2RJY43jITI2cqc1iSpGU89SPdU7uts//AGaH8bfM/wABWs5NY1fLOeGOLzNx4RIbsbO7UuYD1tTbrb/xU/8AouM81Bo2anZf8Zp3euSOyO90xmdmRj1S6/hYj+Nekw8i+rPL++T86d0vLmCPHpTti0oZyz4hBcTnn9pUPzFOfpeJGueNvNT/AAIpjtBrr2QTbnVS27vUR9VGdeRPdQ50LSi2Yrex4jlZYnbuUsD/ABp/hNuyuMzYUqPCQH4FRWXbFxlpM3DeVxrYa6+Jq0HeXFrqcDJl8Ct/dehT+Qr7LLj97YobGWOVQTbNZSo8+1f4U8j2/Cy5rsBzuUa3wBqoTby4TExvDMDEzKRaQW93fUHsDeN44nwvrsCVjfoQdFvS1qwpmm4bbuGk1SVT01uP8QFO1xcR5SIf6w/OobZWzkjiVSATa5Nhqepru+DiP2F91XYUyXVgeRB8qWs03z2OI7TRjLb1rXHkdKldlLxIkfO+o++351OpCpmPCjMO+n+wP97w3/MQ/wCala/vLtk4UxBMI0/ELA8MarbL0ym5ObQacq6c2bRJJK7OXD46yxbbqjEjXSCPO6qWVMxAzOwVFubXZjoAK0T0pbMhSOKZEVJGkyNlAGcZWNyBzIyjXxpl6Ldmh5ZZmFxGuRbjTM+pPmFH96j108esPw7WVYyubwQ4ONxHhJHlyj6yTMpjJsNI8o18TcjprrURWoekrBJLhYsTHlIjYdocjHLYX059rJ7zUV6LtmxySTSyKGaIIEB1Cl892sevZAB86UMy9LU+h5PHbzaFtZRCaK1PH7/NFI0eIwMqxhioLEXYA2zBWUKQeejVV9zHR9qqyiyM87KCALKUkKi3IWFtKcc7cXJqqFPx0pKKd26KqDSg1ed/MAZdpxQpYGSOJeWgvJLc28AL+yrJtTaGG2RFGkUWaR72AsGfLbM8khHLUd/PQWGifkbKlbfQLxfc7dJdmR3pL1cN5d7Ysbh8rQGOdXUhjlcFdcwEgAI6aEd1SXot2eCZsQwFhaJb8ujyH3ZPeat5nGDlJV9ELx1LIoxdp9mfXoJrSPSbgVeKHExgFQcpK8ikgzI3lcf3qi/RcAcVJcA/VHn+NKFmTxudBLxmsqx3+5S6WpvfIfz7ED9sf4FqErWEtSTOecdMnH4ClpKWtCAooooAKKKKAHmzIM8gv6q9o35WHf7bVe9jbZwsSszzx5ibWU52AHhGDa57+6qhs7dF8XwyZMisbAZbk62zXJ091aFsv0bbPitmaSVh95zb92MCuHNLVI9PxoaIb9kdJvph4UOVZJNSdAqDXxY3+FRR3z2hObYTZxI6Mwkdf3gEX41qeB2Ph4rcPDxqe/KM3vIvT10bwHx+dZUdLoyvD7J2/PrJKmHU9FKKR/ZKW/vU6f0dvlL4jFSysATYa/GRia0pI+8/69lcsbACtxYWPM93dTSQrM1TbLjAqxPaVSh78yEqb+OlUbZmz5MRJ2b3Y3Zu4VcUwYZ8VAeSylh5SDN87073M2dws5IuCbKfCs2t6Gx/AkOBgJAChRcseZPnVAxu/eJlkKxtljvppr8aeelHGsZEiB7NrkfKqdh0yjN3UN9Elsm2vE8dsSnEPQgdoe6o4YmPnGSALWPUVV3x7sTrp3V7w87X0POolBsaRdxvHOpyriCwtpyNSmwd5p1xCRytmSQ21FrHpyqmJOAoAW7kgCrJspOJJEjKAysD7qbtMDTdpwq8TKRcEVH7EhMcKp3VK9APCmrtrVjRjWwf97wv/MQf5yVq++W8cuD4XCiWXiZ7g5r9nLYDLfU5j0rIMDiDHJFKBcxSJIATYEo4cC/S9rVd/wD1Qm/9pH/at/0Vr5GOUpJpWjn8XLGEHFunZLeknBrJg48QwKSRlLAk6CS2dCOVwba/s1JbnbLaPZ6opySSo0mYi+VpB2CVuL2XJpccqzfeHeufG5VkVFiU5hGl9TyuznUmxIGgGvKnG8O+MmLiWLhCFVYN2JGJawIC+qLDW/sFR6OTQo/f8Gn4jEpuf1X6mk4Dd4x4E4KSTiDI6B8uWwa5TS51W469BWY7tz43DPJJh4y/Dsk6WLDm1gyr2rgq9mHLW/PXnuzvLJgndlXiiRQCruwAKm6sDY97C1uvhTrAb4yw4iaeOGO05VnjLNoVvqri1rlmJup51Ucc4ppq7JnmxzcZJ00Xzdjer6czxSYVoyqZmv24iLhcpJAsxvyI5A91VrY2DSHbhjjFkVpMo7s0LNYeAzWon9J8pWyYVFb7zSl1B78oRb+V6q+y9tyQ4oYsgSyXdmDHKGMisp1ANvW5W6UoYppS2pNcBkzwbjvbT5rouu8mJWPbWFdjZckYJ6DO0yA+9hSelLZ8jGKZVLIqsjWF8hJBUm3IHUX8B3iqbvHtpsbKJXjWMhAmUMWFlLG9yB974VN7I9IWJhQJJGs4XQMXKSW6BmysG87A996r05w0zStpcCebHPVCTpN2mVg4KXhmUxsIgQC5Flub2AJ58jyrX9ibGZNnLh1bhySRNma2Yo0oJbQEXKhsvPoKoO3d9pcUERoESJXVyucsz5DcKXsAoOoPZNcN5N7pcaqI0YiVGLdiRiWNrC5sLAAt76eRZMiSarcjFLDhbad7GkPsFv0ccEziRliKI2XKLprF2bm1rIOfSs+9H2JaLFlhHJIOE6ssagsLsljYkdRb2013a3plwXEypxRJl0eRhlK31Bsed/gKNlbyth8TLiEhUmXNeMuQFzuHNmy6i47qUcU4xlF72VPNjnKE06rka7yys+LnZlZCZGOVhZgPsXA5HLlqMNPNrY84iaSZlCGQ3Kg3A0AtewvypnXZjVRSZ5+VpybXywpaSlrQzCiiigArvhYDJIsY5sQPf1/jXCrLubg80jSkaIMq/ibn7h/iqJy0xbLxR1SSNE3V2VGGvlusahVv32sND3C/vFW4RgcgPLp7qZ7HwvDiVep7R8z+QsKfla4T16Bfd5UrCivSikM55K8YqLNG69Sp99tKcWopgZQ+mNYfrof7yH8jU7s2MxoFJ5VGbz4cxzRS/q5ih/DJcD5ipWNWPSidarQLgyffCUyYx+trKKsUu7ixbNkdx9aVLeXhUidzL4oTM90vmK+I5VP7zwj6JKBr2D8qyS33EfPgGpp5gV1po3OpDDCwvVFlm3M2cJsWLjSNS3tOg/jVnx2xpIpBLexZ7KO7Wwrp6I8ECsspGpbKD4KPzJqy72JmkgjHMyA+wamplG0Qx9h5GaMEjW2tcHvflUxAmVrd4Brvwl7quh2fNwooFdTh3C5yjhfvZTl8O1a1d55Jyoorpwmy5spy/escvv5UCPApaQV2TDuylgjFRzYKSo9oFqoKOVFFFBJ6ooooBhRRRQIUUUCigAoopaEAUtJS1QgooooAK1bc3ZNhFGR04j919CR77LWU5wpW/Uj29Ty8Aa3D0exfzRHPrHsa87RkqL+J/KubPLo7fFhzJltUWoaikZwBckAeNcx3CAV7Apu2JAYJY62semt/yplxcUzsBGiIOTFiSx8raAeVHIrRLGvJrmsZzMSxINtOi2Fjbzr3agZTd+4TwZrWPZEg7wUI1H7tQuHaR0VhIbMob3i9S3pNjIhSRSRYsht1VxyPhpVZ3T2jnwUZ5lMyH+qSB8LVlOLirvk1jJS2rgsGAjcsFMlr99SuL2M8kbIX0YWNhWdJtKQyMcxFm0Xwq+7s7c4qZXPbGl/vf96Ud1VilzsVMeieC9zJKfao/wDrTqP0Y4YC2eT97/tWgyAFTc2FM+DHyzn3mno+2RqGe7+w0wkfDjPZuTqddedO32crSrITqosB01r2mGS+jE3866rhFBvr76en9RWLiVK2ca25jwpv+kk76f3plPsuNzmsNfGtAPnatV2XtnExYeXE7RkBilTLFhyihpL9ygXCkaa9Dc9L5VVoG/20P1w/sov+muycWzzcclHkrgw0nD4mR8nLPlOS/dmta/hV+fask+w8Q8rhiksca6KoVVeCy9kDvPPXWqZ+l5vo/wBFz/U5s+XKvrXvfNa/xqVi36x6KqrMAFAUDhxcgLD7NKUWwjKKITZkSvNEj+o0iK2tuyzANr00JrQd99vYvC4tIMMeHEqJw41jUrIeRFipv92w/jWbMSSSeZJJ9vOrHht9sdGgQTXCiysyIzqOXrMLnzN6cotuxRmkmibwexMJHhsNNiYpJZMXMEsrsgiLs3IKRci3I+PdTnD7o4SPE46OQPJHBFHKlnIdQyyMykiwJ7Ol/CqpszezGYdDHHL2CSwDKrBWJuSuYaakm3KuEW8GJVpmEpLYgZZSVUlxYi2o7OjEaWt7KnTP5L1w22L1Du/s1mwZ4En89QlF4r5Y8sfEJJvct2gOdtOVRuC2BhI4MdLNG8v0Wd41tIyEouSwJGnXU276rabx4kGAiQfzYFYewnYBUIena0AGt6mdkb4mLDYkXb6TNKZQ4RCl2yZ8wOmtm0t1pOMkNTg3wTLbl4aTFYYJnjhmgaZoyxLDJwuzma5F+Kt/wm3PSNx+xsJLgpcVh4nhMU3CZWdnDjMik9okg9scuRBGvOoDE7y4uSdcQZSJUFkIAAUa3AW1rG5vcG/Wl2tvTisSoSWUZAc2VVVQWGtyFHaPnpTUZbbkucN6RfH3U2ecU2DEUgcw8YScV7J2sgABOp663FRmxN2sGuDhnxGRjM2pknMKItzomX13AW+U+OotVZG9WL4/0jiji8PhZsiepfNbLltz62vXnZe8+Kw6cOOQcO9wjorqpOpK5hprr3U9M65D1IXwWfA7t4ISY8uWligRJY2STXKyO5W6mzHQAE+B613j2ZhIp9nYiKJ1XEEfVmRjkfsFGzG5NsxuOR05VTzvFiSZyZbnEKFlJVO2AuQDl2eybaWrnNtzEMsKmTTD24VlUFCLWNwLn1RzvRok+xepBdF4xeysLjdqyQmN0aMGSVhIfrbLEEUL/Rjta27vbUftfYmA4cckckcZWVElSKfjXjdwpYX1DgXNrW0POoHEb2Yx5I5Gm+sjvkYIi+tYMCAtmBsNDcUuN3rxcuXNIoCOsgCxxr9Yhurmy6kHv0oUJqtweSDu0WDePYWFGGllwkMbomS0seJaQi5XNxIzoOZGhPfVDqc2jvVipo2id1CNYuEREz2IPaKi/MCoaNMxA7zVxTivcZzqclpOeJiy8GQ2txANeVjbU+4mtq9Hr5Y5Yb3CMrr+GRbW8e0jH21lu1MEHw0hH9GAR7CL/D51L+iHazjGGFmuskLZQfvIysB+7xNK49aldnprFpSS6NhkwrtIriQqq80F7N562+B5+Vu6YVAbhdfG5+fKvYr0TbWpovk9Clpg2049QHDEWBCdq2Y5VuRoLnvrjLtF7EiOwu63Y37Sm2qr0OpvfkKLQPYla5ySKOZA86qWN3qgiP8AOMUq9cikLoV5fezA1WcTv7HJdcNBLMbWuqlVJ5Xztr8KJWhwqX0XTeXLiMO8cdySCwNuz2D2hc9eYrMdyZBfExAaLIGXuGYWI87ipXD7YxpI4/Dw8IDOI17cjadrOx5JrryuSB10gU2/I75IVZ31I+02mpIGioB4AVlOdx00awxq7vYm8TsSSRyY8oYc7n5gXNRE2Pmwc4SWMovQ20P7StyPspjgtqyRyF8zA65h1I/jVswu8cEqcOYKynowBHurJSo1ljvgfpvxlRbxhyR62awPja3Ouf8ALpzyhT94/lTHGbNwskZEJETdCGIH5VHYPZ8kZ0+t9qtfyAN6yrLW0v6J9ON7on/5azdI4x7zSHe/EH7Mf7p/OoxYZGOdcNy0IJsL/hZh3GunGxC6fQz/AGd/kafpZ2r1v+CG8adJDnEb24jI2YqosdVUgjyN9KioMfKFHbkPjnYfAG1O3xs5BBwosdCDGOvmaiP0e/6qQeAc2HgNeVaRi0qlJ2Zyim7pMqMSFiFHNiAPMmwrTG9HMI+rLzcTh5uMWi4Wflk4d+Jbry5dazEVaW31lbK8kGFllQBVlkizSADkb3tfma9aal0eXjcVeof7tboQYyIOJZI3ikK4hdGFgCbxELzOnO9tfC73djC4B8LjmCSMiKe06xNIseV8rREgZXNmPS3Z7qrmzt8MRBHFFCI40ibNopvKbEHikt2gb9LdO4WTBb2SxSTukcOXEW4kRQmInW9lLaXzNcXtrUuMnZSlBUT2xdzoJYTifr5I3kKxIrQpIEDFS8jSEKToTYHu59PWG3Gh+lTwyTPw4ollR1y3ysWBD6EEjKeVqgcLvZIqPG8MEsTuZBE8d442Jv2Bfsi99PE0Yfe2aN5ZEjhXixiIqqFUVFBAyKG0OtFTDVjpbEtszYGz50xEySYhYYERiTkzk2kL6WsdFW3Lma9Yrc2J58EsEsgixUbyXexdFRVc8rC5DgW6HvqtbN25JBDNCgQpOoVywJYABh2SCLesed6ctvTiCcKVyKcIpWIqDqCqKQ9yQ1wgHTmaNMr2ZKlCt0TW0N2MK0GJkwskufCOUkEuXK+X1iuUXHW3ly1Bp3tXcyCOBpIxiJrRFxLG0LRFgCbFAc+XlqAdOtQW1N8J5o3iCRRLKc0piQq0raXLEk87C/U2r2d8ZQkixwYaJpVKySRxZXYEEHra+poqY7xkfuzsj6XiY4S2UNcsw5hVBY2v10t7auww2Gj2ftFMOZSEYo/Ey3zJlBKkfZPjrpWfbM2hJh5UljNnQ3F9QdLEEdQQSKnMfvpNLHLFwoESbV8iEMWNszE5tWNhqb05xbf0KEoJb8ljg9HsQWNJGl4jpmaVWiEUbW0XIxzsPEA+YrPMZAY5JIyQTG7ISORKsVJHhpU+u+EhSMSw4eZ4wFjklizOoHLW+vIVXZ3LszHmxJNtBcm5sOnOnBSXJORwaVF+O5MH6RGE4kvD+j8XNdc+biFLXy2tbwpnsXdrCPhIsTPJKDJLwsqZLEmQovMaDS5N+hrknpDxQKtw4C4XKXMZzsBqLkN362GlzURFvHKsEWHCpkilEqmxzFwxcAnNbLcnpSSmU5Y09kWjHbmYVRio45JjNh4+L2svDsVdkTQXJsup05jyqgVYZN8Jy+IkKxZsRGI37LWChWUZe1obMed6r1XBSXJnkcX/AOQp1gV1Ld2lNad4HVgOg1NZ+ROo18mviY9U7+CyIg4RQ/aU38yKrG4ztHj4GBAKO17khSMrBlJHK4J6VOCQ1CYbZeIkxEgw6kkMGJBUZc97EliAPte41wR5PVlwbFtDeCRM/FeOJRnVSrKzXUgEnNoBz0I10qq7U3/wg5SPK4YMoW7DlYi50HXQdTfoKisB6PJZO1iXztflxCQB4kqCPIVOx7FwWDIVh2+iolr8j/tZLKdO4/GtGtSaZmtnZDLvbtCZcmGwojTIIwzi3Zvce0d967x7r7RxZvicVIQTcrHcDXnroKmxvEij6qFQLeu/aI5DUMVAue4mm2J2xLIDnkNrWZVvlF+bAqALC/jQlQ9z3gdx8Dh9ZShYc8xMj8+qjlrUx9Pw0fZiiLEECxso5XvZegHO/L31XLi+pF7gC5WzAC9u4kX1056UjuLLz1zFbjmCeXbtfxsOlMSRW97NutNIwjsOI2QZQbZEsqgAXIGbMSO+1S2yoGwRZbKGsozHKXzHVyRbQ6KADewY+NNsNsCLO0kiSZrrwdWVCwIYstgAdSNOQAFPsatyehJJ9pJJ+NZSR0RdkrhWRpXfKodvWZRYvYWBNuelV3fbY6wus0YCxyaMBoqvz5dAR08DU7s7By5g2XQ+z51PTghLlQ1gTlNiG05a6XrPRJco01x4TMdfFG3P40n6TdRZTTTF7PxRZiIioZiQoU6AkkKNOl7U0eOVP9ojDzFvnT9Mj1CwYfbsi2sxv59eY0DDqsXTpUjht55F+0xA7+osepX7qgc/6Ru+qX9MH+vZ33+6K6R4jlbw8PudxH3TXXGbXByOKZo+H3wFjdjfloQbnX9o9Q7cvuDkKk8HvECCSzHX7sh6Dn2edZSJybDX4nov7J8ffVjweDyoLmxOtrD2fZ7gK0UyHBENGpJAAuSbAd5OgFWrbW6+HwiFJsZbE8IyCNYmKE2Nkz30uQQCbeVVVGIIINiNQeoI5GrTtbe2PEoeNg42nMRjEwdha4NmEdrXBJI10PKtJXao4Yaadj6DcSO8UUuL4eJmQvHGIyyiwzEM9+dge7kbXtq12fuchhllxGI4IhmML2jLi4KLcEEE3LADTxrtBv6Rwnkwsck8SFI5i7LYEWJKAam3PUcza16im3ndsLNh3QMZpuM0maxDZ0cgLbl2O/rSWs0bxlhl9HiCSSFcWDMIzKicMgGMHKC7ZrAltNPO3So3Z26sLYaDEzYoxLM/DCiIscxZwozBv2SSSLCuv8vX+ltiuAt2h4OTiGwGfPmzZefS1qeYbb+Hi2ZhEaOPESRyljEXKshBlZZNAbdBqLENR70CWNsZruKwmxMTzW4EQlVgl+IrBiLjN2T2SOtJszdeILgZ5ZexiJApThki+uVLhrkMVC3sLZr9K8Q78yjFS4h4kdZUEbR5iAEX1QHsT1a+muY8q5bT3wMqYdI8OkS4aRZIwGLL2fVUggad5vrRUxXj5JDeDd7CHHcGKVkJPbijhkfhARBhlsfrMx7uWbXlXHbe45ijjlikds8iRZJYzG4ZzlU8zpe3TrR/Lm2JXFJhI1ksyyHiMeIpCgC9uyRlGtjXHaG+RkhEMUAiCyrKrcRpGDK2fXOO1r49wtQlNUF43dln3e3Ww0GJkieVZ5Vhu8TRdlcxUh1JuPZz7QqsbK3VjbDxT4nEcETvw4lWMuSSSAWN+yDlPha2utqer6QQJGm+hx8V0EbyCRrsBysMvZHvOg10qP2VvaIoI4JsMk6xPniLOUKMCSL2BzWJPs0pVMLx7Id4XcUmfEQyTiPgIjiTJdXRwxDEFhltlN+fI+ZrW1oIUkywSmWPKDnKFDfqMrai1Tib6SmTFSPGrHExiOwYgRKFZVtoc3rX16+dVarjq7MsjhXtCiiitEZC0tJS1Qj3EmY1N7N2d2cxNr/KuOy9jyyBciXz8tRy8iatsWwJwAOGdPFfzrzvIk5S2PW8SChDfsikwC/eNR20dmz3DQNYjqCQ/vWrcmxpv1R94/OuqbKn/Vt8Pzrn9x1+0pmG3t2hhzaVOIoP2lvpbkGBB7jck1ZNk+kfDyALOhjY8xcOnh6wU+4GpU7HlbQxk+dj/Go3GbjrJzise8FR/GqTkiWok1BhcDiLGJkuNQEbKdbf0bad32a44jdiQG8cise9wVbw1s2vkFql7Q3BmhAaOUoCbAXBF+drA26d1c4Nt7UwmjXkUe353+AFVr+RaX0aBgN1AoHEk5A3Ea2Bve4Ja9+fcPhU1h9nRRjsILjkWJYj2te3sqhbO9KEfqzxMh6kafA3HxFWvB70YSVcyyqPxafHl8aq0S0yO3oz5kk1JQn3HnVTGNz5z9q+mttPA9DfrVg3g32wMYK5+Ke5Bp+8dPdes1bbitMGSMorNYi+ljpe3X3Cl+ZMq3paL3srbLIMr9pfkevkfA6HwqxQbVjYaZnHXKjMPeBz/wBa1nIxb3GRVaw5Ncgju058761KTb4TIgiSNDJy0v7dO/r1vauq12c7i+ix7c24wRY8JEqyNoXkJjKWsdI3S73HWqFtXYOImbNNMXb2hR5XJqdh2rjRlMuSUN9g5RH5cieXuIqZNie2FQkX7LFxfu1GlY5McnvE0xzitpGYS7syDkAfh86btsKa2imw8bCtUlWJQWZgfLn7zVV2tjFbMVFlGgFZRhO/caylHogtn4SOHtSkO/2V6Dzr3iNr3Ym1MJGub1z0q9T6Ir5HIorR98PR8UzTYNSy6loebL3mPqw/Z591+VZwa7FJM8mUXF7hRRRVEiilpBS1RIUUUUAeqKKKAYUUUUCFFFAooAKKKKEAtdoIi7Ko6m351xqZ3fh7Rk7tB5nn8Le+lOWmNl4o6pJF23a0YtkNkGVdPZ8vnVlXFn7p91Rmy04car15nzPOnEuOCC5+FcJ61EguM8KU7RUacz3VXtnLI9y7MQWJF9NCbgad1TkRC8hakA5TGZuSkeJH+r10GIAHU1yWc174xpgRG8koZYNP6Uf5cg/jTFkFO955exFr/Sj/AAtUcJaxycm2PgaY3Y8MnrRqfZrVfxG5sIN1zDyYj5VbM/jQden5VmWUyTdxEHZUe7+PM1X9oYHL4VpWIAtqfd+dVna8AN7CqQmQmDxQBJP2ra+Nr2PtFcDIeKCCQV7Xkedz4/KmUkoRiMwN/gaExLK4Yc/O4/710KdowcdyxptEKwfEFmb7Cj8uXtphtbb8mmU2ze8D86jppOI92NhbusPHSmeJF2B6dKpzdC0Is77ZvHlA7R5nuHWoPF4vN2RyHxpsz30HL50BLc6iUmylFI8i5opWb3V4z1FlH1PVN3v3HjxWaWK0c/Mnkkh/bA5N+0PbeiiulHE0mtzIMdgZYXaOVGR15q3zHQjxGlN6SiuhPY45KhRS0UVRAUUUUAeqKKKAYUUUUCFFFFFABRRRQgFq17BaIZF4i6DMdevP50UVhnk6R2eJFWy4R4uP9YvvFdBMn3l94oornO1ndMQv3h7xXYYhfvD3iiigD2s6/eHvr2Z1t6w99FFAEPvPKDHFYi/FXr4Go8OBzPuoorHJybYuD0MR3CuOJxyILySKo8Tr7qKKgplfx+9sS3EaNIe89lfzNVHae2pZj2myr91dB+ZpaKpEsjViZuQpwkJA11NFFNCZ6v8A61/8V5Y3ooqyT1mArwz0UUho53pM1LRSA//Z"
                                        alt="">
                                </div>

                                <div class="card-block px-5">
                                    <h4 class="card-title">Informática básica</h4>
                                    <p class="card-text fa fa-calendar"> dia 15 de julho de 2021</p>
                                    <p class="card-text">Live no Facebook as 21h</p>
                                    <p class="card-text">Link de acesso: https://instagram.com</p>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-info" type="button" data-toggle="modal"
                                        data-target="#cancelarpresenca">
                                        <i class="fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                       Cancelar inscrição
                                    </button>
                                </div>

                            </div>
                        </div>
                    </main>
                </section> --}}

    <!-- Modal validar presença-->
    <div class="modal fade" id="validarpresenca" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <hr class="my-5" />
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="validacao">Área destinada a aferição de presenças!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <input type="text" class="form-control" id="validarpresenca" style="background-color: #F0F8FF;"
                            placeholder="Digite ou cole o código de validação aqui.">
                    </form>
                </div>

                <div class="card-body">
                    <small> Atenção! Se o código digitado estiver fora do prazo nada será validado.</small>
                    <button id="validarcodigo" type="button" class="btn btn-warning" data-toggle="modal"
                        data-target="#confirmarvalidacao">
                        <i class="fa fa-check-circle">&nbsp;</i>Validar
                    </button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">
                        <i class="fa fa-times-circle">&nbsp;</i>Fechar
                    </button>


                </div>
            </div>
        </div>
    </div>

    {{-- modal confirmar validacao de presenca --}}
    <div class="modal fade" id="confirmarvalidacao" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <hr class="my-5" />
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Presença validada com sucesso!</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cancelar presença-->
    <div class="modal fade" id="cancelarpresenca" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <hr class="my-5" />
            <div class="modal-content">

                <div class="modal-footer">
                    <h5 class="cancelamento">Você realmente deseja cancelar esta inscrição?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="modal-body">
                        <button id="validarcodigo" type="button" class="btn btn-warning">
                            <i class="fa fa-check-circle">&nbsp;</i>Sim
                        </button>
                        <button type="button" class="btn btn-info" data-dismiss="modal">
                            <i class="fa fa-times-circle">&nbsp;</i>Não
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!--Footer-->
    <section id="final">
        <footer class="bg-light text-lg-start">

            <hr class="m-0" />

            <div class="text-center py-4 align-items-center">
                <p>Follow MDB on social media</p>
                <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button"
                    rel="nofollow" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                    target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                    target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow"
                    target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </div>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-dark" target="_blank" href="https://jeftelg.dev/">MarkPres</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!--Footer-->
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>

@endsection
