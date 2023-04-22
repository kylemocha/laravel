<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Add User
                        <a href="{{ url('admin') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ url('add_user/'.$users->id) }}" >
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group mb-3">
                            <label for="">Role</label>
                            <input type="text" name="is_admin" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password"  class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>