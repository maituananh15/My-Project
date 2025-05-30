<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
        // echo 'Data';
        // print_r($data['major']);
    ?>
    <section id="major">
        <div class="container">
            <h2 class="text-center my-3">
                List Major
            </h2>
            <div class="row">
                <div class="col-md-12">
                    <a href="<?=URLROOT?>/major/create/" class="btn btn-primary my-2">ADD NEW</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Numbers</th>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>FUNCTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $num = 0;
                                foreach ($data['major'] as $item):
                                    $num ++;
                            ?>
                            <tr>
                                <td> <?php echo $num; ?> </td>
                                <td> <?php echo $item->id_major;?></td>
                                <td> <?php echo $item->name_major;?></td>
                                <td>
                                    <a href="<?=URLROOT?>/major/detail/<?php echo $item->id_major;?>"
                                        class="btn btn-primary">View</a>
                                    <a href="<?=URLROOT?>/major/edit/<?php echo $item->id_major;?>"
                                        class="btn btn-success">Edit</a>
                                    <a href="<?=URLROOT?>/major/delete/<?php echo $item->id_major;?>"
                                        onclick="return confirm('Do you want to delete?')"
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