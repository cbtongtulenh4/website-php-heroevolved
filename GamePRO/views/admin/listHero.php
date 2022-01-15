
<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/style.css?v=<?php echo time(); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/font-awesome.min.css?v=<?php echo time(); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>alert.css?v=<?php echo time(); ?>" />
    
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/list.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <style>
        .container{
            position: absolute;
            width: 1095px;
            top: 125px;
            height: 100px;
            padding: 0;
            right: 0;

        }
        .list{
            top: 10px;
        }
    </style>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/admin/menu.php"); ?>

<Section id="main-content">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/admin/header.php"); ?>

</Section>
<div class="clear"></div>
    
    <div class="container">
        <div class="container list">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
          <h2>Heroes <b>EVOLVED</b></h2>
         </div>
         <div class="col-sm-6">
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Hero</span></a>
          <a href="#deleteEmployeeModal" class="btn btn-danger btnDelete" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>      
         </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
          <th>
           <span class="custom-checkbox">
            <input type="checkbox" id="selectAll">
            <label for="selectAll"></label>
           </span>
          </th>
        <th>Name</th>
        <th>Attribute</th>
        <th>Path Image</th>
        <th>Information</th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/connect.php");
            $sql="SELECT COUNT(*)AS maxItems FROM heros";
            $result = $conn->query($sql);
            $maxItems = ($result->fetch_assoc())["maxItems"];
            $page = $_GET["page"];
            $maxPageItems = 5;
            if($page == 1){
                $_SESSION["max"] = $maxPageItems;
            }
            $maxPage = ceil($maxItems/($maxPageItems*1.0));
            if($page > $_SESSION["max"] ){
                if( $page+4 <= $maxPage ){
                    $_SESSION["max"] = $page+4;
                }else{  
                    $_SESSION["max"] = $maxPage;
                }
            }
            $offer = '';
            if($page <= $maxPage){
                $offer = ($page-1) * $maxPageItems;
            }
            $sql = "SELECT * FROM heros LIMIT ".$offer.",".$maxPageItems."";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox<?php echo $row["id"]; ?>" name="options[]" value="<?php echo $row["id"]; ?>">
                            <label for="checkbox1"></label>
                        </span>
                        </td>
                    
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["attribute"]; ?></td>
                        <td><?php echo $row["image"]; ?></td>
                        <td>..............</td>
                        <td>
                            <a href="#editEmployeeModal" id="<?php echo $row["id"]; ?>" class="edit" data-toggle="modal" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" id="<?php echo $row["id"]; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php
                }
            }
        ?>
        
        </tbody>
        </table>
       <div class="clearfix">
                    <div class="hint-text">Showing <b><?php echo $maxPageItems; ?></b> out of <b><?php echo $maxItems; ?></b> entries</div>
                    <ul class="pagination">
                        <li class="page-item <?php if($page < $maxPageItems) echo "disabled"; ?>">
                            <a href="<?php echo $_SESSION["path"]; ?>views/admin/listHero.php?page=<?php
                                if($page > $_SESSION["max"]){
                                    $page = $_SESSION["max"] - $maxPageItems - 1;
                                    echo $page;
                                }
                                echo $page;
                            ?>
                            ">Previous</a></li>
                        <?php
                            $max = $_SESSION["max"];
                            for($i = $max-4; $i <= $max; $i++){
                                ?>
                                    <li class="page-item <?php if($i==$page)echo 'active'; ?>" value="<?php echo $i; ?>">
                                        <a href="listHero.php?page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                                    </li>
                                <?php
                            }
                        ?>
                        <?php function check_Next(){
                            if(($page + $maxPageItems - 1) >= $maxPage)
                                return false;
                            return true;
                        }?>
                        <li class="page-item <?php if($max >= $maxPage) echo "disabled"; ?>">
                            <a href="listHero.php?page=<?php 
                                if($max < $maxPage){
                                    $page = $max + 1;
                                    echo $page; 
                                }
                                else echo $page;
                            ?>
                            " class="page-link">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     <!-- Edit Modal HTML -->
     <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <form action="<?php echo $_SESSION["path"]; ?>handle/admin/add.php" method="POST">
         <div class="modal-header">      
          <h4 class="modal-title">Add Hero</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">     
            <div class="form-group">
             <label>Name</label>
             <input type="text" class="form-control autocomplete" name="name" required>
            </div>
            <div class="form-group">
             <label>Attribute</label>
             <input type="text" class="form-control autocomplete" name="attribute" required>
            </div>
            <div class="form-group">
             <label>Image</label>
             <input type="text" class="form-control autocomplete" name="image" required>
            </div>
            <div class="form-group">
             <label>Information</label>
             <textarea rows="3" class="form-control" name="information"></textarea>
            </div>     
        </div>
         <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Add">
         </div>
        </form>
       </div>
      </div>
     </div>
     <!-- Edit Modal HTML -->
     <div id="editEmployeeModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <form action="<?php echo $_SESSION["path"]; ?>handle/admin/update.php" method="POST">
         <div class="modal-header">
          <h4 class="modal-title">Edit Hero</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <input type="hidden" name="id" id="id">
         </div>
         <div class="modal-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control autocomplete" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label>Attribute</label>
                <input type="text" class="form-control autocomplete" name="attribute" id="attribute" required>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control autocomplete" name="image" id="image" required>
            </div>
            <div class="form-group">
                <label>Information</label>
                <textarea rows="3" class="form-control" name="information" id="information" ></textarea>
            </div>     
         </div>
         <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="Save">
         </div>
        </form>
       </div>
      </div>
     </div>
     <!-- Delete Modal HTML -->
     <div id="deleteEmployeeModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <form action="<?php echo $_SESSION["path"]; ?>handle/admin/delete.php" method="POST">
        <input type="hidden" name="ids" id="ids">
         <div class="modal-header">      
          <h4 class="modal-title">Delete Hero</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">     
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
         </div>
         <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
         </div>
        </form>
       </div>
      </div>
     </div>
    </div>
    
    <div class="alertG">
        <div class="<?php if(isset($_GET["value"]))echo  $_GET["value"]; ?> hide">
            <span class="fas fa-exclamation-circle"></span>
            <span class="msg">
                <?php 
                    if(isset($_GET["msg"])){
                        if($_GET["msg"] == "success") echo "Successful Execution";
                        else if($_GET["msg"] == "fail") echo "Failed Execution";
                    } 
                ?>
            </span> 
            <div class="close-btn">
                <span class="fas fa-times"></span>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
        $(document).ready(function()
        {
         // Activate tooltip
         $('[data-toggle="tooltip"]').tooltip();
         
         // Select/Deselect checkboxes
         var checkbox = $('table tbody input[type="checkbox"]');
         $("#selectAll").click(function()
         {
          if(this.checked){
           checkbox.each(function()
           {
            this.checked = true;                        
           });
          }
          else
          {
           checkbox.each(function()
           {
            this.checked = false;                        
           });
          } 
         });
         checkbox.click(function()
         {
          if(!this.checked)
          {
           $("#selectAll").prop("checked", false);
          }
         });

           $('.alert').addClass("show");
           $('.alert').removeClass("hide");
           $('.alert').addClass("showAlert");
           setTimeout(function(){
             $('.alert').removeClass("show");
             $('.alert').addClass("hide");
           },5000);

        });

        $('.close-btn').click(function(){
           $('.alert').removeClass("show");
           $('.alert').addClass("hide");
         });

        /*$('#edit').click(function(){
            var data={};
            data["id"] = $('#id').val();
            $.ajax({
                url: 'update.php',
                type: "POST",
                contextType: 'application/json',
                dataType: "json",
                data: JSON.stringify(data),
                success: function(result){
                    $('#abc').val(result);
                    console.log(result);
                },
                error: function(error){
                    console.log(error);
                }
            });
        }) */
        $('.edit').on('click', function(){
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            data[0] = $(this).attr('id');
            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#attribute').val(data[2]);
            $('#image').val(data[3]);
            $('#information').val(data[4]);
        });

        $('.delete').on('click',function(){
	        $('#ids').val($(this).attr('id'));  
        });

        $('.btnDelete').on('click', function(){
            var ids = $('tbody input[type=checkbox]:checked').map(function(){
                return $(this).val();
            }).get();
	    $.ajax({
                url: '/project/GamePRO/handle/admin/delete.php',
                type: 'POST',
                data: {ids:ids}
            });
        })

    </script>

    <script>
        $('.page-item').click(function(){
            $(this).addClass('active').siblings().removeClass('active');
            /*var page = $(this).attr('value');
            $.ajax({
                url: 'listHero.php',
                type: 'POST',
                data: {page:page}
            });*/
        })
    </script>

    <script>
        var data = "PHP HTML".split(" ");
        $(".autocomplete").autocomplete(data);
    </script>

</body>
</html>
