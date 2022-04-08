<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap unlock</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Recap unlock</a>
  </div>
</nav>
<div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table id="example" class="table">
                                            <thead> 
                                                <tr>
												    <th>Date</th>
					                                <th>total_unlock</th>
					                                <th>total_unlock_silver</th>
					                                <th>total_unlock_gold_free</th>
					                                <th>total_unlock_gold</th>
                                                    <th>total_unlock_gold_coin</th>
                                                    <th>total_unlock_gold_nominal</th>
                                                    <th>total_unique_user</th>
                                                    <th>total_access_percentage</th>
                                                    <th>last_update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
        <?php foreach ($dataunlock1 as $value) { ?>
      <tr>
      <td><?php echo $value['date'] ?></td>
      <td><center><?php echo $value['total_unlock'] ?></center></td>
      <td><center><?php echo $value['total_unlock_silver'] ?></center></td>
      <td><center><?php echo $value['total_unlock_gold_free'] ?></center></td>
      <td><center><?php echo $value['total_unlock_gold'] ?><center></td>
      <td><center><?php echo $value['total_unlock_gold_coin'] ?></center></td>
      <td><center><?php echo $value['total_unlock_gold_nominal'] ?></center></td>
      <td><center><?php echo $value['total_unique_user'] ?></center></td>
      <td><center><?php echo $value['unique_access_percentage'] ?></center></td>
      <td><?php echo $value['last_updated'] ?></td>
    </tr>
        <?php } ?>
    </tbody>
    </table>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
  </script>
  <script>
    $.noConflict();
    jQuery(document).ready(function($) {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  </script>
</body>
</html>



