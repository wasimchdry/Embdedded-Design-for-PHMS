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
            <a class="navbar-brand fw-bolder" href="#">Patient health monitoring and management system</a>
        </div>
    </nav>

    <!-- Header Section End  -->

    <!-- signUp Start  -->

    <div class="container-fluid" style="background-color: #f0f0f0">
        <div class="search my-2 py-2">

            >
            <!-- <form method="get" action="{{ route('show', ['1']) }}">
                <label for="id">Enter Patient ID:</label>
                <input type="text" id="id" name="id">
                <button type="submit">Submit</button>
            </form> -->
            <form method="get" action="{{ route('show', ['id' => '__ID__']) }}">
                <label for="id">Enter Patient ID:</label>
                <input type="text" id="id" name="id">
                <button type="submit">Submit</button>
            </form>


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