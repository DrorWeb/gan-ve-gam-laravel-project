@if($confirmed = Session::get('ThankYouLarge'))
<div id="smModal" class="modal fade" data-autoload="true" data-autoload-delay="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title color-9 text-center" id="myModalLabel">תודה רבה</h4>
            </div><!-- /Modal Header -->
            <!-- body modal -->
            <div class="modal-body clearfix text-center">
                <p> <strong> {{$confirmed}} </strong> </p>
            </div>
        </div>
    </div>
</div>

@endif