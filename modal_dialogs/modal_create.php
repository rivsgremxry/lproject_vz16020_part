<!-- modalCreate -->
<div class="modal fade" id="createFunction" tabindex="-1" role="dialog" aria-labelledby="createFunction" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFunction">Create</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body" name="modal-body">
                <form action="modal_dialogs\create_record.php" method="post">
                    <!-- <div style="width: 40%;">
                        <select class="form-control" id="module" name="module">
                            <option value="">Select module</option>
                            <?php echo fill_module($conn); ?>
                        </select>
                    </div>
                    <br> -->
                    <label for="module_id">Module:</label><br>
                    <input type="text" name="module_id"><br>
                    <label for="title">Title:</label><br>
                    <input type="text" name="title"><br>
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