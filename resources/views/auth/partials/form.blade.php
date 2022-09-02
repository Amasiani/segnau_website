
<div class="mb-3">
    <label for="name" class="form-label">First Name</label>
    <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="John" autofocus>
    @error('name')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="last_name" class="form-label">Last Name</label>
    <input type="text" value="{{ old('last_name') }}" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Doe" autofocus>
    @error('last_name')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="address" name="address" autocomplete="TRUE" placeholder="example@exampl.com" autofocus />
    @error('address')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="seg_id" class="form-label">SEG ID</label>
    <input type="number" value="{{ old('seg_id') }}" class="form-control @error('seg_id') is-invalid @enderror" id="seg_id" name="seg_id" autocomplete="TRUE" placeholder="00012345" autofocus />
    @error('seg_id')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="affilate" class="form-label">Affilate</label>
    <input type="text" value="{{ old('affilate') }}" class="form-control @error('affilate') is-invalid @enderror" id="affilate" name="affilate" autocomplete="TRUE" placeholder="Nnamdi Azikwe University Awka, Anambra State" autofocus />
    @error('affilate')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="birthday" class="form-label">Birthday</label>
    <input type="date" value="{{ old('birthday') }}" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" autocomplete="TRUE" placeholder="YYYY-MM-DD" autofocus />
    @error('birthday')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>