function generate() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        console.log('Ready State: ', this.readyState);
        console.log('Status code: ', this.status);
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("data_here").innerHTML = this.responseText;
            console.log('Ready State: ', this.readyState);
            console.log(responseText);
        }
    }
    xmlhttp.open("GET", generate.php);
    xmlhttp.send;
}