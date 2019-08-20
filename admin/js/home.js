$(document).ready(function(){
    var dbTable;
    var tableData;
    var table;
    $.ajax({
        url:'../php/home.php',
        method:'GET',
       dataType:'JSON',
        success:function(data){
           
            console.log(data);
            table= $('#displayTableData').DataTable({
                data:data,
                dom: 'Blfrtip',
                
        buttons: [
            {
                text: 'Add Product',
                className:'green',
                
                action: function ( e, dt, node, config ) {
                    $('#addProduct').modal({
                        backdrop:false,
                        show:true,
                        focus:true
                    });

                }
            }
        ],
                
                columns: [
                    { "data": "Pid" },
                    { "data": "Name" },
                    { "data": "Image" },
                    { "data": "Quantity" },
                    {"data":"Perday"},
                    {"data":"Deposit"},
                ]
            });
            $('#displayTableData tbody').on( 'click', 'tr', function () {
                tableData=table.row( this ).data();
               
                for(var i=0;i<data.length;i++){
                    if(data[i].Pid === tableData.Pid){
                        dbTable=data[i].tab;
                        break;
                    }
                }
                $('#updateProduct').modal({
                    backdrop:false,
                    show:true,
                    focus:true
                });
                $('#pid').val(tableData.Pid);
                $('#name').val(tableData.Name);
                $('#image').val(tableData.Image);
                $('#quantity').val(tableData.Quantity);
                $('#perday').val(tableData.Perday);
                $('#deposit').val(tableData.Deposit);
                console.log(dbTable);
                
               console.log(tableData);
               
                
            } );
            
        },
        error:function(err){
            console.log(err);
            
        }
    });
    $('#save').click(function(){
        var pid=$('#pid').val();
        var name= $('#name').val();
        var image= $('#image').val();
        var quantity= $('#quantity').val();
        var perday=  $('#perday').val();
        var deposit= $('#deposit').val();
        var sendObj={
            pid,
            name,
            image,
            quantity,
            perday,
            deposit,
            dbTable

        }
        $.ajax({
        url:'../php/update.php',
        method:'POST',
        data:sendObj,
       
        success:function(data){
            console.log(data);
            $.ajax({
                url:'../php/home.php',
                method:'GET',
               dataType:'JSON',
                success:function(data1){
                    console.log(data1);
                    table.destroy();
                    table= $('#displayTableData').DataTable({
                        
                        data:data1,
                        dom: 'Blfrtip',
                        buttons: [
                            {
                                text: 'Add Product',
                                className:'green',
                                
                                action: function ( e, dt, node, config ) {
                                    $('#addProduct').modal({
                                        backdrop:false,
                                        show:true,
                                        focus:true
                                    });
                
                                }
                            }
                        ],
                        columns: [
                            { "data": "Pid" },
                            { "data": "Name" },
                            { "data": "Image" },
                            { "data": "Quantity" },
                            {"data":"Perday"},
                            {"data":"Deposit"}
                            ]
                    });
                }
            });
                
        },
        error:(err)=>{
            console.log(err);
        }
    });
        
        $('#updateProduct').modal('hide');
    });
 
    
})