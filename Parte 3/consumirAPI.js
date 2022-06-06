let url = 'https://jsonplaceholder.typicode.com/users'

fetch(url)
    .then(response => response.json())
    .then(data => mostrarData(data))
    .catch(error => console.log(error))

const mostrarData = (data) => {
    console.log(data)
    let body = ''
    for (let i = 0; i < data.length; i++) {
        body += `<tr><td>${data[i].name}</td>
                     <td>${data[i].email}</td>
                     <td>${data[i].phone}</td>
                     <td>${data[i].company.name}</td>
                     <td>${data[i].website}</td></tr>`
    }
    document.getElementById('data').innerHTML = body
}


/* function onRequestHandler() {
    if (this.readyState === 4 && this.status === 200) {
        const data = JSON.parse(this.response);

        

        const template = data.map((datos) => `<td>${datos.name}</td>`);
        HTMLResponse.innerHTML = `<tr>${template}</tr>`;
    }
}

xhr.addEventListener('load', onRequestHandler);
xhr.open("GET", `${endPoint}`);
xhr.send(); */