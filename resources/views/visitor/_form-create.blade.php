<form action="{{ route('branch.store') }}" method="POST">
    @csrf
    <div class="form-group row col-md-6">
        <label>Nama Cabang</label>
        <input type="text" name="branch" class="form-control @error('branch') is-invalid @enderror"
            placeholder="Nama Cabang" value="{{ old('branch') }}">
        @error('branch')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Reset</button>
</form>
