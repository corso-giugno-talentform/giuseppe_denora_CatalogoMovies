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
