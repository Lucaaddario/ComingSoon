## 1. SETUP
1. Abbiamo configurato il nostro composer, npm, env, app.css, app.js e components layout.
2. Abbiamo pubblicato la storage con php artisan storage:link.
3. Abbiamo iniziato a lavorare su tutta la parte grafica front-end creando i componenti e le pagine.
## 2. CREAZIONE PAGINA CREA PRODOTTO E LA SUA CONFIGURAZIONE
4. Abbiamo creato un pagina per creare un prodotto, con la sua funzione product_create di tipo GET e abbiamo creato una funzione di tipo POST store_product che prenderà un request (creata request personalizzata) all'interno.
5. Abbiamo creato la tabella products nel database con una colonna user_id che si collega alla foreign key 'id' di 'users'.
6. Abbiamo creato il modello product e collegato i modelli user e product con hasMany e belongsTo.
7. Abbiamo catturato i dati della richiesta nel database con:
$product = Product::create(['title'=>$request->input('title'),'category'=>$request->input('category'),'description'=>$request->input('description'),// 'user_id'=>Auth::user()->id,]);if ($request->image) {$product->image = $request->file('image')->store('public/products/image');$product->save();}
8. Abbiamo ritornato un redirect ad una rotta.
9. Abbiamo trasferito tutti i prodotti nella vista 'welcome' con $products = Product::All()->sortByDesc('created_at'); return view('welcome' , compact('products'));
## 3. CREAZIONE REGISTER LOGIN LOGOUT CON FORTIFY
10. Abbiamo creato un form per la registrazione e per il login e abbiamo, seguendo la documentazione, configurato fortify. Sostituendo in RouteServiceProvider "/home" con "/" ed abbiamo inserito in app.php in Service Provider la stringa         App\Providers\FortifyServiceProvider::class.
11. Abbiamo collegato il form di registrazione all'action /register e il login all'action /login.
12. Abbiamo collegato il link del logout ad un form con action /logout.
## 4. IMPLEMENTAZIONE ISADMIN CON MIDDLEWARE AUTH E ADMIN
13. Abbiamo implementate nella sezione users un campo isAdmin che è 1 se l'utente è admin e 0 se non lo è.
14. Abbiamo inserito nel controller article un middleware di default Auth che è public function __construct()
    {$this->middleware('auth');} che vieta l'accesso a tutti i membri non loggati.
15. Abbiamo creato un middleware custom con php artisan make:middleware isAdmin.
16. All'interno del middleware abbiamo fatto un controllo if(Auth::user(){if(Auth::user()->isAdmin === 1){
return $next($request);}}) Ritornando un redirect alla welcome con un messaggio di errore. In questo caso abbiamo vietato l'accesso a tutti coloro i quali sono loggati MA NON SONO ADMIN.
17. Abbiamo registrato il middleware nel Kernel nel protected middlewareAlias = 'admin' => \App\Http\Middleware\IsAdmin::class,
18. Nel controller di product, abbiamo aggiunto il nuovo middleware nel constructor-> public function __construct()
    {$this->middleware('auth'); $this->middleware('admin');}
## 5. CREAZIONE DB MANY TO MANY
1. Creata tabella subcategories ed il suo modello con il fillable 'name'
2. Nella tabella abbiamo inserito il campo name e fuori dallo schermo abbiamo creato un $subcategories = [] con all'interno tutte le sottocategorie per un prodotto. Con un for each ($subcategories as $subcategory) abbiamo creato una sottocateria tramite il modello con Subcategory::create(['name'=>$subcategory]);
3. Abbiamo migrato la nuova tabella ed adesso nel database abbiamo la tabella subcategories con tutte le nostre sottocategorie.
4. Abbiamo creato una tabella PIVOT tra product e subcategory con $php artisan make:migration create_product_subcategory_table - Il nome della tabella PIVOT viene scritto con le tabelle collegate al singolare e in ordine alfabetico (product_subcategory);
5. Abbiamo creato all'interno della tabella PIVOT una colonna per il product_id ed una colonna per il subcategory_id. Abbiamo assegnato una foreign key ad entrambe le colonne che si collegano ai suoi rispettivi
ID.Schema::create('product_subcategory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->timestamps();
        });
6. Nei rispettivi modelli PRODUCT e SUBCATEGORY abbiamo inserite le funzioni per collegarli tra di loro. Nel modello PRODUCT abbiamo messo la funzione subcategories belongstoMany e lo stesso nel modello SUBCATEGORY una funzione products:
public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class);
    }
7. Abbiamo richiamato nel controller ProductController nella funzione create_product che ritorna la vista del form di creazione prodotto anche la variabile $subcategories = Subcategory::All() e ritornando anche la sua compact.
8. Nella funzione store_product dopo aver creato il prodotto salviamo anche le sottocategorie nel DB con $product->subcategories()->attach($request->subcategories)

## 6. FRONTEND MANY TO MANY
1. Abbiamo modificato il nostro form di creazione prodotti andando ad aggiungere per ogni $subcategories as $subcategory una checkbox: richiamando $subcategory->name nell'id e nella label e $subcategory->id nella value;
