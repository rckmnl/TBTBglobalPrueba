let url = 'http://127.0.0.1:8000/api/alumnos'

fetch(url)
    .then(response => response.json())
    .then(data => mostrarData(data))
    .catch(error => console.log(error))

const mostrarData = (data) => {
    console.log(data)
    let body = ''
    for (let i = 0; i < data.length; i++) {
        body += `<tr><td>${data[i].id}</td>
                     <td>${data[i].nombre}</td>
                     <td>${data[i].apellido}</td>
                     <td>${data[i].email}</td>
                     <td>${data[i].edad}</td></tr>`
    }
    document.getElementById('data').innerHTML = body
}