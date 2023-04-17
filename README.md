## Recap

1. components (layout, navbar, footer, starter template)
2. building asset (npm install, npm i bootstrap)
3. rotte
4. controller
5. viste


# FORM

Un form è un componente html che ci permette di mandare dati al server mediante una richiesta

Caratteristiche

action -> è la rotta a cui manda la richiesta. Se non è specificata la action verrà mandata una richiesta alla rotta in cui mi trovo

method -> è il comando HTTP con cui lancio la richiesta (GET, POST, PUT, PATCH, DELETE). Se non è specificato
di default verrà inviata una richiesta di tipo GET


attributo name dei campi input -> ogni campo del form deve avere l'attributo name per poter essere passato


Quando siamo in presenza di richieste di tipo GET stiamo mandando i dati in query string: è il procedimento
che ci permette di inserire dei parametri nella url

E' un insieme di coppie chiave valore divise dalla & 

http://127.0.0.1/search ? nome_chiave = valore & nome_chiave = valore


-> nelle richieste di tipo POST i dati non viaggiano in query string ma vengono inglobati all'interno del body della richiesta


CSRF -> Cross Site Request Forgery

@csrf -> inserisce un token attraverso la direttiva blade


# Invio Mail

1. creare un mailable: php artisan make:mail ContactMail

2. Servizio che usa Laravel per inviare le email: MAILTRAP

3. Istruzione per invio email Mail::to()->send();
    -   to() -> indichiamo a quale indirizzo devo inviare
    -   send() -> indichiamo COSA inviare -> quale oggetto? 



# Passaggi Form

Rotta -> Controller -> ritorna una vista. 
-> Quando invio i dati dal form scatta un'altra rotta che esegue un'altra funzione contactSend() che prende i dati 

-> All'interno della contactSend() devo fare qualcosa con questi dati: li stampo, oppure li do in pasto ad un
oggetto che è in grado di inviare email