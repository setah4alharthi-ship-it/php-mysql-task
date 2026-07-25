function toggleStatus(id){

    let data = new FormData();

    data.append("id", id);

    fetch("toggle.php", {
        method: "POST",
        body: data
    })

    .then(response => response.text())

    .then(status => {

        document.getElementById("status" + id).innerHTML = status;

    });

}