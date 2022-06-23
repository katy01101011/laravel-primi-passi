<!DOCTYPE html>
<html lang="en">

<head>
    <x-head></x-head>
    {{-- Title --}}
    <title>Boolean | La tech academy online per lanciare la tua carriera</title>
</head>

<body>
    <x-header></x-header>
    <main>
        <div class="container">
            <x-jumbo></x-jumbo>
            <x-corsi></x-corsi>
        </div>
    </main>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: rgb(247, 249, 252);
        font-family: 'Lexend Deca', sans-serif;
    }

    .container {
        width: 910px;
        margin: 0 auto;

    }

    h2 {
        font-size: 3.2rem;
        line-height: 4rem;
        margin-bottom: 1.4rem;
    }

    h3 {
        font-size: 2.9rem;
        font-weight: 500;
    }

    p {
        font-size: 1.4rem;
        line-height: 1.8rem;
        margin-bottom: 2rem;
        font-weight: 300;
    }
</style>