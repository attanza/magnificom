<div class="field is-horizontal">
  <div class="field-label">
    <label class="label">Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input class="input" id="name" type="text" name="name"
        value="{{ $user->name ? $user->name : old('name') }}" required autofocus>
      </p>
      @if ($errors->has('name'))
      <p class="help is-danger">
        {{ $errors->first('name') }}
      </p>
      @endif
    </div>
  </div>
</div>
<div class="field is-horizontal">
  <div class="field-label">
    <label class="label">E-Mail Address</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input class="input" id="email" type="email" name="email"
        value="{{ $user->email ? $user->email : old('email') }}" required>
      </p>
      @if ($errors->has('email'))
      <p class="help is-danger">
        {{ $errors->first('email') }}
      </p>
      @endif
    </div>
  </div>
</div>
<div class="field is-horizontal">
  <div class="field-label">
    <label class="label">Phone</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input class="input" id="phone" type="text" name="phone"
        value="{{ $user->phone ? $user->phone : old('phone') }}" required>
      </p>
      @if ($errors->has('phone'))
      <p class="help is-danger">
        {{ $errors->first('phone') }}
      </p>
      @endif
    </div>
  </div>
</div>
<div class="field is-horizontal">
  <div class="field-label">
    <label class="label">Role</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <div class="select">
          <select name="role_id">
            <option value="" disabled selected>Select user role ...</option>
            @foreach ($roles as $role)
              <option value="{{$role->id}}"
                @if ($user->roles()->first() && $user->roles()->first()->id == $role->id)
                  selected
                @endif
                >
                  {{$role->name}}
              </option>
            @endforeach
          </select>
        </div>
      </p>
      @if ($errors->has('role_id'))
      <p class="help is-danger">
        {{ $errors->first('role_id') }}
      </p>
      @endif
    </div>
  </div>
</div>
<div class="field is-horizontal">
  <div class="field-label">
    <label class="label">Photo</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input class="input" id="photo" type="file" name="photo" accept="image/*">
      </p>
      @if ($errors->has('photo'))
      <p class="help is-danger">
        {{ $errors->first('photo') }}
      </p>
      @endif
    </div>
  </div>
</div>
<div class="field is-horizontal">
  <div class="field-label">
    <label class="label">Active</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input type="checkbox" name="is_active" 
        @if ($user->is_active)
          checked
        @endif>
      </p>
    </div>
  </div>
</div>
<div class="field is-horizontal">
  <div class="field-label"></div>
  <div class="field-body">
    <div class="field is-grouped is-grouped-right">
      <div class="control">
        <button type="submit" class="button is-primary">Save</button>
      </div>
    </div>
  </div>
</div>