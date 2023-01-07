const options = {
    create: false,
    persist: false,
    sortField: {
        field: "text",
        direction: "asc"
    }};

new TomSelect("#prestarUsuarios", options);

new TomSelect("#prestarLibros",  options);

new TomSelect("#devolverLibros", options);

new TomSelect("#changeUserSelect", options);