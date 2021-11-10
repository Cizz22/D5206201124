<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset("css/praktikum2/style.css")}}" />

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid p-5 mt-5">
      <div class="card mx-auto shadow rounded mh-100">
        <div class="py-3 card-header bg-primary text-center font-weight-bold">
          <h4 class="text-white">Javascript Form Validation</h4>
        </div>
        <div class="card-body px-4">
          <form action="" id="form">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" id="name" name="name" class="form-control" />
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input
                type="text"
                id="username"
                name="username"
                class="form-control"
              />
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-control"
              />
            </div>
            <div class="form-group">
              <label for="">State</label>
              <input type="text" id="state" name="state" class="form-control" />
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input
                type="text"
                id="address"
                name="address"
                class="form-control"
              />
            </div>
            <div class="form-group">
              <label for="">Zipcode</label>
              <input
                type="number"
                id="zipcode"
                name="zipcode"
                class="form-control"
              />
            </div>

            <button class="btn btn-secondary form-control mt-3 font-bold" type="submit">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $(document).ready(() => {
        $("#form").validate({
          errorClass: "error fail-alert",
          validClass: "valid success-alert",
          rules: {
            name: {
              required: true,
            },
            username: {
              required: true,
              minlength: 6,
              maxlength: 8,
            },
            email: {
              required: true,
            },
            state: {
              required: true,
            },
            address: {
              required: true,
            },
            zipcode: {
              required: true,
            },
          },
          submitHandler: () => {
            Swal.fire({
              icon: "success",
              title: "Your work has been saved",
              showConfirmButton: false,
              timer: 1500,
            }).then(() => {
              window.location.replace("https://www.google.com");
            });
          },
        });
      });
    </script>
  </body>
</html>
