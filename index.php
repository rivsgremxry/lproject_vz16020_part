<?PHP
include 'fill_dashboard/fill_module.php';
include 'fill_dashboard/fill_actor.php';
include 'fill_dashboard/fill_requirement.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>index.php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="collapse navbar-collapse pt-2 pl-5 pb-2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="pr-4 pt-2 pb-2">
                    <div>
                        <select class="form-control" id="module" name="module">
                            <option value="">--Show All Requirements--</option>
                            <?php echo fill_module($conn); ?>
                        </select>
                    </div>
                </li>
                <li class="pr-4 pt-2 pb-2">
                    <div>
                        <select class="form-control" id="actor" name="actor">
                            <option value="">--Actor list--</option>
                            <?php echo fill_actor($conn); ?>
                        </select>
                    </div>
                </li>
                <li class="pt-2 pb-2 pr-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createFunction">
                        Create </button>
                </li>
                <li class="pt-2 pb-2">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#saveChanges">
                        Save </button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-left: 4%; padding-top: 20px; padding-right: 30%">
        <div class="row" id="show_requirement" name="show_requirement">
            <?php echo fill_requirement($conn); ?>
        </div>
    </div>

    <?php

    include 'modal_dialogs\modal_create.php';

    include 'modal_dialogs\modal_save.php';

    ?>

    <script>
        $(document).ready(function() {
            $('#module').change(function() {
                var module_id = $(this).val();
                $.ajax({
                    url: "load_data.php",
                    method: "POST",
                    data: {
                        id: module_id
                    },
                    success: function(data) {
                        $('#show_requirement').html(data);
                    }
                });
            });
        });

        $(document).ready(function() {
            $('#module').change(function() {
                var module_id = $(this).val();
                if (module_id != '') {
                    console.log({
                        "name": "module_id",
                        "value": module_id
                    });
                }
            });
        });

        $(document).ready(function() {
            $('#actor').change(function() {
                var actor_id = $(this).val();
                if (actor_id != '') {
                    console.log({
                        "name": "actor_id",
                        "value": actor_id
                    });
                }
            });
        });
    </script>
</body>

</html>