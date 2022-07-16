<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add item</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="p-3 text-center">
                    <h3 class="display-3">Add new item</h3>
                </div>
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Category </label>
                        <select class="form-select" aria-label="Default select example" id="exampleFormControlInput2">
                            <option selected>None</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>                
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Add item </button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js">
    </script>
</body>
</html>