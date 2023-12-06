function populateDocData() {
    let table = document.getElementById("doc-data");

    fetch("get_doc_data.php").then((response) => {
        return response.json();
    }).then((data) => {
        all_users = data;
        all_users.forEach(doc => {
            let row = document.createElement("tr");
            let docnum = document.createElement("td");
            let appnum = document.createElement("td");
            let link = document.createElement("td");
            let doctype = document.createElement("td");

            docnum.innerHTML = doc[0];
            appnum.innerHTML = doc[1];
            link.innerHTML = doc[2];
            doctype.innerHTML = doc[3];

            row.appendChild(docnum);
            row.appendChild(appnum);
            row.appendChild(link);
            row.appendChild(doctype);

            table.appendChild(row);
        });
    })
}