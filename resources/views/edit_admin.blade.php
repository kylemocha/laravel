<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Update User
                        <a href="{{ url('admin') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ url('update-admin/'.$users->id) }}" >
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group mb-3">
                            <label for="">Role</label>
                            <input type="text" name="is_admin" value="{{$users->is_admin}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$users->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$users->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phonenumber" value="{{$users->phonenumber}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{$users->address}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div