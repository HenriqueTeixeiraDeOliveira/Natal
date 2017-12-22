<div class="form-group">
    <label for="{{ $column }}">{{ $title }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $column }}" name="{{ $column }}" value="{{ old('$column') }}" {{$validate}}>
</div>