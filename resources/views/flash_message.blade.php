@if ($message = Session::get('updated'))
    <h3 class="flash-msg">{{ $message }}</h3>
@elseif($message = Session::get('created'))
    <h3 class="flash-msg">{{ $message }}</h3>
@elseif($message = Session::get('deleted'))
    <h3 class="flash-msg">{{ $message }}</h3>
@endif