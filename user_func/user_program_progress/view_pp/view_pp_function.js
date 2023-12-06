function populateUserData() {

    // Get certification table
    const certTable = document.getElementById("user-data");
  
    // Populate certification table
    fetch("view_cert_data.php")
      .then(response => response.json()) 
      .then(data => {
        for(let i = 0; i < data.length; i++) {
          let certRow = document.createElement("tr");
  
          for(let j = 0; j < data[i].length; j++) {
             let cell = document.createElement("td");
             cell.innerHTML = data[i][j];
             
             certRow.appendChild(cell);
          }
  
          certTable.appendChild(certRow);  
        }
      });
  
    // Get classes table 
    const classTable = document.getElementById("user-data2");
  
    // Populate classes table
    fetch("view_class_data.php")
      .then(response => response.json())
      .then(data => {
        for(let i = 0; i < data.length; i++) {
          
          let classRow = document.createElement("tr");
  
          for(let j = 0; j < data[i].length; j++) {
             let cell = document.createElement("td");
             cell.innerHTML = data[i][j];
             
             classRow.appendChild(cell); 
          }
  
          classTable.appendChild(classRow);
        }
      });

      // Get internships table
  const internTable = document.getElementById("user-data3");

  fetch("view_internship_data.php")
    .then(response => response.json())
    .then(data => {
      for(let i = 0; i < data.length; i++) {

        let row = document.createElement("tr");
        
        for(let j = 0; j < data[i].length; j++){
           let cell = document.createElement("td");
           cell.innerHTML = data[i][j];
           
           row.appendChild(cell);
        }

        internTable.appendChild(row);
      }
    });
  }