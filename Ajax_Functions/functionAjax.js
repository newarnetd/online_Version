function functionAjax(page, form, callback) {
    let ajax = new XMLHttpRequest();
    ajax.open("POST", page, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === XMLHttpRequest.DONE) {
            if (ajax.status === 200) {
                let data = ajax.responseText;
                callback(data); 
            }
        }
    };
    ajax.send(new FormData(form));
}
function sendValueAjax(page, value, callback) {
    let ajax = new XMLHttpRequest();
    ajax.open("POST", page, true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.onreadystatechange = function() {
        if (ajax.readyState === XMLHttpRequest.DONE) {
            if (ajax.status === 200) {
                let data = ajax.responseText;
                callback(data); 
            }
        }
    };
    ajax.send("value=" + encodeURIComponent(value));
}



        
        