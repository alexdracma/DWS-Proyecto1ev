import {DataTable} from "../../node_modules/simple-datatables/src/index.js"
const dataTable = new DataTable("#librosTable", {
    labels: {
        placeholder: "Buscar...",
        perPage: "{select} &nbsp;&nbsp;&nbsp;Libros por página",
        noRows: "No se han encontrado registros",
        info: "Mostrando registros {start} a {end} de {rows} totales",
    }
})

const select = document.querySelector('.dataTable-selector')
select.classList.add('form-select')