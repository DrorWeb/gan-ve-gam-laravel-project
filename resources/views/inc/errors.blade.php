@if($errMsg = Session::get('errMsg'))
<div id="smModal" class="modal fade" data-autoload="true" data-autoload-delay="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title color-9" id="myModalLabel">שגיאה</h4>
            </div><!-- /Modal Header -->
            <!-- body modal -->
            <div class="modal-body clearfix">
                <p><strong> {{$errMsg}} </strong></p>
            </div>
        </div>
    </div>
</div>
@elseif($errors->any())

<div id="smModal" class="modal fade" data-autoload="true" data-autoload-delay="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title color-9" id="myModalLabel">אווופס...</h4>
            </div><!-- /Modal Header -->
            <!-- body modal -->
            <div class="modal-body clearfix">
                @foreach ($errors->all() as $error)

                <p><strong> {{$error}} </strong></p>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endif