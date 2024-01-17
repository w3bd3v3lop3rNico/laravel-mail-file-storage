<h1>Ciao Amministratore</h1>
<div>
    <h3>Hai un nuovo utente registrato</h3>
    <ul>
        <li>
            <strong>Nome:</strong> {{ $lead->name }}
        </li>
        <li>
            <strong>Email:</strong> {{ $lead->email }}
        </li>
    </ul>
    <p>
        <strong>Messaggio:</strong> <br>
        {{ $lead->message }}
    </p>
</div>