<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section id="subject">
        <div class="container">
            <h2 class="text-center my-3">INFORMATION SUBJECT</h2>
        </div>
        <div class="row" style="margin-left:150px;">
            <div class="col-md-10">
                <a href="<?=URLROOT?>/subject/add" class="btn btn-primary my-3"><i class='bx bx-cart-add'></i> ADD</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NUMBERS</th>
                            <th>ID SUBJECT</th>
                            <th>NAME SUBJECT</th>
                            <th>LEASSON</th>
                            <th>FUNCTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $num = 0;
                            foreach ($data['subject'] as $item):
                                $num ++;
                        ?>
                        <tr>
                            <td> <?php echo $num ; ?> </td>
                            <td> <?php echo $item->id_subject ?> </td>
                            <td> <?php echo $item->name_subject ?> </td>
                            <td> <?php echo $item->lesson ?> </td>
                            <td>
                                <a href="<?=URLROOT?>/subject/detail/ <?php echo $item->id_subject ?>"
                                    class="btn btn-primary"> <i class='bx bxs-user'></i> </a>
                                <a href="<?=URLROOT?>/subject/edit/ <?php echo $item->id_subject ?>"
                                    class="btn btn-success"> <i class='bx bx-edit'></i></a> 
                                <a href="<?=URLROOT?>/subject/delete/ <?php echo $item->id_subject ?>"
                                    class="btn btn-danger"><i class='bx bxs-trash-alt'></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php 
                        endforeach;
                     ?>
                </table>
            </div>
        </div>
    </section>

</body>

</html>