
/**
 * Get data from database via ajax (so it won't reload) and display using datatable
 * used at the start and #update button click event
 */
function loadDataTable()
{
    $.ajax({
        type: "get",
        url: "assets/php/database.php",
        dataType: "json"
    }).then((res) =>{
        $('#my-table').DataTable( {
        "data": res,
        "columns": [
            { "data": "id" },
            { "data": "nama" },
            { "data": "jabatan" },
            { 
                "data": "gaji", 
                "render": data => `Rp${(Number(data)).toLocaleString().replaceAll(',', '.')},00`
            },
            { "data": "telp" }
        ],
        "order": [[1, 'asc']]
    } );
    });
}

$(()=>{
    loadDataTable();

    $('#update').on('click', ()=>{
        $('#my-table').DataTable().destroy();
        loadDataTable();
    })
})