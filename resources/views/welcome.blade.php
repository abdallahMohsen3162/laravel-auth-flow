<x-layout title="Home Page">
    @guest
        <div class="guest">
            <a href="{{Route('register')}}">register</a>
            <a href="{{Route('login')}}">login</a>
        </div>
    @endguest

    @auth

        <form action="/destroy" method="POST" >
            @csrf
            <button type="submit">
                Logout
            </button>
        </form>

    @endauth
</x-layout>
