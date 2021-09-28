@extends('core.content')

@section('title', 'Not access')
<head><meta name="csrf-token" content="{{ csrf_token() }}"></head>

@section('content')
    <div class="content-board">
        <div class="vertical_gap">
            <h2 class="h2_tall_black">403</h1>
            <h2 class="h2_tall_black">доступ запрещен</h1>
        </div>
    </div>
</div>
</div>
@endsection
