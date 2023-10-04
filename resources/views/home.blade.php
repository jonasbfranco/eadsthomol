<h1>Pagina inicial</h1>
<br />
@guest
<button><a href="{{route('login')}}">Login</a></button>
@endguest
<br />
@auth
<form action="{{ route('logout') }}" method="POST">
    @csrf
    @method('DELETE')
    <button><a href="{{ route('logout') }}"
                onclick = "event.preventDefault();
                this.closest('form').submit();">Logout
            </a>
    </button>
</form>
@endauth
