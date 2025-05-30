<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
        $subject = $data['subject'];
    ?>
    <section id="subject" class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center my-3">EDIT INFORMATION SUBJECT </h2>
            </div>
            <div class="card-body">
                <form action="edit <?php echo $subject->id_subject;?>" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group text" id="id_subject">ID SUBJECT</span>
                        <input type="text" class="form-control" placeholder="ID SUBJECT"
                                aria-label="id_subject" aria-describedby="id_subject"
                                name="id_subject" value ="<?php echo $subject->id_subject; ?>" readonly
                        />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group text" id="name_subject">NAME SUBJECT</span>
                        <input type="text" class="form-control" placeholder="NAME SUBJECT"
                                aria-label="name_subject" aria-describedby="name_subject"
                                name="name_subject" value ="<?php echo $subject->name_subject; ?>"
                        />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group text" id="score">LESSON</span>
                        <input type="text" class="form-control" placeholder="LESSON"
                                aria-label="LESSON" aria-describedby="LESSON"
                                name="LESSON" value ="<?php echo $subject->lesson; ?>"
                        />
                    </div>
                    <button class="btn btn-success" name="btnSave"><i class='bx bxs-save'></i> SAVE</button>
                    <a href="<?=URLROOT?>/subject" class="btn btn-primary"><i class='bx bx-arrow-back'></i> BACK</a>
                </form>
            </div>
        </div>

    </section>
</body>

</html>