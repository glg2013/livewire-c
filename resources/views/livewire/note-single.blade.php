<div>
    {{-- Do your work, then step back. --}}

    <div class="media">
        <img src="{{ config('app.url') . '/avatars/rubber-duck.png' }}" class="mr-3" alt="...">
        <div class="media-body">
            <h5 class="mt-0">{{ $note->user->name }}</h5>
            <p>{{ $note->content }}</p>
        </div>
    </div>

</div>
