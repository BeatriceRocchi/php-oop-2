# E-commerce animali

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L’e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi , cucce , etc.

Stampare delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

Nel “modellizzare” i dati pensare alla differenza che c’è fra prodotti (cibo, giochi , cucce…) e categorie (cani, gatti…) e come rappresentarli.

Creare prima una struttura logica e coerente e stampare tutto con var_dump(). Solo in un secondo momento creare un array di prodotti da stampare in pagina con un ciclo.

### Svolgimento

1. In Models, creare una classe 'Product' che contiene proprietà comuni alle diverse tipologie di prodotti (es. prezzo, tipologia, categoria)
2. In Models, creare per ogni tipologia di prodotto una classe figlia della classe 'Product' che contiene, in aggiunta alle proprietà comuni, le proprietà specifiche del prodotto (es. ingredienti per i prodotti di tipo cibo)
3. In data, creare un db contenenete alcune istanze per le varie classi
4. Creare un layout con una card per ogni prodotto
5. Aggiungere almeno un trait (es. review)
6. Aggiungere almeno un exception
