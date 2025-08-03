# Progetto Laravel - Catalogo Film


### Utente Admin
- Può caricare i film nel catalogo
- Può modificarli e cancellarli  
- Può visualizzare tutti i film

### Utente Registrato
- Può visualizzare la lista dei film
- Può accedere al dettaglio di ogni film

###  Utente Non-Registrato
- Può visualizzare solo l'homepage con i titoli

---

## Obiettivi del Progetto

### Setup Iniziale
1. **Inizializzazione progetto su GitHub**
2. **Creazione progetto Laravel con:**
   - Laravel Vite
   - Bootstrap
   - Template grafico di base
   - Componenti Blade


   la app si chiamerà CatalogoMovies
   
   ## implementazione delle rotte
   creazione rotte
   * name('pages.homepage');  per visualizzare la home con una lista non ordinata dei film in catalogo
   * name('films.index');  rotta che sarà visualizzata da utenti loggati che potranno vedere tutti i film in catalogo sotto forma di cards
   * name('films.create'); rotta che sara visibile all utente loggato come admin e permetterà di aggiungere film al catalogo, in particolare qui vedremo una tabella 
   * name('films.store');  rotta con il form di inserimento del nuovo film

   
   è possibile fare upload dell'immagine che viene sostituita da una di default in caso sia corrotta o non inserita in fase di creazione di un nuovo film nel catalogo 
   
   ## Implementazione delle views
   * nella index è presente un componente jumbotron oltre alla navbar : i titoli vengono visti
   sotto forma di lista non ordinata da utenti non loggati (da implementare la parte per utenti loggati)
   * implementazione della parte di backoffice GestioneFilm 
   con una tabella che mostra tutti i film , un bottone che rimanda ad un form di inserimento
## Implementazione delle auth
* installazione di fortify con i comandi 
   composer require laravel/fortify
   php artisan fortify:install
   php artisan migrate

* implementazione della doppia visualizzaione della home
  da guest è visibile solouna lista dei film in catalogo
  da loggato è possibile inserire i film 

## Attivazione delle MAIL
* con https://mailtrap.io/

## Attivazione di un ruolo Admin 
 
*il SUPER ADMIN ha la email admin@example.com con la quale  puo abiltare gli altri come admin 
 
* all'iscrizione  l'iscritto e l'Admin ricevono una email
* l'Admin ha la possibilità di rendere Admin un utente cliccando su un link ricevuto
per email
* in risposta nella home si vedrà un messaggio di successo 

* metodo aggiunto per controllare se un utente è admin
 ```php
    public function checkIsAdmin(){
        if($this->email=='admin@example.com'){
            return true;
        }else{
            return $this->is_admin;
        }
```

## Implementazione Crud
* Visualizza : dal tasto visualizza nella sezione dedicata all'Admin 
               è possibile visualizzare i dati salienti riguardante un Film in catalogo

* Update :  Da tasto Update si viene indirizzati in un "nuovo form" di update
            che mantiene i dati relativi al Film in questione prendendoli dal db
            con la possibiltà di cambiarli grazie al metodo  update() in FilmController

* Delete  : Dal tasto delete viene triggerata una modale che si comporta come   un vero form col method delete, e permette la cancellazione del film grazie all'ancoraggio statico tra il data-bs-target del button e l'id della modale

```php
                               <!-- bel bottone di delete --> 
                              <button data-bs-toggle="modal"
                                            
                               data-bs-target="#film-{{ $film->id }}">...
                                     

                              <!-- Modale -->
                              <div class="modal fade" id="film-{{ $film->id }}" 

```
## fixed
* risolto il problema di creazione nuovi film quando loggato come admin@example.com
aggiungendo il metodo checkIsAdmin()  anche al metodo store nel filmcontroller 
* descizione film mancante nelle card
