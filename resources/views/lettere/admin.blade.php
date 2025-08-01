{{-- sei stato contattato da ..{{ $firstName ?? 'Utente' }} </br>
con email {{ $Email ?? 'email utente '}}</br>
riguardo articolo  {{ $article_nome ?? 'nome articolo '}}</br>
con testo {{ $textArea ?? 'messaggio' }}</br> --}}

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Messaggio ricevuto</title>
</head>
<body>
    <h3>Sei stato contattato da <strong>{{  $user->name ?? 'Utente' }}</strong></h3>
    <h4>con email <strong>{{  $user->email ?? 'email utente' }}</strong></h4>
    <h4><strong>È Admin?</strong> {{ $is_admin ? 'Sì' : 'No' }} </h4>
    



<p><a href="{{ route('admin.activate', ['user' => $user->id]) }}">rendi questo user Admin</a></p> 

{{-- attivare  questa rotta  --}}


</body>
</html>


