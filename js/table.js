let table = new DataTable('#mytable', {
    layout: {
        //topStart: 'search',
        //topEnd: 'pageLength',
        //bottomStart: 'paging',
        //bottomEnd: 'info',


        topStart: {
            pageLength: {
                menu: [3, 10, 20,]
            }
        }

    },


});

