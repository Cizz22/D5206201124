<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/ets/style.css")}}">

    <title>ETS PWEB</title>
  </head>
  <body>
    <div class="container pt-5">
        <div class="d-flex flex-column font-weight-bold">
            <p>Aulia Cisatra</p>
            <p>Atra</p>
            <p>5026201124</p>
            </div>
            <div class="form-main mx-auto p-5 card mh-100 border-dark" >
                <h5 class="pb-3 mx-auto">Form Pendaftaran Kuota Internet</h5>
                <div class="errorTxt w-50 mx-auto mb-3 bg-danger rounded text-center"></div>
                <form action="" id="form">
                    <div class="form-group d-md-flex">
                        <label class="mr-3 font-weight-bold" for="">Nama Mahasiswa</label><span class="mr-4 d-none d-md-block">:</span>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group d-md-flex">
                        <label class="mr-3 font-weight-bold" for="">NRP Mahasiswa</label><span class="mr-4 d-none d-md-block">:</span>
                        <input type="text" class="form-control" name="nrp" id="nrp" required>
                    </div>
                    <div class="form-group d-md-flex">
                        <label class="mr-3 font-weight-bold" for="">Jurusan</label><span class="mr-4 d-none d-md-block">:</span>
                        <select type="text" class="form-control font-weight-normal" name="jurusan" id="jurusan">
                            <option value="">Pilih Jurusan</option>
                            <option value=">Sistem Informasi">Sistem Informasi</option>
                            <option value="Elektro">Elektro</option>
                            <option value="Informatika">Informatika</option>
                        </select>
                    </div>
                    <div class="form-group d-md-flex">
                        <label class="mr-3 font-weight-bold" for="">Nomor Handphone</label><span class="mr-4 d-none d-md-block">:</span>
                        <input type="text" class="form-control" name="hp" id="hp" required>
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <button type="submit" class="btn btn-primary w-25 mr-5">Kirim</button>
                        <button type="reset" class="btn btn-success w-25">Reset</button>
                    </div>
                </form>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script src="{{asset("js/main.js")}}"></script>
</body>

</html>
