<div>
    <form >
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" wire:model="email" placeholder="Enter your email"
                required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" wire:model="password" placeholder="Enter your password"
                required>
        </div>
        <button wire:click.prevent="login" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
