<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar Libros</title>
    </head>
    <body>
        <h1 text-white text-center >Agrega libros de tu preferencia </h1>
        <input v-model="Autor" type="number" placeholder="Ingrese el autor del libro"/>
        <input v-model="Cantidad" type="number" placeholder="ingrese cantidad "/>
        <select v-model="Categoria" name="Categoria">
            <option value="Revista">Revista</option>
            <option value="Libro">Libro</option>
        </select>
        
        
        
        

    </body>
    </html>
</template>