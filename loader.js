var loader
loader = loader || (function () {
    var ajaxLoader = $('<div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 id="titulo" class="modal-title">Cargando...</h4></div><div class="modal-body"><div class="alert" role="alert alert-info"><div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div></div></div></div></div></div></div>')
    return {
        show: function() {
            ajaxLoader.modal('show')
        },
        hide: function () {
            ajaxLoader.modal('hide')
        },

    }
})()