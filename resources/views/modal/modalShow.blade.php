<!-- Show Modal -->
<div class="modal fade" id="show" aria-hidden="true" aria-labelledby="show" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Product Details:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Show a second modal and hide this one with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second
                    modal</button>details
            </div>
        </div>
    </div>
</div>
<script>
    $('#show').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget);
        var id = button.data('id');
        var modal = $(this);

        modal.find('.modal-header .modal-title').html(id);
    });
</script>
<!-- END Show Modal -->
