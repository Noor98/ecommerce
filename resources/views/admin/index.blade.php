  
@include('admin.layouts.header')
@include('admin.layouts.navbar')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	@include('admin.layouts.message')
    	@yield('content')
     </section>
    <!-- /.content -->
  </div>
<!--
<script>
function delete_all()
{
    $(document).on('click', '.del_all', function(){
        $('#form_data').submit();
    });
    $(document).on('click', '.delBtn', function(){
        var item_checked = $('input[class="item_checkbox"]:checkbox').filter(":checked").length;
        if(item_checked >0)
           {
            $('.record_count').text(item_checked);
            $('.not_empty_record').removeClass('hidden');
            $('.empty_record').addClass('hidden');
           }else{
            $('.record_count').text('');
            $('.not_empty_record').addClass('hidden');
            $('.empty_record').removeClass('hidden');   
           }
        $('#multipleDelete').modal('show');
    });
}
    function check_all()
{
            $('input[class="item_checkbox"]:checkbox').each(function(){
                if($('input[class="check_all"]:checkbox:checked').length == 0)
                    {
                        $(this).prop('checked',false);
                    }else
                        {
                        $(this).prop('checked',true);                         
                        }
            });
}


</script>
-->
@include('admin.layouts.footer')