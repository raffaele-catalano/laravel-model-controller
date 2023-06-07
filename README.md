<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="250"></a></p>

# Model Controller 
> `Repo` che comprende la prima vera interazione con il *database* utilizzando l'`ORM` di `Laravel`.

- Creare un nuovo progetto `Laravel 9.2`;
- Tramite `PHPMyAdmin` creare un nuovo *database* **laravel_model_controller**;
- Importare nel *database* la tabella **movies** in allegato;
- Inserire le credenziali per il database nel file `.env`;
- Creare un model Movie:
```
php artisan make:model Movie
```
- Creare un `controller` che gestirà la rotta `/`:
```
php artisan make:controller Guest/PageController
```
- All’interno della funzione **index()** del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

## Bonus
Creare la pagina di dettaglio del film.


