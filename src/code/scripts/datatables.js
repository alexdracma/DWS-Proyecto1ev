const path = window.location.pathname;

let dataTable;
switch (path) {
    case '/personal':
        dataTable = new simpleDatatables.DataTable("#prestamosTable", {
            labels: {
                placeholder: "Buscar...",
                perPage: "{select} &nbsp;&nbsp;&nbsp;Préstamos por página",
                noRows: "No se han encontrado registros",
                info: "Mostrando registros {start} a {end} de {rows} totales",
            },
            perPage: 5,
            columns: [
                { select: 2, sort: "desc" }
            ]
        })
    break;
    case '/libros':
        dataTable = new simpleDatatables.DataTable("#librosTable", {
            labels: {
                placeholder: "Buscar...",
                perPage: "{select} &nbsp;&nbsp;&nbsp;Libros por página",
                noRows: "No se han encontrado registros",
                info: "Mostrando registros {start} a {end} de {rows} totales",
            },
            perPage: 7,
            perPageSelect: [7,14,21,28,35]
        })
    break;
}

const select = document.querySelector('.dataTable-selector')
select.classList.add('form-select')

