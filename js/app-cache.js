function onUpdateReady(){
    if(applicationCache.status === 4) {
        //alert('Este WebApp foi atualizado. A página será recarregada.');
        location.reload();
    }
}