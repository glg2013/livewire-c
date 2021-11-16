<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <livewire:note-create />

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id"/>
        <br>
    @endforeach

    {{ $notes->render() }}
</div>
