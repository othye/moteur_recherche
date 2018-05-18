<?php
    include('assets/connect.php');
    include('assets/requet.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>RECHERCHE DEPARTEMENTS </title>
</head>
<body>
    <section class="content">
        <header  class="text-center">
            <h1 id="h1"> Départements de France </h1>
        </header>

        <form  method="post" class="text-center">

            <section id="barRech">
                <input type="search" name="search" id="search" class="auto">
                <button type="submit" id="chercher">Chercher</button>
            </section>

            <section class="container">
                <table id="content" class="table">
                    <thead>
                        <th>Code de département </th>
                        <th>Nom de département</th>
                        <th>Site internet </th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </section>
        </form>

        <script id="template" type="x-tmpl-mustache">
            {{#datas}}
                <tr>
                    <td>{{code_dep}}</td>
                    <td>{{nom_maj}}</td>
                    <td><a class="lien" href="#">{{nom_url}}</a></td>
                </tr>
            {{/datas}}
        </script>

        <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"> </script>
        <script src="assets/js/mustache.js"></script>
        <script src="assets/js/script.js"></script>
    </section>
</body>
</html>