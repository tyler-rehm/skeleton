<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
    {{ $attributes['modal_button'] }}
</button>
<div class="modal inmodal" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">{{ $attributes['modal_title'] }}</h4>
                <small class="font-bold">{{ $attributes['modal_description'] }}</small>
            </div>
            <div class="modal-body">
                @yield('modal_body')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">{{ $attributes['modal_submit'] }}</button>
            </div>
        </div>
    </div>
</div>