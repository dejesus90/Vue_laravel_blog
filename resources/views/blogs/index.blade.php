@extends("layouts.app")

@section("content")
    <nav>
        <router-link to="/nuevoItem">nuevo Blog</router-link>
        <router-link to="/lista">Lista</router-link>
    </nav>
    <div>
        <router-view><router-view>
    </div>
@endsection