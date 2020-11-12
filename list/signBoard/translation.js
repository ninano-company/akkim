tsContainer = new Array();

tsLang = new Array();
tsEnglish = new Array();

$.ajax({
    method      : 'POST',
    url         : '../../ajax/tsLoader.php',
    traditional : true,
    data        : {
        'read'  : 'tsLang'
    },
    success     : function( data ) {
        // alert(data);
        object = JSON.parse(data);
        for( i = 0; i < object.length; i++ ) {
            let tsLang = new Array(object[i].cate, object[i].texta, object[i].textb, object[i].textc);
            tsContainer.push(tsLang);
        }
    },
    error       : function(request, status, error) {
        alert('hello');
    }
});

async function start() {
    await document.body.requestFullscreen();
    await screen.orientation.lock("portrait");
    ready();
}

