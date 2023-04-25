<div class="col-md-6">
    <h1>{{ $thread->subject }}</h1>
    @each('messages', $thread->messages, 'message')

    @include('form-message')
</div>