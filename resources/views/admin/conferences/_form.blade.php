<div class="mb-3">
    <label class="form-label">{{ __('messages.title') }}</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $conference['title'] ?? '') }}" required>
    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">{{ __('messages.description') }}</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $conference['description'] ?? '') }}</textarea>
    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">{{ __('messages.speakers') }}</label>
    <input type="text" name="speakers" class="form-control @error('speakers') is-invalid @enderror" value="{{ old('speakers', $conference['speakers'] ?? '') }}" required>
    @error('speakers') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">{{ __('messages.date') }}</label>
        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $conference['date'] ?? '') }}" required>
        @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">{{ __('messages.time') }}</label>
        <input type="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time', $conference['time'] ?? '') }}" required>
        @error('time') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
<div class="mb-3">
    <label class="form-label">{{ __('messages.address') }}</label>
    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $conference['address'] ?? '') }}" required>
    @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
