<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Holirent - A Bus Renting Website</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Raleway&family=Roboto:wght@500&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&family=Roboto:wght@500&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Raleway&family=Rubik&display=swap');
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#" style="letter-spacing:1.8px;font-weight:bold;font-family:miso;">HOLIRENT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" style="color:f6f5f5;"href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              profile users
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Edit</a>
              <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
{{-- Content --}}
<div class="container-fluid">
    <div class="row" style="padding-top: 5%;padding-bottom: 5%;">
        @for ($i = 0; $i <= 11; $i++)
        {{ $no=$i}}
        <div class="col" style="margin-top: 50px;">
            <div class="card" style="width: 18rem;background-color: rgb(170, 169, 169);">
                <img src="/images/background.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Info{{$i}}">
                    Go Somewhare
                  </button>
                </div>
              </div>
        </div>
        @endfor
    </div>
</div>
{{-- Modal --}}
<div class="modal fade" id="Info{{$i}}" tabindex="-1" aria-labelledby="Info" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Info Bus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, dolores dolorem ex quod doloremque repudiandae repellat laborum quis id. Magni doloremque deleniti debitis maxime saepe enim, explicabo laudantium nobis at?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- Footer --}}
<div class="container-fluid" style="height: 100px;background-color: black; color: white;">
    <div class="row">
        <div class="col">Copyright &copy Andryan & Danang</div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
