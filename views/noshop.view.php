<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="src/img/favicon.ico">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/nav.css">
    <script src="src/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="src/css/shop.css" />
    <title>Junior Mints | Shop</title>
</head>
<body>
        <!-- Button trigger modal -->
        <input type="hidden" id="modal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="Launch static backdrop modal"/>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Your are not Login</h1>
            </div>
            <div class="modal-body text-dark">
                <p>Please Log in to Use Our Shop</p>
            </div>
            <div class="modal-footer">
                <a href="/"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                <a href="/login">
                    <button type="button" class="btn btn-primary">Login</button>
                </a>
            </div>
            </div>
        </div>
        </div>
        <script>
            document.querySelector("#modal").click();
            console.log("ok")
        </script>
</body>
</html>