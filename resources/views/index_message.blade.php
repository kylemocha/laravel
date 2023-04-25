<a href="{{ url('home_user') }}" class="btn btn-danger float-end">BACK</a>
@include('flash')

@each('=thread', $threads, 'thread', 'no-thread')