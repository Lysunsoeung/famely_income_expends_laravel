{{-- Successfull Login --}}
{{-- @if(session()->has('message'))
<script>
  toastr.options = {
    "positionClass": "toast-top-right",

  };
  toastr["{{ session('alert-type') }}"]("{{ session('message') }}");
</script>
@endif --}}

{{-- @if (session('error'))

  <script>
    Swal.fire({
    icon: 'error',
    title: 'Error',
    text: '{{ session('error') }}'
  });
  </script>

@endif

@if(session('success'))

<script>

  Swal.fire({
    icon: 'success',
    title: 'Success',
    text: '{{ session('success') }}'
  });
</script>
@endif

@if(session('warning'))


  <script>
    Swal.fire({
    icon: 'warning',
    title: 'Warning',
    text: '{{ session('warning') }}'
  });
  </script>


@endif --}}

{{--


<script>


@if (Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }

@endif

{{--Notifications--}}

{{-- @if (session('error'))
  pop({msg : '{{ session('error') }}', type : 'error', title: 'Error!!'});
@endif

@if (session('warning'))
  pop({msg : '{{ session('warning') }}', type : 'warning', title: 'Warning!!'});
@endif

@if (session('success'))
  pop({msg : '{{ session('success') }}', type : 'success', title: 'GREAT!!'});
@endif




function pop(data){
    Swal.fire({
        title: data.title ? data.title : 'Oops...',
        text: data.msg,
        icon: data.type,

    });
}


</script> --}}
