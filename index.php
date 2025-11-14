<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact list</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">Contact list</h1>
            <div class="col-md-12">
                <a href="#" class="">Create a new contact</a>

                <div class="input-group mb-3 mt-3">
                    <input class="form-control me-3" type="search" placeholder="Search contact...">
                    <button type="submit" class="btn btn-primary">search</button>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="table-responsive mt-3">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Relation</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Usman_Ali_Khan.jpg/250px-Usman_Ali_Khan.jpg" width="60"></td>
                                <td>Nizam</td>
                                <td>Nizam@gmail.com</td>
                                <td>01851613121</td>
                                <td>218, Lalbagh</td>
                                <td>family</td>

                              
                                <td class="text-center">
                                    <div class="d-inline-flex gap-2 flex-nowrap">
                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>