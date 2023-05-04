<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
    .dataCard {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 20px;
    }

    .nextBtn {
        border-radius: 100px;
        background-color: #000;
        color: #ffffff;
        width: fit-content;
    }
    </style>
    <!-- <link rel="stylesheet" href="./signup.css"> -->
</head>

<body>
    <nav class="navbar" style="background-color: #ffffff">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder" href="#">Patient Health Monitoring and Management System</a>
        </div>
    </nav>

    <!-- Header Section End  -->

    <!-- signUp Start  -->

    <div class="container-fluid" style="background-color: #f0f0f0">
        <div class="search my-2 py-2">


            <!-- <form method="get" action="{{ route('show', ['id' => '__ID__']) }}">
                <label for="id">Enter Patient ID:</label>
                <input type="text" id="id" name="id">
                <button type="submit">Submit</button>
            </form> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Search Record
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Search Patient Record</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="get" action="{{ route('show', ['id' => '__ID__']) }}">


                                <div class="row">
                                    <div class="col-md-10 mt-2">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="id" name="id"
                                                placeholder="name@example.com">
                                            <label for="id">Enter Patient ID:</label>
                                        </div>

                                    </div>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <button type="submit" class="btn btn-success"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="card dataCard p-2">
                    <div class="">
                        <h2 class="head-text-form">Patient Details</h2>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>

                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Height</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->age }}</td>
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->height }}</td>

                                    </tr>
                                    @endforeach
                                    </tr>
                                <tbody>

                                </tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- test -->



        <!-- test -->
    </div>
    <!-- SignUp  Section End  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>