<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
        $result =  $data['result'] ;
    ?>
    <section id="result" class="container">
        <div class="card">
            <div class="card-header">
                <h2>EDIT INFORMATION RESULT</h2>
            </div>
            <div class="card-body">
                <form action="edit <?php echo $result->id_subject;?>" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="id">ID</span>
                        <input type="text" class="form-control" placeholder="ID" aria-label="id"
                            aria-describedby="id" name="id" value="<?php echo $result->id; ?>"
                            readonly />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="id_major">ID SUBJECT</span>
                        <input type="text" class="form-control" placeholder="ID SUBJECT" aria-label="id_subject"
                            aria-describedby="id_subject" name="id_subject" value="<?php echo $result->id_subject; ?>" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="id_major">SCORE</span>
                        <input type="text" class="form-control" placeholder="SCORE" aria-label="SCORE"
                            aria-describedby="SOCRE" name="SCORE" value="<?php echo $result->score; ?>" />
                    </div>
                    <button class="btn btn-success" name="btnSave">Save</button>
                    <a href="<?=URLROOT?>/result" class="btn btn-secondary">Back</a>
                </form>
            </div>

        </div>

    </section>
</body>

</html>