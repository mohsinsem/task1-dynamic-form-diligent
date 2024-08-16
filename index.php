<?php include ('include/header.php'); ?>
<div class="jumbotron text-center">
   <h1>Dynamic Form Creations</h1>
   <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dynamicFormModal">Form Creation</button>
</div>
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <h3>Dynamic Forms</h3>
         <table class="table">
            <thead class="thead-dark">
               <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
               </tr>
               <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
               </tr>
               <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
<?php include ('include/footer.php'); ?>