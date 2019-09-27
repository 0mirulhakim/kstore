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

<<<<<<< HEAD
                <select name="state_id" class="form-control" style="width:350px">

                    <option value="">--- Select State ---</option>

                    @foreach ($departments as $key => $value)
=======
                <select name="state" class="form-control" style="width:350px">

                    <option value="">--- Select State ---</option>

                    @foreach ($states as $key => $value)
>>>>>>> 5ff3ba89a601acd470c960025a4c18899385c181

                        <option value="{{ $key }}">{{ $value }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label for="title">Select City:</label>

<<<<<<< HEAD
                <select name="city_id" class="form-control" style="width:350px">
=======
                <select name="city" class="form-control" style="width:350px">
>>>>>>> 5ff3ba89a601acd470c960025a4c18899385c181

                </select>

            </div>

        </div>

    </div>

</div>


<script type="text/javascript">

    $(document).ready(function() {

<<<<<<< HEAD
        $('select[name="state_id"]').on('change', function() {
=======
        $('select[name="state"]').on('change', function() {
>>>>>>> 5ff3ba89a601acd470c960025a4c18899385c181

            var stateID = $(this).val();

            if(stateID) {

                $.ajax({

<<<<<<< HEAD
                    url: 'http://k-store.pdtk/createStaff/ajax/'+stateID,
=======
                    url: 'http://k-store.pdtk/myform/ajax/'+stateID,
>>>>>>> 5ff3ba89a601acd470c960025a4c18899385c181

                    type: "GET",

                    dataType: "json",

                    success:function(data) {




<<<<<<< HEAD
                        $('select[name="city_id"]').empty();

                        $.each(data, function(key, value) {

                            $('select[name="city_id"]').append('<option value="'+ key +'">'+ value +'</option>');
=======
                        $('select[name="city"]').empty();

                        $.each(data, function(key, value) {

                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
>>>>>>> 5ff3ba89a601acd470c960025a4c18899385c181

                        });


                    }

                });

            }else{

<<<<<<< HEAD
                $('select[name="city_id"]').empty();
=======
                $('select[name="city"]').empty();
>>>>>>> 5ff3ba89a601acd470c960025a4c18899385c181

            }

        });

    });

</script>


</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 5ff3ba89a601acd470c960025a4c18899385c181
