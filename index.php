<?php
    $people = array(
       array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
       array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
       array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
       array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
       array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
    );
?>

<!doctype html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"	"http://www.w3.org/TR/html4/strict.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
  <title>PHP Application Test</title>
  <script>
      //Callback function - included in a script tag rather than a full other file for simplicity
      function alertUser(first, last, email){
          alert(first + " " + last + ": " + email);
      }
  </script>
  <style>
      /* Some basic styles to make it easier to look at - would normally be in a seperate file*/
      table {
        margin: 5vh 0vh 0vh 5vw;
      }

      table tr td, th {
           padding: 10px;
      }

      table, td, th {
           border: 1px solid black;
      }
  </style>
</head>
<body>
  <table class = 'table-main'>
      <thead>
          <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name </th>
              <th>Email </th>
              <th>Alert</th>
          </tr>
      </thead>
      <?php
          /* The foreach loop - I elected to do this with just PHP to keep things simple. I noticed that you had linked
          to JQuery and Angular, which I have some familiarity with. I decided not to make use of these libraries for the
          sake of simplicity */
          foreach($people as $person)
             echo "<tr>
                     <td>", $person["id"],         "</td>
                     <td>", $person["first_name"], "</td>
                     <td>", $person["last_name"],  "</td>
                     <td>", $person["email"],      "</td>
                     <td>
                         <button onClick = 'alertUser(
                             \"", $person["first_name"],"\",
                             \"", $person["last_name"], "\",
                             \"", $person["email"],     "\")'
                         >
                             Alert
                         </button>
                     </td>
                   </tr>"
      ?>
  </table>
</body>
</html>
