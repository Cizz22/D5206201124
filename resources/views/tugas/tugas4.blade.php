<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/tugas4/style.css")}}">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container py-5">
      <div class="card w-50 mx-auto shadow rounded">
        <div class="card-header">
          Jquery Set
        </div>
        <div class="card-body p-4">
            <button class="btn btn-primary" id="button">
              Click Me!
            </button>
            <p class="my-3" id="text"></p>

            <div class="d-none" id="hidden">
              <button id="button1" class="btn btn-danger">Click me again!</button>
            </div>

            <div id="circle" class="my-3"></div>

            <div class="d-none" id="hidden2">
              <button class="btn btn-success mx-auto my-3 mx-auto" id="button3"> Click to spin!! </button>
            </div>

            <p class="my-3" id="text2"></p>

          </div>

        <!-- <div class="loading mx-auto"> -->
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
      $('#button').click(() => {
        $('#text').text("Heyy!!")
        setInterval(() => {
          $('#hidden').attr('class', 'd-block')
        },700)
      })

      $('#button1').click(() => {
        $('#circle').html('<div id="spin" class="loading mx-auto"></div>')
        setInterval(() => {
          $('#hidden2').attr('class', 'd-block')
        },700)
      })

      $('#button3').click(() => {
        $('#spin').attr('class', (i, origValue) => {
            return `${origValue} spin`
        })
        setInterval(() => {
          $('#text2').text("Nice, have a nice day!")
        },700)
      })
    </script>

  </body>
</html>
