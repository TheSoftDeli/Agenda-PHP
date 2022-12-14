<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddressBook</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!--HTML CODE-->

    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>telefono</th>
            <th>email</th>
            <th>Città</th>
        </tr>
        <tr>
            
        </tr>

    </table>


    <!--END LANG_CODE-->
    <!--PHP CODE-->
    <?php 
        //CHADIA BAMAAROUF 5L - 07/12/2022
















        //CODICE PER STAMPARE QUELLO CHE CONTIENE IL CSV
        //Array di manipolazione
        /*
        $righe = [];
        $handle = fopen('data.csv', "r");
        while (($righe = fgetcsv($handle)) !== false) {
            $righe[] = $righe;
        }

        fclose($handle);

        //remove the first one that contains headers
        $headers = array_shift($righe);

        //Combina l'header con ogni riga

        $array = [];
        foreach ($righe as $righe) {
            $array[] = array_combine($headers, $righe);
        }

        //informazioni riguardo all'array
        var_dump($array);

        //Scrittura in un potenziale file csv:
        */











        /*
        function open_addressbook() {
            global $config;
            global $addressbook;
            if(isset($addressbook)) {
              return $addressbook;
            }
            $output = array();
            $filename = $config['data.csv'];
            if(file_exists($filename)) {
              $file = fopen($filename,'r');
              if ($file !== FALSE) {
                while ($data = fgetcsv($file)) {
                  $output[] = array (
                              'nome' => $data[0],
                              'cognome' => $data[1],
                              'telefono' => $data[2],
                              'email' => $data[3],
                              'città' => $data[4] 
                              );
                }
                fclose($file);
              }
            }
            $addressbook = $output;
            return $output;
         }
        */
    ?>
    <!--END LANG_CODE-->


</body>
</html>