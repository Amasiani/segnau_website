@isset($join)
<div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" value="{{ old('firstname') }}" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="John" autofocus>
    @error('firstname')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" value="{{ old('lastname') }}" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Doe" autofocus>
    @error('lastname')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
@endisset
<div class="mb-3">
    <label for="firstname" class="form-label">Name</label>
    <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Adamu John" autofocus>
    @error('name')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autocomplete="TRUE" placeholder="example@example.com" autofocus />
    @error('email')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="tel" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="+234-0803-234-0000" autofocus>
    @error('phone')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="col-mb-8 py-2">
    <label for="message">Message</label>
    <textarea name="message" class="form-control @error('message') is-invalid @enderror"></textarea>
    @error('message')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
@isset($join)
<div class="mb-3">
    <label for="segid" class="form-label">SEG ID</label>
    <input type="number" value="{{ old('segid') }}" class="form-control @error('seg_id') is-invalid @enderror" id="segid" name="segid" autocomplete="TRUE" placeholder="00012345" autofocus />
    @error('segid')
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
    <label for="DOB" class="form-label">Birthday</label>
    <input type="date" value="{{ old('DOB') }}" class="form-control @error('DOB') is-invalid @enderror" id="DOB" name="DOB" autocomplete="TRUE" placeholder="YYYY-MM-DD" autofocus />
    @error('DOB')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
@endisset