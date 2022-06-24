<?php
$navData = [
    [
        'name' => 'Corsi',
        'route' => route('corsi'),
        'options' => ['Full-Stack Web Developer', 'Data Analytics'],
    ],
    [
        'name' => 'Academy',
        'route' => route('academy'),
        'options' => ['Recensioni', 'Career Service', 'Chi Siamo', 'Perché Boolean', 'FAQ'],
    ],
    [
        'name' => 'Aziende',
        'route' => route('aziende'),
        'options' => ['Servizi per la tua azienda', 'Assumi gratis uno studente'],
    ],
    [
        'name' => 'Eventi',
        'route' => route('eventi'),
    ],
];
?>

<header>
    <a href="{{ route('home') }}">
        <img src="/logo.png" alt="">
    </a>
    <ul>
        @foreach ($navData as $link)
            <li>
                <a href="{{ $link['route'] }}">{{ $link['name'] }} </a>
                @if (!$loop->last)
                    <i class="fas fa-chevron-down"></i>
                @endif
            </li>
        @endforeach
    </ul>
    <button>
        <a href="{{ route('iscriviti') }}">Iscriviti</a>
    </button>
</header>

<style>
    header {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        width: 100%;
        height: 66px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-family: 'Lexend Deca', sans-serif;
        padding: 0 4.5rem;
        position: fixed;
        background-color: white;
    }

    header img {
        height: 30px;
    }

    ul {
        list-style: none;
        display: flex;
    }

    li {
        margin: 1rem;
        position: relative;
    }

    a {
        text-decoration: none;
        color: black;
        font-weight: 600;
        font-size: .9rem;
    }

    i {
        font-size: .7rem;
        margin-left: .2rem;
        color: rgb(87, 87, 87);
    }

    button {
        background-color: rgb(53, 53, 236);
        color: white;
        border: none;
        font-size: .95rem;
        font-weight: 600;
        padding: .7rem 1.4rem;
        cursor: pointer;
    }

    button a {
        width: 100%;
        height: 100%;
        color: white;
    }
</style>

<script scoped>
    tendina() {
        alert('ciao')
    }
</script>
