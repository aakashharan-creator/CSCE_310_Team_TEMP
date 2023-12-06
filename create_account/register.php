<!DOCTYPE html>
<html>

<head>
  <title>Create Account</title>
</head>

<body>

  <h1>Register</h1>

  <form method="post" action="register_handler.php">

    <div>
      <label>UIN</label><br>
      <input type="text" name="UIN" required>
    </div>

    <div>
      <label>First Name:</label><br>
      <input type="text" name="First_name" required>
    </div>

    <div>
      <label>Middle Initial:</label><br>
      <input type="text" name="M_initial">
    </div>

    <div>
      <label>Last Name:</label><br>
      <input type="text" name="Last_Name" required>
    </div>

    <div>
      <label>Username:</label><br>
      <input type="text" name="Username" required>
    </div>

    <div>
      <label>Password:</label><br>
      <input type="text" name="Password" required>
    </div>

    <div>
      <label>Email:</label><br>
      <input type="text" name="Email" required>
    </div>

    <div>
      <label>Discord name</label><br>
      <input type="text" name="Discord_Name" required>
    </div>

    <div>
      <label>Gender</label><br>
      <select id="gender" name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <div>
      <label>Hispanic or Latino</label><br>
      <select id="hispanic" name="hispanic">
        <option value="True">True</option>
        <option value="False">False</option>
      </select>
    </div>

    <div>
      <label>Race</label><br>
      <select id="race" name="race">
        <option value="Asian">Asian</option>
        <option value="Caucasian">Caucasian</option>
        <option value="African American">African American</option>
        <option value="European">European</option>
      </select>
    </div>

    <div>
      <label>US Citizen</label><br>
      <select id="citizen" name="citizen">
        <option value="True">True</option>
        <option value="False">False</option>
      </select>
    </div>

    <div>
      <label>First Gen</label><br>
      <select id="first_gen" name="first_gen">
        <option value="True">True</option>
        <option value="False">False</option>
      </select>
    </div>

    <div>
      <label>Major</label><br>
      <select id="major" name="major">
        <option value="CPSC">CPSC</option>
        <option value="CE">CE</option>
      </select>
    </div>

    <div>
      <label>Minor 1</label><br>
      <select id="minor1" name="minor1">
        <option value="N/A">N/A</option>
        <option value="CPSC">CPSC</option>
        <option value="CE">CE</option>
      </select>
    </div>

    <div>
      <label>Minor 2</label><br>
      <select id="minor2" name="minor2">
        <option value="none">N/A</option>
        <option value="CPSC">CPSC</option>
        <option value="CE">CE</option>
      </select>
    </div>

    <div>
      <label>Graduation</label><br>
      <select id="grad" name="grad">
        <option value="Spring 2024">Spring 2024</option>
        <option value="Fall 2024">Fall 2024</option>
        <option value="Spring 2025">Spring 2025</option>
        <option value="Fall 2025">Fall 2025</option>
        <option value="Spring 2026">Spring 2026</option>
        <option value="Fall 2026">Fall 2026</option>
      </select>
    </div>

    <div>
      <label>School</label><br>
      <select id="School" name="School">
        <option value="TAMU">Texas A&M</option>
      </select>
    </div>

    <div>
      <label>Classification</label><br>
      <select id="classification" name="classification">
        <option value="Freshman">Freshman</option>
        <option value="Sophomore">Sophomore</option>
        <option value="Junior">Junior</option>
        <option value="Senior">Senior</option>
        <option value="Super Senior">Super Senior</option>
        <option value="N/A">N/A</option>
      </select>
    </div>

    <div>
      <label>Phone</label><br>
      <input type="tel" name="phone" id="phone" required>
    </div>

    <div>
      <label>Type</label><br>
      <select id="type" name="type">
        <option value="Undergraduate">Undergraduate</option>
        <option value="Graduate">Graduate
        </option>
      </select>
    </div>

    <div>
      <label>Date of Birth</label><br>
      <input type="date" id="date" name="date" required/>
    </div>

    <div>
      <label>GPA</label><br>
      <input type="number" id="gpa" name="gpa" min="1" max="4" step="0.1" required>
    </div>

    <input type="submit" value="Register">

  </form>

</body>

</html>