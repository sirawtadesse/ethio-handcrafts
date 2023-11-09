<div style="display: flex; justify-content: center; align-items: center; height: 50vh; background-color: #f2f2f2;">
  <div style="width: 30%; border: 1px solid #ccc; padding: 20px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="text-align: center; margin-bottom: 20px;">
      <img src="/admin/assets/images/logo.svg" alt="Logo" style="width: 10%; height: auto; max-width: 10px;">
    </div>

    <div class="mb-4" style="color: #f00;">
      @if (session('status'))
        {{ session('status') }}
      @endif

      @if (session('errors'))
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
    </div>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-4">
        <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
        <input type="email" id="email" name="email" style="width: 100%; padding: 5px; border: 1px solid #ccc;" required autofocus>
      </div>

      <div class="mb-4">
        <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
        <input type="password" id="password" name="password" style="width: 100%; padding: 5px; border: 1px solid #ccc;" required>
      </div>

      <div class="mb-4">
        <label for="remember_me" style="display: block; margin-bottom: 5px;">
          <input type="checkbox" id="remember_me" name="remember" style="margin-right: 5px;">
          <span>Remember me</span>
        </label>
      </div>

      <div>
        <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px;">Log in</button>
      </div>

      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" style="display: block; text-align: center; margin-top: 10px;">Forgot your password?</a>
      @endif
    </form>
  </div>
</div>
