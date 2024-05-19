<x-layout>
    <div class="contiener">
    <form action="/login" method="post">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label>

            <input class="@error("email") has-error @enderror" value="{{ old('email') }}" type="text" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="@error("password") has-error @enderror" value="{{ old('password') }}" type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <input type="submit">
        </div>
    </form>
    </div>
    </x-layout>
