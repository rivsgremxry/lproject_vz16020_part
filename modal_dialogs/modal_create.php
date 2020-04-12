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
                <form action="modal_dialogs\create_record.php" method="post">
                    <label for="title">Prasības nosaukums:</label><br>
                    <input type="text" name="title"><br>
                    <label for="description">Prasības mērķis un apraksts:</label><br>
                    <textarea type="text" name="description" cols="40" rows="5"></textarea><br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>