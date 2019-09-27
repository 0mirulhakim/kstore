<!DOCTYPE html>

<html>

<head>

    <title>Laravel Dependent Dropdown Example with demo</title>

    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

</head>

<body>


<div class="container">

    <div class="panel panel-default">

        <div class="panel-heading">Select State and get bellow Related City</div>

        <div class="panel-body">

            <div class="form-group">

                <label for="title">Select State:</label>

                <select name="state_id" class="form-control" style="width:350px">

                    <option value="">--- Select State ---</option>

                    @foreach ($departments as $key => $value)

                        <option value="{{ $key }}">{{ $value }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label for="title">Select City:</label>

                <select name="city_id" class="form-control" style="width:350px">

                </select>

            </div>

        </div>

    </div>

</div>


<script type="text/javascript">

    $(document).ready(function() {

        $('select[name="state_id"]').on('change', function() {

            var stateID = $(this).val();

            if(stateID) {

                $.ajax({

                    url: 'http://k-store.pdtk/createStaff/ajax/'+stateID,

                    type: "GET",

                    dataType: "json",

                    success:function(data) {




                        $('select[name="city_id"]').empty();

                        $.each(data, function(key, value) {

                            $('select[name="city_id"]').append('<option value="'+ key +'">'+ value +'</option>');

                        });


                    }

                });

            }else{

                $('select[name="city_id"]').empty();

            }

        });

    });

</script>


</body>

</html>
