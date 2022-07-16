<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Single item</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-box">
                    <h4 class="display-5">Do project programming todolist for farawin .</h4>
                </div>
                <div class="text-box">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores cum adipisci maxime voluptates modi doloremque labore eos optio eius, incidunt sint, vitae minima delectus voluptas nam rerum similique deserunt ea.
                    </p>
                </div>
                <div class="done-box">
                    <form action="/todo/1/done" method="post">
                        @mehod('PATCH')
                        <button class="btn btn-success">It has been Done .</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>