const Debug = {
    autoReload: false,
    autoReloadInterval: 5
};

if(Debug.autoReload == true){
    setInterval(() => {window.location.reload()}, Debug.autoReloadInterval * 1000);
}