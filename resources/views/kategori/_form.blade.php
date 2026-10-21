@csrf

<div class="mb-3">
    <label for="name" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $kategori->name ?? '') }}" placeholder="Masukkan nama kategori..." required>
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Masukkan deskripsi (opsional)...">{{ old('description', $kategori->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="d-flex justify-content-between align-items-center mt-4">
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save"></i> Simpan
    </button>
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Batal
    </a>
</div>