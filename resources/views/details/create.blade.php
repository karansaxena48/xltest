@extends('layouts.app')

@section('content')
<h2>Create User</h2>

<form id='dform'>
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="country_id">Country</label>
        <select id="country_id" name="country_id"></select>
    </div>
    <div>
        <label for="state_id">State</label>
        <select id="state_id" name="state_id"></select>
    </div>
    <div>
        <label for="city_id">City</label>
        <select id="city_id" name="city_id"></select>
    </div>
    <div>
        <input type="submit" id="submit" value="Submit">
    </div>
</form>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\DetailsRequest'); !!}
<script>
    $(function(){
        reset();

        $('#country_id').change(function() {
            $('#state_id').html("<option value=''>Select State</option>");
            $('#city_id').html("<option value=''>Select City</option>");
            getStates($('#country_id option:selected').val());
        });
        $('#state_id').change(function() {
            $('#city_id').html("<option value=''>Select City</option>");
            getCities($('#state_id option:selected').val());
        });

$("#dform").submit(function(e){
    e.preventDefault();
//   });
//         $('#submit').click(function() {
            let name = $('#name').val();
            let email = $('#email').val();
            let country_id = $('#country_id option:selected').val();
            let state_id = $('#state_id option:selected').val();
            let city_id = $('#city_id option:selected').val();
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if(name == '') {
                alert('invalid name');
                return;
            } else if(email == '' || reg.test(email) == false) {
                alert('invalid email');
                return;
            } else if(country_id == '') {
                alert('invalid country');
                return;
            } else if(state_id == '') {
                alert('invalid state');
                return;
            } else if(city_id == '') {
                alert('invalid city');
                return;
            }

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:"{{route('details.store')}}",
                method:'post',
                async: false,
                data:{name: name, email: email, country_id: country_id, state_id: state_id, city_id: city_id},
                success: function (data) {
                    console.log(data);
                    alert('Created');
                    reset();
                },
                error: function (data) {
                    console.log(data.responseText);
                    alert(data.responseText);
                    reset();
                },
                complete: function (data) {
                    console.log(data);
                    reset();
                }
            });
            // .done(function($data) {
            //     console.log($data);
            // })
        });
    });

    function reset() {
        $('#name').html("");
        $('#email').html("");
        getCountries();
        $('#state_id').html("<option value=''>Select State</option>");
        $('#city_id').html("<option value=''>Select City</option>");
    }

    function getCountries() {
            $.ajax({
                url:"{{ route('countries') }}",
                method:'get',
                success: function (data) {
                    $('#country_id').html("<option value=''>Select Country</option>");
                    for(let i in data) {
                        console.log(data[i]);
                        $('#country_id').append("<option value="+data[i].id+">"+data[i].name+"</option>");
                    }
                },
                error: function (data) {
                    console.log(data);
                },
                complete: function (data) {
                    console.log(data);
                }
            });
    }

    function getStates(countryId) {
            $.ajax({
                url: '/states',
                method:'get',
                data: {id: countryId},
                success: function (data) {
                    $('#state_id').html("<option value=''>Select State</option>");
                    for(let i in data) {
                        console.log(data[i]);
                        $('#state_id').append("<option value="+data[i].id+">"+data[i].name+"</option>");
                    }
                },
                error: function (data) {
                    console.log(data);
                },
                complete: function (data) {
                    console.log(data);
                }
            });
    }

    function getCities(stateId) {
            $.ajax({
                url:"/cities",
                method:'get',
                data: {id: stateId},
                success: function (data) {
                    $('#city_id').html("<option value=''>Select City</option>");
                    for(let i in data) {
                        console.log(data[i]);
                        $('#city_id').append("<option value="+data[i].id+">"+data[i].name+"</option>");
                    }
                },
                error: function (data) {
                    console.log(data);
                },
                complete: function (data) {
                    console.log(data);
                }
            });
    }

</script>
@endsection
