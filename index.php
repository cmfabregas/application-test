
<html>

<head>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">


    Mootools <script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
    JQuery <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--AngularJS <script src="ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>-->

</head>
<body>
    <?php
    $people = array(
        array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
        array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
        array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
        array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
        array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
    );


    echo sizeof($people)."<br>";
    ?>

    <script>
        $(document).ready(function(){
            $(".modifyButton").click(function(){


                var $row = $(this).closest("tr");    // Find the row

                var $firstName = $row.find(".first_name").text(); // Find the text
                var $lastName = $row.find(".last_name").text();
                var $email = $row.find(".email").text();


                var $info = $firstName + " " + $lastName + " " + $email;
                alert($info);

            });

        });
    </script>

    <table style = "width:50%" id = "table">

        <tr>
            <th>ID:</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Button</th>
        </tr>

            <?php
                for($x =0; $x < sizeof($people); $x++)
                {

                    echo "<tr>";
                    foreach ($people[$x] as $key => $value)
                    {
                        echo "<th value='.$key.' class='$key' id='values'>".$value."</th>";
                    }

                    echo "<th><button type='button' class='modifyButton' id='displayButton'> Display </button></th>";

                    echo "</tr>";

                }

            ?>

    </table>

</body>

</html>
