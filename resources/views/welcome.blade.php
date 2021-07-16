<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="/" class="nav-link px-2 text-white">Home</a></li>

            </ul>

            {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form> --}}

            <div class="text-end">
             <a href="/register"><button type="button" class="btn btn-outline-light me-2">Registration</button></a>
             <a href="/login"><button type="button" class="btn btn-outline-light me-2">Login</button></a>

            </div>
          </div>
        </div>
      </header>

    <div class="container px-4 py-5" id="featured-3">

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="{{ route('index') }}" method="get">


            <br>
<label>O'qtuvchi va fan bo'yicha izlash</label>
            <select class="form-select form-select-sm" name="teecher_id" aria-label=".form-select-sm example" >
                <option selected>O'qtuvchi va fan bo'yicha izlash</option>
                @foreach ($teech as $item)
                <option value="{{$item->id}}">{{$item->name_teecher}}. Fan: {{$item->name_scencie}}</option>
                @endforeach
              </select>
              <br>
              <button type="submit" class="btn btn-success">Izlash</button>
          </form>
 <br>

        <div class="container px-4 py-5" id="hanging-icons">
            <h2 class="pb-2 border-bottom">Hanging icons</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                @foreach($group as $item)
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                    </div>
                    <div>
                        <h2>{{$item->teecher['name_teecher']}}</h2>
                        <p>{{$item->teecher['name_scencie']}}</p>
                        <p>{{$item->group_number}}</p>
                        <p>{{$item->number_room}}</p>
                        <p>{{$item->science_time}}</p>

                        <a href="#" class="btn btn-primary">
                            Primary button
                        </a>
                    </div>

                </div>

                @endforeach

            </div>
            {{$group->withQueryString()->links('pagination::bootstrap-4')}}
        </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
