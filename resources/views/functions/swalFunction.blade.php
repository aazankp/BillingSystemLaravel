@if(session('status'))
    <script>
        switch( "{{ session('status') }}" ) {
          case 'addAccountSuccess':
            success();
            message = "Data Submited Successfully!";
            break;
          default:
            alert("Not Found");
        }

        Swal.fire({
            icon: icon,
            title: title,
            text: message,
            timer: timer,
            showConfirmButton: button
        });

        function success()
        {
            icon = "success";
            title = "Success!";
            timer = "2500";
            button = false;
        }

        function error()
        {
            icon = "error";
            title = "Oops!";
            timer = false;
            button = true;
        }
    </script>
@endif