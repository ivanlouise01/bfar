<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BFAR</title>
    <script src="https://kit.fontawesome.com/bca5dff172.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Barlow&display=swap');

        *{font-family: 'Barlow', sans-serif;  color: #67668A !important;}
        .active{
            border-radius: 0 !important;
            background: #67668A !important;
            color: white !important;
        }
        
        .dataTables_wrapper .dataTables_paginate .paginate_button.current{
          background: #67668A !important;
          color: white !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover{
          background: #67668A !important;
          color: white !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{
          background: none !important;
          color: #67668A !important;
        }
        table.dataTable thead th, table.dataTable thead td {text-align: center;}
        th {
          border-top: 1px solid #dddddd;
          border-bottom: 1px solid #dddddd;
          border-right: 1px solid #dddddd;
        }
        
        th:first-child {
          border-left: 1px solid #dddddd;
        }
        
    </style>
</head>
  <body>

  <main class="d-flex flex-nowrap" style="background: red; height: 100vh; overflow: hidden;">

  <?php include 'sidebar.php' ?>

  



  <div class="d-flex flex-column p-5 flex-shrink-0 bg-light flex-fill" style="border: solid #efeff3 2px;">
        <div class="d-flex justify-content-between"> 
                <div class="d-flex justify-content-center" style="margin: 25px;"> 
                  <a href="#" class="nav-link" style="padding-right: 10px !important;">
                      Home 
                  </a>
                  <p style="padding-right: 10px !important;"> > </p>
                  <a href="#" class="nav-link ">
                      <b> Payroll </b>
                  </a>
                </div>
                <div class="d-flex justify-content-around" style="background: #F5F5F5; border: solid #efeff3 2px; width: 15%; padding: 5px;"> 
                      <div class="d-flex flex-column justify-content-center align-items-center">
                        <p style="margin: 0 !important;"><b>Aug 15 2022</b></p>
                        <p style="margin: 0 !important;"><b>11:29 AM</b></p>
                      </div>
                      <div class="d-flex flex-column justify-content-center align-items-center">
                        <p style="margin: 0 !important;"><b>Friday</b></p>
                        <p><b></b></p>
                      </div>
                </div>
        </div>

        <div class="d-flex" style="padding-top: 25px !important;"> 
          <div class="d-flex justify-content-between flex-fill" style="background: #F5F5F5; border: solid #efeff3 2px; padding: 15px; margin: 15px;">
               <div class="d-flex flex-column justify-content-around">
                  <p>Earnings</p>
                  <p style="font-size:25px;"><b>30</b></p>
               </div>
               <div class="d-flex">
                  <p></p>
                  <p class="mt-auto p-2 bd-highlight">Totals</p>
               </div>
          </div>
          <div class="d-flex justify-content-between flex-fill" style="background: #F5F5F5; border: solid #efeff3 2px; padding: 15px; margin: 15px;">
               <div class="d-flex flex-column justify-content-around">
                  <p>Deduction</p>
                  <p style="font-size:25px;"><b>30</b></p>
               </div>
               <div class="d-flex">
                  <p></p>
                  <p class="mt-auto p-2 bd-highlight">Totals</p>
               </div>
          </div>
        </div>





        <div class="d-flex flex-column flex-fill overflow-auto" style="padding-top: 25px !important; width: 100%;"> 
        <div class="d-flex flex-row justify-content-end" style="margin-bottom: 15px;">
            
            <p style="margin-right: 15px;">From date:</p>
            <input type="text" id="min" name="min" style="margin-right: 15px;">
            <p style="margin-right: 15px;">To date:</p>
            <input type="text" id="max" name="max" style="margin-right: 15px;">

        </div>
            
        <table id="example" class="display table table-striped cell-border" style="width:80vw">
        <thead>
            <tr>
                <th rowspan="2">Employee</th>
                <th rowspan="2">Position</th>
                <th rowspan="2">PRC</th>
                <th rowspan="2">Monthly Rate</th>
                <th rowspan="2">no. of days</th>
                <th rowspan="2">Gross Amount Earned</th>
                <th colspan="3">Tax</th>
                <th colspan="3">Contributions</th>
                <th rowspan="2">Net Amount Due</th>
                <th rowspan="2">Signature of Recipient</th>
                <th rowspan="2">Date</th>
            </tr>
            <tr>
                
                
                <th>2%</th>
                <th>5%</th>
                <th>10%</th>
                <th>SSS</th>
                <th>PAGIBIG</th>
                <th>PHILHEALTH</th>
                
            </tr>
        </thead>
        <tbody>

        <?php
          $x = 1;

          while($x <= 25) {
            echo "
            <tr>
                <td>Ken Gervacio</td>
                <td>Administrative Aide VI/Store Keeper</td>
                <td></td>
                <td>15.524</td>
                <td>11</td>
                <td>7762</td>
                <td>14.82</td>
                <td>14.82</td>
                <td>14.82</td>
                <td></td>
                <td></td>
                <td></td>
                <td>7762</td>
                <td></td>
                <td>2011-04-25</td>
            </tr>
            ";
            $x++;
          }
        ?>
        <?php
          $x = 1;

          while($x <= 25) {
            echo "
            <tr>
                <td>Juan Delacruz</td>
                <td>Administrative Aide VI/Store Keeper</td>
                <td></td>
                <td>15.524</td>
                <td>11</td>
                <td>7762</td>
                <td>14.82</td>
                <td>14.82</td>
                <td>14.82</td>
                <td></td>
                <td></td>
                <td></td>
                <td>7762</td>
                <td></td>
                <td>2012-03-29</td>
            </tr>
            ";
            $x++;
          }
        ?>
        <?php
          $x = 1;

          while($x <= 25) {
            echo "
            <tr>
                <td>Pedro penduko</td>
                <td>Administrative Aide VI/Store Keeper</td>
                <td></td>
                <td>15.524</td>
                <td>11</td>
                <td>7762</td>
                <td>14.82</td>
                <td>14.82</td>
                <td>14.82</td>
                <td></td>
                <td></td>
                <td></td>
                <td>7762</td>
                <td></td>
                <td>2010-10-14</td>
            </tr>
            ";
            $x++;
          }
        ?>

            
            

        </tbody>
        <tfoot>
        </tfoot>
    </table>
        </div>


  </div>



  </main>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script>
    <script>
  var minDate, maxDate;
 
 // Custom filtering function which will search data in column four between two values
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var date = new Date( data[14] );
  
         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         ) {
             return true;
         }
         return false;
     }
 );
  
 $(document).ready(function() {
     // Create date inputs
     minDate = new DateTime($('#min'), {
         format: 'MMMM Do YYYY'
     });
     maxDate = new DateTime($('#max'), {
         format: 'MMMM Do YYYY'
     });
  
     // DataTables initialisation
     var table = $('#example').DataTable();
  
     // Refilter the table
     $('#min, #max').on('change', function () {
         table.draw();
     });
 });
    
    </script>
    
  </body>
</html>