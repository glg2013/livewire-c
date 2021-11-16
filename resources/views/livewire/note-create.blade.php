<div class="mb-4">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <form wire:submit.prevent="createNote">
        <div class="form-group">
            <label for="note-content">留言：</label>
            <textarea wire:model.lazy="content"
                class="form-control @error('content') is-invalid @enderror" id="note-content" rows="3">
            </textarea>
            @error('content')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">创建留言</button>
    </form>
</div>
