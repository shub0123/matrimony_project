<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Aquila Matrimony.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Aquila Matrimony
                </div>
            </div>
        </div>
    </div>
</footer>


@section('script')

<script src="{{ URL::asset('admin/assets/libs/list.js/list.js.min.js') }}"></script>
<script src="{{ URL::asset('admin/assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
<!--ecommerce-customer init js -->
<script src="{{ URL::asset('admin/assets/js/pages/ecommerce-customer-list.init.js') }}"></script>
<script src="{{ URL::asset('admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('admin/assets/js/app.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>

    $(document).ready(function() {


        $.ajax({
            url: '{{url("getcast")}}',
            data: "cast=" + $("#cast").val(),
            type: "GET",
            success: function(html) {
                $("#cast").html(html);
            }
        });
        $.ajax({
            url: '{{url("getsubcast")}}',
            data: "subcast=" + $("#subcast").val(),
            type: "GET",
            success: function(html) {
                $("#subcast").html(html);
            }
        });

    });
    $('.delete_item').click(function() {
        var id = $(this).attr('item_id');
        var model = $(this).attr('model');
        $.ajax({
            type: 'POST',
            url: "{{ route('admin.common.delete') }}",
            data: {
                id: id,
                model: model,
                "_token": '{{ csrf_token() }}'

            },
            success: function(response) {
                if (response.status == 1) {
                    location.reload();
                }

                console.console.log((response));
            }
        })
    })
    $('#category').change(function(e) {
        $.ajax({
            url: '{{url("getcast")}}',
            data: "cast=" + $("#cast").val(),
            type: "GET",
            success: function(html) {
                $("#cast").html(html);
            }
        });
    });
    $('#category').change(function(e) {
        $.ajax({
            url: '{{url("getsubcast")}}',
            data: "subcast=" + $("#subcast").val(),
            type: "GET",
            success: function(html) {
                $("#subcast").html(html);
            }
        });
    });
</script>
@endsection