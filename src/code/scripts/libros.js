const dataTable = new simpleDatatables.DataTable("#librosTable", {
    labels: {
        placeholder: "Buscar...",
        perPage: "{select} &nbsp;&nbsp;&nbsp;Libros por página",
        noRows: "No se han encontrado registros",
        info: "Mostrando registros {start} a {end} de {rows} totales",
    }
})

dataTable.on('datatable.init', decoreActive)
dataTable.on('datatable.page', decoreActive)

function decoreActive() {
    const active = document.querySelector('ul.dataTable-pagination-list').querySelector('.active').firstElementChild
    active.style.color = '#fff'
    active.style.backgroundColor = '#7452c5'
}

const select = document.querySelector('.dataTable-selector')
select.classList.add('form-select')

