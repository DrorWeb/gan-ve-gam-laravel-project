@if($adminMust = Session::get('adminMust'))
<div id="smModal" class="modal fade" data-autoload="true" data-autoload-delay="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h1 class="modal-title color-9 text-center" id="myModalLabel">OOOOOOPS !!!</h1>
            </div><!-- /Modal Header -->
            <!-- body modal -->
            <div class="modal-body clearfix">
                <h3 class=" color-9 text-center"> <strong> {{$adminMust}} </strong> </h3>
            </div>
        </div>
    </div>
</div>
@endif