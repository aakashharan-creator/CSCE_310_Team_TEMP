function populateEventData() {
    let table = document.getElementById("event-data");

    fetch("get_event_data.php").then((response) => {
        return response.json();
    }).then((data) => {
        all_users = data;
        all_users.forEach(doc => {
            let row = document.createElement("tr");
            let eventid = document.createElement("td");
            let uin = document.createElement("td");
            let pronum = document.createElement("td");
            let stadate = document.createElement("td");
            let statime = document.createElement("td");
            let location = document.createElement("td");
            let enddate = document.createElement("td");
            let endtime = document.createElement("td");
            let eventtype = document.createElement("td");

            eventid.innerHTML = doc[0];
            uin.innerHTML = doc[1];
            pronum.innerHTML = doc[2];
            stadate.innerHTML = doc[3];
            statime.innerHTML = doc[4];
            location.innerHTML = doc[5];
            enddate.innerHTML = doc[6];
            endtime.innerHTML = doc[7];
            eventtype.innerHTML = doc[8];

            row.appendChild(eventid);
            row.appendChild(uin);
            row.appendChild(pronum);
            row.appendChild(stadate);
            row.appendChild(statime);
            row.appendChild(location);
            row.appendChild(enddate);
            row.appendChild(endtime);
            row.appendChild(eventtype);

            table.appendChild(row);
        });
    })
}