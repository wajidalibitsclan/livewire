<div class="text-center">
    <div class="card">
        <div class="card-body">
            <h1>Register Form</h1>
            <form wire:submit.prevent="submit">
                <div class="form-group mb-2">
                    <label for="">Name</label>
                    <input type="text" class="form-control"   wire:model="name">
                    @error('name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="">Email</label>
                    <input type="text" class="form-control"   wire:model="email">
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="">Password</label>
                    <input type="text" class="form-control"   wire:model="password">
                    @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
