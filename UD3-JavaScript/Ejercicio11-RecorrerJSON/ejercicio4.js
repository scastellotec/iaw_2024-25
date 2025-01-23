// Es el mismo archivo, pero os lo doy parseado para no tener que poner XAMPP en el examen
var data = JSON.parse('{ "posts": [{"id": 1,"title": "Mi primer post","content": "Este es el contenido de mi primer post en WordPress","author": "Juan Perez","comments": [{"id": 101,"author": "María Rodriguez","comment": "¡Gran post! ¡Sigue así!"},{"id": 102,"author": "Pedro Gomez","comment": "Interesante, gracias por compartir."}]},{"id": 2,"title": "Segundo post","content": "Aquí va el contenido de mi segundo post","author": "Ana López","comments": [{"id": 103,"author": "Carlos Sanchez","comment": "¡Excelente artículo!"}]}]}')
console.log(data)

/* METODO 1: Recorro todo el array y todos los campos existentes*/
// Mapeo el main porque dentro pondre el contenido
const seccionMain = document.getElementById("main");

// El atributo "posts" contiene un array con cada "post".
// De esta forma lo puedo recorrer cada post (en singular)
for(let i=0; i<data.posts.length; i++){
    let pos;
    let postTemporal = data.posts[i];

    // Con este bucle recorro todos los atribtuos de un unico post
    for ( pos in postTemporal) {
        console.log(pos + ":" + postTemporal[pos]);
        seccionMain.innerHTML += "<p>"+pos+":"+postTemporal[pos]+"</p>";
    }

    // El atributo comentario del post es un array y lo recorro
    for(let j=0; j<postTemporal.comments.length; j++){
        let comment = postTemporal.comments[j];
        let pos2;

        for ( pos2 in comment) {
            seccionMain.innerHTML += "<ul>";
            seccionMain.innerHTML += "<li>"+pos2+":"+comment[pos2]+"</li>";
            seccionMain.innerHTML += "</ul>";
        }
    }
}

/* Metodo 2: Solo recorro lo que me interesa */
const seccionMain2 = document.getElementById("main2");

// recorro todos los post que puedan existir
for(let i=0; i<data.posts.length; i++){
    let postTemporal = data.posts[i];

    seccionMain2.innerHTML += "<h1>"+postTemporal.title+"</h1>";
    seccionMain2.innerHTML += "<p>"+postTemporal.content+"</p>";

    // Recorro todos los posible comentarios (como también es un array es igual que los posts)
    for(let j=0; j<postTemporal.comments.length; j++){
        let commentTemp = postTemporal.comments[j];
        seccionMain2.innerHTML += "<ul>";
        seccionMain2.innerHTML += "<li>"+commentTemp.comment+"</li>";
        seccionMain2.innerHTML += "</ul>";
    }

}

