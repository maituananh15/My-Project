<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD NEW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section id="major" class="container">
        <div class="card">
            <div class="card-header">
                <h2>ADD NEW INFORMATION</h2>
            </div>
            <div class="card-body">
                <form action="create" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="id_major">ID</span>
                        <input type="text" class="form-control" placeholder="ID MAJOR"
                                aria-label="id_major" aria-describedby="id_major"
                                name="id_major" value =""
                        />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="id_major">NAME</span>
                        <input type="text" class="form-control" placeholder="NAME MAJOR"
                                aria-label="name_major" aria-describedby="name_major"
                                name="name_major" value =""
                        />
                    </div>
                    <button class="btn btn-success" name="btnSave">ADD</button>
                    <a href="<?=URLROOT?>/major" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>

    </section>
</body>
</html>