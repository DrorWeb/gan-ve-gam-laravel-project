@if($sm = Session::get('sm'))
<div class = "container">
    <div class = "row flash-box" style="display: block; float:none; z-index:1; position:relative">
        <div class = "col-md-6 col-md-offset-3">
            <div class = "alert alert-success margin-bottom-30">
                <button type = "button" class = "close" data-dismiss = "alert">
                    <span aria-hidden = "true">×</span>
                    <span class = "sr-only">Close</span>
                </button>
                <p><strong  class="text-center"> {{$sm}} </strong></p>
            </div>
        </div>
    </div>
</div>
@endif