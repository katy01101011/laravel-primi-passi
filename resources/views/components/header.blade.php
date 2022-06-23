<header>
    <a href="{{route('home')}}">
        <img src="/logo.png" alt="">
    </a>
    <ul>
        <li>
            <a href="{{route('corsi')}}">Corsi <i class="fas fa-chevron-down"></i></a>
        </li>
        <li>
            <a href="{{route('academy')}}">Academy <i class="fas fa-chevron-down"></i></a>
        </li>
        <li>
            <a href="{{route('aziende')}}">Aziende <i class="fas fa-chevron-down"></i></a>
        </li>
        <li>
            <a href="{{route('eventi')}}">Eventi</a>
        </li>
    </ul>
    <button>Iscriviti</button>
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
</style>