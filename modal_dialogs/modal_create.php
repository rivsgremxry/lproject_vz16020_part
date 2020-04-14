<!-- modalCreate -->
<div class="modal fade" id="createFunction" tabindex="-1" role="dialog" aria-labelledby="createFunction" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding-left: 10px;">
            <div class="modal-header">
                <h5 class="modal-title" id="createFunction">Create</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body" name="modal-body">
                <form action="modal_dialogs\create_record.php" method="post" id="test1">
                    <div style="width: 50%;">
                        <select class="form-control" id="module1" name="module1">
                            <option value="">--Select module--</option>
                            <?php echo fill_module($conn); ?>
                        </select>
                        <br>
                        <select class="form-control" id="actor1" name="actor1">
                            <option value="">--Select actor--</option>
                            <?php echo fill_actor($conn); ?>
                        </select>
                    </div>
                    <label for="title">Title:</label><br>
                    <input type="text" name="title" style="width: 50%;"><br>
                    <label for="description">Descr:</label><br>
                    <textarea type="text" name="description" cols="40" rows="5"></textarea><br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" id="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var module_id, module_data;
        $('#module1').change(function() {
            module_id = $(this).val();
            module_data = ({
                "name": "module_id",
                "value": module_id
            });
        });

        $('#actor1').change(function() {
            actor_id = $(this).val();
            actor_data = ({
                "name": "actor_id",
                "value": actor_id
            });
        });

        if (module_data && actor_data != '') {
            $.ajax({
                url: "modal_dialogs/create_record.php",
                method: "POST",
                data: module_data,
                actor_data
            });
        }
    });
</script>