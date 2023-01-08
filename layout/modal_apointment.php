<!-- Modal -->
<div class="modal fade" id="modalApointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-lg">
        <div class="modal-content">
            <div class="modal-body px-0">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col">
                            <img src="img/bg_modal_apointment.png" alt="" class="img-fluid">
                        </div>
                        <div class=" col px-3">
                            <button type="button" class="close text-end" data-dismiss="modal">&times;</button>
                            <div class="row justify-content-center">
                                <div class="col-11 ps-0">
                                    <div class="w-100">
                                        <h5 class="mb-4 w-75 fw-bold">Buat janji temu online dengan pakar kami</h5>
                                    </div>
                                    <!-- forms -->
                                    <form class="mb-4">
                                        <div class="mb-2 ">
                                            <label for="topik" class="form-label">Topik</label>
                                            <input type="text" class="form-control py-2" id="topik" placeholder="topik">
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
                                        <!-- <button type="submit"
                                            class="form-control btn btn-primary rounded submit px-3 py-2 fw-bold">Buat
                                            Janji Temu Online</button> -->
                                        <a class="btn btn-primary d-flex justify-content-center rounded submit px-3 py-2 fw-bold "
                                            href="dashboard/html/user-home.php" role="button">Janji Temu Online</a>
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