<div>
    <form>
        <input type="text" placeholder="Название новости" wire:model="news.title">
        <br> <br>

        @foreach ($news_parts as $id => $news_part)
            <div wire:key="news-part-{{ $news_part->id }}">

                {{ $id }} , {{ $news_part }}
                <br><br>
                <input type="text" placeholder="Enter text" wire:model="news_parts.{{ $id }}.data">
                <br>


                <button wire:click.prevent="saveText({{ $id }})">Save</button>
                <br>

                <button wire:click.prevent="removeText({{ $news_part->id }})">Delete</button>
                <br><br>
            </div>
        @endforeach
        <br>
        <button wire:click.prevent="addText()">Добавить текст</button>
        <button wire:click.prevent="addNewsPart()">Добавить текст</button>
        <br><br>
        <button wire:click.prevent="save()">Save</button>
    </form>
</div>
