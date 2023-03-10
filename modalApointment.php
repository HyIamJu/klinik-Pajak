<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>


    <!-- flatpick -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!--  -->

</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalApointment">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-lg">
            <div class="modal-content">
                <div class="modal-body px-0">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col">
                                <img src="img/bg_modal_apointment.png" alt="" class="img-fluid">
                            </div>
                            <div class=" col px-3">
                                <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button></div>
                                <div class="row justify-content-center">
                                    <div class="col-11 ps-0">
                                        <div class="w-100">
                                            <h5 class="mb-4 w-75 fw-bold">Buat janji temu online dengan pakar kami</h5>
                                        </div>
                                        <!-- forms -->
                                        <form class="mb-4">
                                            <div class="mb-2 ">
                                                <label for="topik" class="form-label">Topik</label>
                                                <input type="text" class="form-control py-2" id="topik"
                                                    placeholder="topik">
                                            </div>
                                            <div class="mb-2">
                                                <label for="hariPertemuan" class="form-label">Rencana hari
                                                    pertemuan</label>
                                                <input type="text" class="form-control py-2" id="hariPertemuan"
                                                    placeholder="dd/mm/yyyy">
                                            </div>
                                            <div class="mb-2">
                                                <label for="noHp" class="form-label">Rencana jam pertemuan</label>
                                                <input type="text" class="form-control py-2 " id="jamPertemuan"
                                                    placeholder="hh/mm">
                                            </div>
                                            <div class="mb-2">
                                                <label for="noHp" class="form-label">Jenis Perpajakan</label>
                                                <input type="text" class="form-control py-2" id="noHp"
                                                    placeholder="jenis pajak">
                                            </div>
                                        </form>
                                        <div class="form-group mb-3">
                                            <button type="submit"
                                                class="form-control btn btn-primary rounded submit px-3 py-2 fw-bold">Daftar</button>
                                        </div>
                                        <!-- forms END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>
    configJam = {
        enableTime: true,
        noCalendar: true,
    }
    configHari = {}
    flatpickr("#hariPertemuan", configHari);
    flatpickr("#jamPertemuan", configJam);
    </script>
</body>

</html>