<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reults</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section id="result">
        <div class="container">
            <h2 class="text-center my-3">
                List Result
            </h2>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NUMBERS</th>
                                <th>ID</th>
                                <th>ID_SUBJECT</th>
                                <th>SCORE</th>
                                <th>FUNCTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $num = 0;
                                foreach ($data['result'] as $item):
                                    $num ++;
                                ?>
                            <tr>
                                <td> <?php echo $num ;?> </td>
                                <td><?php echo $item->id ?> </td>
                                <td> <?php echo $item->id_subject ?> </td>
                                <td> <?php echo $item->score ?> </td>
                                <td>
                                    <a href="<?=URLROOT?>/result/detail/ <?php echo $item->id;?>"
                                        class="btn btn-primary">View</a>
                                    <a href="<?=URLROOT?>/result/edit/ <?php echo $item->id;?> "
                                        class="btn btn-success">Edit</a>
                                    <a href="<?=URLROOT?>/result/delete/ <?php echo $item->id;?>"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php 
                                endforeach;
                                    
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>