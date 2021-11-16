@if($errMsg = Session::get('errMsg'))
<div class="container">
    <div class="row flash-box">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="alert alert-danger  margin-bottom-30">

                <p><strong> {{$errMsg}} </strong></p>
            </div>
        </div>
    </div>
</div>
@elseif($errors->any())
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="alert alert-danger  margin-bottom-30">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                @foreach ($errors->all() as $error)

                <p><strong> {{$error}} </strong></p>
                @endforeach

            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endif