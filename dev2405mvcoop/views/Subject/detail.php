<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD NEW</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
        $subject = $data['subject'];
    ?>
    <section id="subject" class="container">
        <div class="card">
            <div class="card-header">
                <h2 style="text-align:center;">ADD INFORMATION SUBJECT</h2>
            </div>
            <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group text">ID SUBJECT</span>
                        <input type="text" id="id_subject" name="id_subject" placeholder="ID SUBJECT"
                            class="form-control" aria-label="id_subject" aria-describedby="id_subject" value="" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group text">
                            NAME SUBJECT
                        </span>
                        <input type="text" id="name_subject" name="name_subject" placeholder="NAME SUBJECT"
                        class="form-control" aria-label="name_subject" aria-describedby="name_subject" value="" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group text">
                            LESSON
                        </span>
                        <input type="text" id="lesson" name="lesson" placeholder="LESSON"
                        class="form-control" aria-label="lesson" aria-describedby="lesson" vlaue="" />
                    </div>
                    <button class="btn btn-success" name="btnSave"><i class='bx bxs-save'></i> ADD</button>
                    <a href="<?URLROOT?>/subject" class="btn btn-primary"><i class='bx bx-arrow-back'></i> BACK</a>
            </div>
        </div>
    </section>
</body>

</html>