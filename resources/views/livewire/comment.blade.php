<div class="py-3">
    <div>
        <button class="btn btn-sm btn-dark" id="button" onclick="toggleButton()">Show</button>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="my-3" id="form">
        <form wire:submit.prevent="addComment">
            <div class="d-flex">
                <div class="field">
                    <input type="text" class="form-control @error('message')
                    is-invalid
                    @enderror" wire:model.lazy="message">
                    @error('comment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-dark">Comment</button>
                </div>
            </div>
        </form>
    </div>
    @foreach ($comments as $comment)
    <div class="card">
        <div class="card-body">
            <h3>{{ $comment['name'] }}</h3>
            <p>{{ $comment['created_at'] }}</p>
            <p>{{ $comment['comment'] }}</p>
        </div>
    </div>
    @endforeach
</div>


<script>
    function toggleButton(){
        $("#form").toggle();
    }
</script>
