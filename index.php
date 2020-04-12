<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Second App</title>
</head>

<body>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="collapse navbar-collapse pt-2 pl-5 pb-2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="pr-4 pt-2 pb-2">
                    <div>
                        <select class="form-control" id="moduleMenu" name="moduleList">
                            <option>Modulis 1</option>
                            <option>Modulis 2</option>
                        </select>
                    </div>
                </li>
                <li class="pr-4 pt-2 pb-2">
                    <div>
                        <select class="form-control" id="actorMenu" name="actorList">
                            <option>Izpilditājs 1</option>
                            <option>Izpilditājs 2</option>
                        </select>
                    </div>
                </li>
                <li class="pt-2 pb-2 pr-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createFunction"> Izveidot prasību </button>
                </li>
                <li class="pt-2 pb-2">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#saveChanges"> Saglabāt </button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="pt-4 ml-5 pl-3">
        <form action="" method="post">
            <div>
                <div class="form-check">
                    <div class="pt-4 ml-3">
                        <input class="form-check-input" type="checkbox" value="" id="1">
                        <label class="form-check-label mr-5 pr-4" for="1">Prasiba 1</label>
                    </div>

                    <div class="pt-4 ml-3">
                        <input class="form-check-input" type="checkbox" value="" id="2">
                        <label class="form-check-label mr-5 pr-4" for="2">Prasiba 2</label>
                    </div>

                    <div class="pt-4 ml-3">
                        <input class="form-check-input" type="checkbox" value="" id="3">
                        <label class="form-check-label mr-5 pr-4" for="3">Prasiba 3</label>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- modalCreate -->
    <div class="modal fade" id="createFunction" tabindex="-1" role="dialog" aria-labelledby="createFunction" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createFunction">Izveidot prasību</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <label for="title">Prasības nosaukums:</label><br>
                        <input type="text" name="title"><br>
                        <label for="introduction">Prasības mērķis un apraksts:</label><br>
                        <textarea name="introduction" cols="40" rows="5"></textarea><br><br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Izveidot</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modalSave -->
    <div class="modal fade" id="saveChanges" tabindex="-1" role="dialog" aria-labelledby="saveChanges" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="saveChanges">Saglabāt izmaiņas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>