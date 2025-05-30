<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Major</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
        $major = $data['major'];
    ?>
    <section id="major" class="container">
        <div class="card">
            <div class="card-header">
                <h2>INFORMATION MAJOR <?php echo $major->id_major; ?></h2>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="id_major">ID</span>
                    <input type="text" class="form-control" placeholder="ID MAJOR" aria-label="id_major"
                        aria-describedby="id_major" name="id_major" value="<?php echo $major->id_major; ?>" disabled />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="id_major">NAME</span>
                    <input type="text" class="form-control" placeholder="NAME MAJOR" aria-label="name_major"
                        aria-describedby="name_major" name="name_major" value="<?php echo $major->name_major; ?>"
                        disabled />
                </div>
                <a href="<?=URLROOT?>/major/edit" <?php echo $major->id_major;?> class="btn btn-primary">Edit</a>
                <a href="<?=URLROOT?>/major" class="btn btn-secondary">Back</a>
            </div>
        </div>

    </section>
</body>

</html>