<div class="modal fade" id="contactDetails" tabindex="-1" role="dialog" aria-labelledby="contactDetails" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="bg-white text-center text-red py-4">
                <i class="display-4 fas fa-exclamation-triangle mb-3"></i>
                <h5 class="d-block w-100 font-weight-light "> Missing Contact Details </h5>

            </div>
            <div class="modal-body bg-light">
                <form action="{{ route('save,phone') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="phone"> Phone Number <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                        <small id="emailHelp" class="form-text text-muted">Your phone number will be only shared to those who accepted your interest.</small>
                    </div>

                    <div class="mt-4 text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Not Now </button>
                        <button type="submit" class="btn btn-red ">Add Phone</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>