$(document).ready(function () {
$('#VisitorDt').DataTable();
$('.dataTables_length').addClass('bs-select');

$('#serviceTable').DataTable();
$('.dataTables_length').addClass('bs-select');

});

function getServiceData(){
    axios.get('/getServiceData')
    .then(function(response){
        if (response.status=200) {
            $('#mainDiv').removeClass('d-none');
            $('#loaderDiv').addClass('d-none');
            var jsonData=response.data;
            $.each(jsonData, function(i, item){
                $('<tr>').html(
                    "<td><img class='table-img' src="+jsonData[i].service_img+"></td>"+
                    "<td>"+jsonData[i].service_name+"</td>"+
                    "<td>"+jsonData[i].service_des+"</td>"+
                    "<td><a class='ServiceDeleteBtn' data-id="+jsonData[i].id+" href=''>Delete</a></td>"+
                    "<td><a href=''>Edit</a></td></td>"
                ).appendTo('#serviceTableBody');
            });
            //service table delete icon click
            $('.ServiceDeleteBtn').click(function(){
                var id=$(this).data('id');
                $('#servicedeleteID').html(id);
                $('#deleteModal').modal('show');
            });
        } else {
            $('#loaderDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');

        }

    })
    .catch(err => {
        $('#loaderDiv').addClass('d-none');
        $('#wrongDiv').removeClass('d-none');
    })
}
