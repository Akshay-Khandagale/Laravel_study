<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Creation</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <form id="my-form">
        @csrf
        <input type="text" name="name" placeholder="Enter Name" required>
        <br><br>
        <input type="email" name="email" placeholder="Enter the Email" required>
        <br><br>
        <input type="file" name="file" id="file" required>
        <br><br>
        <input type="submit" id="btnSubmit" value="Add Student">
    </form>

    <span id="output"></span>

    <script>
        $(document).ready(function(){
            $("#my-form").submit(function(event){
                event.preventDefault();  

                var form = $("#my-form")[0]; //get form data
                var data = new FormData(form);

                $("#btnSubmit").prop("disable",true);

                $.ajax({
                    type:"POST",
                    url:"{{ route('addStudent') }}",
                    data:data,
                    processData:false,
                    contentType:false,
                    success:function(data){
                        alert(data.res);
                    },
                    error:function(e){
                        console.log(e.responseText);
                    }
                })

            });
        });
    </script>

</body>
</html>