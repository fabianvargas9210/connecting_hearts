<div class="row">
    {{ Form::label($name, $label, array("class"=>"control-label")) }}
    {{ $control }}
    @if ($error)
        <p class="error_message">{{ $error }}</p>
    @endif
</div>