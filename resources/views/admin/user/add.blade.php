<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                    @if (isset($user))
                    <form action="/admin/user/{{$user->id}}"method="POST">
                        @method('PUT')
                    @else
                        <form action="/admin/user"method="POST">
                    @endif
                    @csrf
                <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Username" value="{{isset ($user) ? $user->name : old ('name')}}">
                     @error('name')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <!-- <div class="form-group">
                    <label for="">Level</label>
                    <input type="text" name="level" class="form-control @error('level') is-invalid @enderror"
                    placeholder="level" value="{{isset ($user) ? $user->level : old ('level')}}">
                     @error('level')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div> -->

                <div class="form-group">
                <label for="">level</label>
                <div col-md-6>
                <select name="level" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                </div>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                    placeholder="Email" value="{{isset($user) ? $user->email : old ('email')}}">
                    @error('email')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="Password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="********">
                    @error('password')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror" placeholder="********">
                    @error('re_password')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <button type="submit" class=" btn btn-primary">Simpan</button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>