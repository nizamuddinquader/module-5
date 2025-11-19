<?php 

if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $relation = $_POST['relation'];
        $photo = $_POST['photo'];
        $address = $_POST['address'];

    $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'relation' => $relation,
        'photo' => $photo,
        'address' => $address
    ];

    $oldData = file_get_contents('contacts.json');
    $oldData = json_decode($oldData, true);


    if(!is_array($oldData)){
        $oldData = [];
    }

    $oldData[] = $data; //This method(array_push) is being used to add data to the array
    file_put_contents('contacts.json', json_encode($oldData, JSON_PRETTY_PRINT));

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">Contact form</h1>
            <a href="index.php" class="mb-4">Go to contact list</a>
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="relation" class="form-label">Relation</label>
                        <input name="relation" type="tel" class="form-control" id="relation" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input name="photo" type="text" name="" class="form-control" id="photo" placeholder="Enter your photo url">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Address</label>
                        <textarea name="address" class="form-control" id="message" rows="3" placeholder="Enter your address"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mb-3">Create contact</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

