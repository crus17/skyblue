<div class="row">
    <div class="col-12">
        <form method="post" action="{{ route('updatebasic') }}" id="basicinfoform" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class=" form-row">
                <div class="form-group col-md-6">
                    <h5 class="">Phone Number</h5>
                    <input type="text" name="phone_number" class="form-control " value="{{ $settings->phone_number }}"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="">WhatsApp</h5>
                    <input type="text" name="whatsapp" class="form-control " value="{{ $settings->whatsapp }}"
                        required>
                </div>
                
            </div>

            <div class="mt-3 form-row">
                <div class="col-12">
                    <input type="submit" class="px-5 btn btn-primary btn-lg" value="Update">
                </div>
            </div>
        </form>
    </div>
</div>
