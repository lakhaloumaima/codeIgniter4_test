<!DOCTYPE html>
<html>

<head>
    <title>Users </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .form-check-inline .form-check-label::before {
            background-color: green;
        }

        /* checked state */
        .form-check-inline .form-check-input:checked~.form-check-label::before,

        .form-check-inline .form-check-input:checked~.form-check-label::after {
            background-color: green;


        }
    </style>

</head>

<body>
    <div  style="background-color:lightcyan ;">
        <br>
        <div class="container" > 
        <h1> Ajouter un agriculteur </h1> <br>
        <div class="container card" style="border-radius: 1rem;">
           
                <br>
                <form method="post">
                    <div class="row g-3">
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input style="border-color: green ;  " class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="F">
                                <label class="form-check-label" for="inlineRadio1">Mr.</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input style="border-color: green ;  " class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="M">
                                <label class="form-check-label" for="inlineRadio2">Mme.</label>
                            </div>

                        </div>
                        <div class="col-auto">
                            <input type="text" placeholder="Nom" name="nom" class="form-control" aria-describedby="emailHelp">
                        </div>

                        <div class="col-auto">

                            <input type="text" placeholder="Prénom" name="prenom" class="form-control">
                        </div>
                        <select class="col-auto" name="age" class="form-select" multiple>
                            <option disabled>Tranche d'age </option>
                            <option value="40-50">40-50</option>
                            <option value="30-40">30-40</option>
                            <option value="20-30">20-30</option>
                        </select>
                        <br>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Ajouter </button>
                        <br> <br>


                    </div>


                </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Cvl</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($users) :  ?>
                            <?php foreach ($users as $row) :  ?>
                                <tr>
                                    <th scope="row"> x </th>
                                    <td> <?php echo $row['genre'];  ?> </td>
                                    <td> <?php echo $row['nom'];  ?> </td>
                                    <td> <?php echo $row['prenom'];  ?> </td>
                                    <td> <?php echo $row['age'];  ?> </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>


                    </tbody>
                </table>

           
        </div> <br>
        </div>
    </div>
</body>

</html>